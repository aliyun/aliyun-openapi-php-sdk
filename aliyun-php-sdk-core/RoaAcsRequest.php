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

abstract class RoaAcsRequest extends AcsRequest
{
    /**
     * @var string
     */
    protected $uriPattern;
    /**
     * @var array
     */
    protected $pathParameters = array();
    /**
     * @var array
     */
    private $domainParameters = array();
    /**
     * @var string
     */
    private $dateTimeFormat = "D, d M Y H:i:s \G\M\T";
    /**
     * @var string
     */
    private static $headerSeparator = "\n";
    /**
     * @var string
     */
    private static $querySeparator = '&';
    /**
     * @var string
     */
    protected $method = 'RAW';
    /**
     * @var string
     */
    protected $acceptFormat = 'JSON';

    /**
     * @param $iSigner
     * @param $credential
     * @param $domain
     *
     * @return mixed|string
     */
    public function composeUrl($iSigner, $credential, $domain)
    {
        $this->headers['x-acs-version'] = &$this->version;

        $this->prepareHeader($iSigner, $credential);

        $signString = $this->getMethod() . self::$headerSeparator;
        if (isset($this->headers['Accept'])) {
            $signString .= $this->headers['Accept'];
        }
        $signString .= self::$headerSeparator;

        if (isset($this->headers['Content-MD5'])) {
            $signString .= $this->headers['Content-MD5'];
        }
        $signString .= self::$headerSeparator;

        if (isset($this->headers['Content-Type'])) {
            $signString .= $this->headers['Content-Type'];
        }
        $signString .= self::$headerSeparator;

        if (isset($this->headers['Date'])) {
            $signString .= $this->headers['Date'];
        }
        $signString .= self::$headerSeparator;

        $uri         = $this->replaceOccupiedParameters();
        $signString  .= $this->buildCanonicalHeaders();
        $queryString = $this->buildQueryString($uri);
        if (substr($queryString, -1) === '?') {
            $queryString = substr($queryString, 0, -1);
        }
        $signString                     .= $queryString;
        $this->stringToBeSigned         = $signString;
        $this->headers['Authorization'] = 'acs ' . $credential->getAccessKeyId() . ':'
                                          . $iSigner->signString($signString, $credential->getAccessSecret());
        $requestUrl                     = $this->getProtocol() . '://' . $domain . $queryString;
        return $requestUrl;
    }

    /**
     * @return string
     */
    private function concatQueryString()
    {
        $sortMap = $this->queryParameters;
        if (null == $sortMap || count($sortMap) == 0) {
            return '';
        }
        $queryString = '';
        ksort($sortMap);
        foreach ($sortMap as $sortMapKey => $sortMapValue) {
            $queryString .= $sortMapKey;
            if (isset($sortMapValue)) {
                $queryString = $queryString . '=' . urlencode($sortMapValue);
            }
            $queryString .= self::$querySeparator;
        }

        if (count($sortMap) > 0) {
            $queryString = substr($queryString, 0, -1);
        }
        return '?' . $queryString;
    }

    /**
     * @param $iSigner
     * @param $credential
     */
    private function prepareHeader($iSigner, $credential)
    {
        $this->headers['Date'] = gmdate($this->dateTimeFormat);
        if (null == $this->acceptFormat) {
            $this->acceptFormat = 'RAW';
        }
        $this->headers['Accept']                  = $this->formatToAccept($this->getAcceptFormat());
        $this->headers['x-acs-signature-method']  = $iSigner->getSignatureMethod();
        $this->headers['x-acs-signature-version'] = $iSigner->getSignatureVersion();
        if ($iSigner->getSignatureType() != null) {
            $this->headers['x-acs-signature-type'] = $iSigner->getSignatureType();
        }
        $this->headers['x-acs-region-id'] = $this->regionId;
        $content                          = $this->getDomainParameter();
        if ($content != null) {
            $this->headers['Content-MD5'] = base64_encode(md5(json_encode($content), true));
        }
        if ($this->acceptFormat === 'JSON') {
            $this->headers['Content-Type'] = 'application/json;charset=utf-8';
        } else {
            $this->headers['Content-Type'] = 'application/octet-stream;charset=utf-8';
        }
        if ($credential->getSecurityToken() != null) {
            $this->headers['x-acs-security-token'] = $credential->getSecurityToken();
        }
        if ($credential instanceof BearerTokenCredential) {
            $this->headers['x-acs-bearer-token'] = $credential->getBearerToken();
        }
    }

    /**
     * @return mixed|string
     */
    private function replaceOccupiedParameters()
    {
        $result = $this->uriPattern;
        foreach ($this->pathParameters as $pathParameterKey => $apiParameterValue) {
            $target = '[' . $pathParameterKey . ']';
            $result = str_replace($target, $apiParameterValue, $result);
        }
        return $result;
    }

    /**
     * @return string
     */
    private function buildCanonicalHeaders()
    {
        $sortMap = array();
        foreach ($this->headers as $headerKey => $headerValue) {
            $key = strtolower($headerKey);
            if (strpos($key, 'x-acs-') === 0) {
                $sortMap[$key] = $headerValue;
            }
        }
        ksort($sortMap);
        $headerString = '';
        foreach ($sortMap as $sortMapKey => $sortMapValue) {
            $headerString = $headerString . $sortMapKey . ':' . $sortMapValue . self::$headerSeparator;
        }
        return $headerString;
    }

    /**
     * @param $uri
     *
     * @return array
     */
    private function splitSubResource($uri)
    {
        $queIndex = strpos($uri, '?');
        $uriParts = array();
        if (null != $queIndex) {
            $uriParts[] = substr($uri, 0, $queIndex);
            $uriParts[] = substr($uri, $queIndex + 1);
        } else {
            $uriParts[] = $uri;
        }
        return $uriParts;
    }

    /**
     * @param $uri
     *
     * @return bool|mixed|string
     */
    private function buildQueryString($uri)
    {
        $uriParts = $this->splitSubResource($uri);
        $sortMap  = $this->queryParameters;
        if (isset($uriParts[1])) {
            $sortMap[$uriParts[1]] = null;
        }
        $queryString = $uriParts[0];
        if (count($uriParts)) {
            $queryString .= '?';
        }
        ksort($sortMap);
        foreach ($sortMap as $sortMapKey => $sortMapValue) {
            $queryString .= $sortMapKey;
            if (isset($sortMapValue)) {
                $queryString = $queryString . '=' . $sortMapValue;
            }
            $queryString .= self::$querySeparator;
        }
        if (0 < count($sortMap)) {
            $queryString = substr($queryString, 0, -1);
        }
        return $queryString;
    }

    /**
     * @param $acceptFormat
     *
     * @return string
     */
    private function formatToAccept($acceptFormat)
    {
        if ($acceptFormat === 'JSON') {
            return 'application/json';
        }

        if ($acceptFormat === 'XML') {
            return 'application/xml';
        }

        return 'application/octet-stream';
    }

    /**
     * @return array
     */
    public function getPathParameters()
    {
        return $this->pathParameters;
    }

    /**
     * @param $name
     * @param $value
     */
    public function putPathParameter($name, $value)
    {
        $this->pathParameters[$name] = $value;
    }

    /**
     * @return array
     */
    public function getDomainParameter()
    {
        return $this->domainParameters;
    }

    /**
     * @param $name
     * @param $value
     */
    public function putDomainParameters($name, $value)
    {
        $this->domainParameters[$name] = $value;
    }

    /**
     * @return string
     */
    public function getUriPattern()
    {
        return $this->uriPattern;
    }

    /**
     * @param $uriPattern
     *
     * @return mixed
     */
    public function setUriPattern($uriPattern)
    {
        return $this->uriPattern = $uriPattern;
    }

}
