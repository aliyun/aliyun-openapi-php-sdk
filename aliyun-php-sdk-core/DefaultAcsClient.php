<?php

/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

class DefaultAcsClient implements IAcsClient
{
    /**
     * @var IClientProfile
     */
    public $iClientProfile;
    /**
     * @var bool
     */
    public $__urlTestFlag__;
    /**
     * @var LocationService
     */
    private $locationService;
    /**
     * @var RamRoleArnService
     */
    private $ramRoleArnService;
    /**
     * @var EcsRamRoleService
     */
    private $ecsRamRoleService;

    /**
     * DefaultAcsClient constructor.
     *
     * @param $iClientProfile
     */
    public function __construct($iClientProfile)
    {
        $this->iClientProfile  = $iClientProfile;
        $this->__urlTestFlag__ = false;
        $this->locationService = new LocationService($this->iClientProfile);
        if ($this->iClientProfile->isRamRoleArn()) {
            $this->ramRoleArnService = new RamRoleArnService($this->iClientProfile);
        }
        if ($this->iClientProfile->isEcsRamRole()) {
            $this->ecsRamRoleService = new EcsRamRoleService($this->iClientProfile);
        }
    }

    /**
     * @param      $request
     * @param null $iSigner
     * @param null $credential
     * @param bool $autoRetry
     * @param int  $maxRetryNumber
     *
     * @return mixed|SimpleXMLElement
     * @throws ClientException
     * @throws ServerException
     */
    public function getAcsResponse($request,
                                   $iSigner = null,
                                   $credential = null,
                                   $autoRetry = true,
                                   $maxRetryNumber = 3)
    {
        $httpResponse = $this->doActionImpl($request, $iSigner, $credential, $autoRetry, $maxRetryNumber);
        $respObject   = $this->parseAcsResponse($httpResponse->getBody(), $request->getAcceptFormat());
        if (false === $httpResponse->isSuccess()) {
            $this->buildApiException($respObject, $httpResponse->getStatus(), $request);
        }
        return $respObject;
    }

    /**
     * @param AcsRequest $request
     * @param null       $iSigner
     * @param null       $credential
     * @param bool       $autoRetry
     * @param int        $maxRetryNumber
     *
     * @return HttpResponse
     * @throws ClientException
     */
    private function doActionImpl($request, $iSigner = null, $credential = null, $autoRetry = true, $maxRetryNumber = 3)
    {
        if (null == $this->iClientProfile
            && (null == $iSigner || null == $credential
                || null == $request->getRegionId()
                || null == $request->getAcceptFormat())) {
            throw new ClientException('No active profile found.', 'SDK.InvalidProfile');
        }
        if (null == $iSigner) {
            $iSigner = $this->iClientProfile->getSigner();
        }
        if (null == $credential) {
            $credential = $this->iClientProfile->getCredential();
        }
        if ($this->iClientProfile->isRamRoleArn()) {
            $credential = $this->ramRoleArnService->getSessionCredential();
        }
        if ($this->iClientProfile->isEcsRamRole()) {
            $credential = $this->ecsRamRoleService->getSessionCredential();
        }
        if (null == $credential) {
            throw new ClientException('Incorrect user credentials.', 'SDK.InvalidCredential');
        }

        $request = $this->prepareRequest($request);

        // Get the domain from the Location Service by speicified `ServiceCode` and `RegionId`.
        $domain = null;
        if (null != $request->getLocationServiceCode()) {
            $domain =
                $this->locationService->findProductDomain($request->getRegionId(),
                                                          $request->getLocationServiceCode(),
                                                          $request->getLocationEndpointType(),
                                                          $request->getProduct());
        }
        if ($domain == null) {
            $domain = EndpointProvider::findProductDomain($request->getRegionId(), $request->getProduct());
        }

        if (null == $domain) {
            throw new ClientException('Can not find endpoint to access.', 'SDK.InvalidRegionId');
        }
        $requestUrl = $request->composeUrl($iSigner, $credential, $domain);

        if ($this->__urlTestFlag__) {
            throw new ClientException($requestUrl, 'URLTestFlagIsSet');
        }

        if (count($request->getDomainParameter()) > 0) {
            $httpResponse =
                HttpHelper::curl($requestUrl,
                                 $request->getMethod(),
                                 $request->getDomainParameter(),
                                 $request->getHeaders());
        } else {
            $httpResponse =
                HttpHelper::curl($requestUrl, $request->getMethod(), $request->getContent(), $request->getHeaders());
        }

        $retryTimes = 1;
        while (500 <= $httpResponse->getStatus() && $autoRetry && $retryTimes < $maxRetryNumber) {
            $requestUrl = $request->composeUrl($iSigner, $credential, $domain);

            if (count($request->getDomainParameter()) > 0) {
                $httpResponse =
                    HttpHelper::curl($requestUrl,
                                     $request->getMethod(),
                                     $request->getDomainParameter(),
                                     $request->getHeaders());
            } else {
                $httpResponse =
                    HttpHelper::curl($requestUrl,
                                     $request->getMethod(),
                                     $request->getContent(),
                                     $request->getHeaders());
            }
            $retryTimes++;
        }
        return $httpResponse;
    }

    /**
     * @param AcsRequest $request
     * @param null       $iSigner
     * @param null       $credential
     * @param bool       $autoRetry
     * @param int        $maxRetryNumber
     *
     * @return HttpResponse|mixed
     * @throws ClientException
     */
    public function doAction($request, $iSigner = null, $credential = null, $autoRetry = true, $maxRetryNumber = 3)
    {
        trigger_error('doAction() is deprecated. Please use getAcsResponse() instead.', E_USER_NOTICE);
        return $this->doActionImpl($request, $iSigner, $credential, $autoRetry, $maxRetryNumber);
    }

    /**
     * @param $request
     *
     * @return mixed
     */
    private function prepareRequest($request)
    {
        if (null == $request->getRegionId()) {
            $request->setRegionId($this->iClientProfile->getRegionId());
        }
        if (null == $request->getAcceptFormat()) {
            $request->setAcceptFormat($this->iClientProfile->getFormat());
        }
        if (null == $request->getMethod()) {
            $request->setMethod('GET');
        }
        return $request;
    }

    /**
     * @param object     $respObject
     * @param int        $httpStatus
     *
     * @param AcsRequest $request
     *
     * @throws ServerException
     */
    private function buildApiException($respObject, $httpStatus, AcsRequest $request)
    {
        $errorCode    = 'UnknownServerError';
        $errorMessage = 'The server returned an error without a detailed message. ';
        $requestId    = 'None';

        // Compatible with different results
        if (isset($respObject->Message, $respObject->Code, $respObject->RequestId)) {
            $errorCode    = $respObject->Code;
            $errorMessage = $respObject->Message;
            $requestId    = $respObject->RequestId;
        }

        if (isset($respObject->message, $respObject->code, $respObject->requestId)) {
            $errorCode    = $respObject->code;
            $errorMessage = $respObject->message;
            $requestId    = $respObject->requestId;
        }

        if (isset($respObject->errorMsg, $respObject->errorCode)) {
            $errorCode    = $respObject->errorCode;
            $errorMessage = $respObject->errorMsg;
        }

        if ($httpStatus === 400 && $errorCode === 'SignatureDoesNotMatch'
            && strpos($errorMessage,
                      $request->stringToBeSigned()) !== false) {
            $errorCode    = 'InvalidAccessKeySecret';
            $errorMessage = 'Specified Access Key Secret is not valid.';
        }

        throw new ServerException(
            $errorMessage,
            $errorCode,
            $httpStatus,
            $requestId
        );
    }

    /**
     * @param $body
     * @param $format
     *
     * @return mixed|SimpleXMLElement
     */
    private function parseAcsResponse($body, $format)
    {
        if ('JSON' === $format) {
            $respObject = json_decode($body);
        } elseif ('XML' === $format) {
            $respObject = @simplexml_load_string($body);
        } elseif ('RAW' === $format) {
            $respObject = $body;
        }
        return $respObject;
    }
}
