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
namespace Dybaseapi\MNS;
use Dybaseapi\MNS\Exception\MnsException;
use Dybaseapi\MNS\Requests\BaseRequest;

class Client {
    private $accessId;
    private $accessKey;
    private $client;
    private $securityToken;
    private $endpoint;

    public function __construct($endPoint, $accessId, $accessKey, $securityToken)
    {
        $this->accessId = $accessId;
        $this->accessKey = $accessKey;
        $this->requestTimeout = 35; // seconds
        $this->connectTimeout = 3; // seconds
        $this->securityToken = $securityToken;
        $this->endpoint = $endPoint;
        $this->parseEndpoint();
    }

    // This function is for SDK internal use
    private function parseEndpoint()
    {
        $pieces = explode("//", $this->endpoint);
        $host = end($pieces);

        $host_pieces = explode(".", $host);
        $this->accountId = $host_pieces[0];
        $region_pieces = explode("-internal", $host_pieces[2]);
        $this->region = $region_pieces[0];
    }


    private function addRequiredHeaders(BaseRequest &$request)
    {
        $body = $request->generateBody();
        $queryString = $request->generateQueryString();

        $request->setBody($body);
        $request->setQueryString($queryString);

        if ($body != NULL)
        {
            $request->setHeader(Constants::CONTENT_LENGTH, strlen($body));
        }
        $request->setHeader('Date', gmdate(Constants::GMT_DATE_FORMAT));
        if (!$request->isHeaderSet(Constants::CONTENT_TYPE))
        {
            $request->setHeader(Constants::CONTENT_TYPE, 'text/xml');
        }
        $request->setHeader(Constants::MNS_VERSION_HEADER, Constants::MNS_VERSION);

        if ($this->securityToken != NULL)
        {
            $request->setHeader(Constants::SECURITY_TOKEN, $this->securityToken);
        }

        $sign = Signature::SignRequest($this->accessKey, $request);
        $request->setHeader(Constants::AUTHORIZATION,
            Constants::MNS . " " . $this->accessId . ":" . $sign);
    }

    public function sendRequest(BaseRequest &$request)
    {
        $this->addRequiredHeaders($request);

        $parameters = array('exceptions' => false, 'http_errors' => false);
        $queryString = $request->getQueryString();
        $body = $request->getBody();
        if ($queryString != NULL) {
            $parameters['query'] = $queryString;
        }
        if ($body != NULL) {
            $parameters['body'] = $body;
        }

        $parameters['timeout'] = $this->requestTimeout;
        $parameters['connect_timeout'] = $this->connectTimeout;

        $result = \HttpHelper::curl(
            $this->endpoint . "/" . $request->getResourcePath() . "?$queryString",
            strtoupper($request->getMethod()), $body, $request->getHeaders());

        $json = $this->xmlToArray($result->getBody());

        if (!$result->isSuccess()) {
            throw new MnsException($result->getStatus(), $json->Message, NULL, $json->Code, $json->RequestId, $json->HostId);
        }

        return $json;
    }

    private function xmlToArray($xml)
    {
        libxml_disable_entity_loader(true);
        $values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), false);
        return $values;
    }
}
