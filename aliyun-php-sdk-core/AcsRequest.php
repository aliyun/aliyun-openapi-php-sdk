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

abstract class AcsRequest
{
    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $product;
    /**
     * @var string
     */
    protected $actionName;
    /**
     * @var string
     */
    protected $regionId;
    /**
     * @var string
     */
    protected $acceptFormat;
    /**
     * @var string
     */
    protected $method;
    /**
     * @var string
     */
    protected $requestScheme = 'http';
    /**
     * @var string
     */
    protected $content;
    /**
     * @var array
     */
    protected $queryParameters = array();
    /**
     * @var array
     */
    protected $headers = array();
    /**
     * @var null|string
     */
    protected $locationServiceCode;
    /**
     * @var null|string
     */
    protected $locationEndpointType;
    /**
     * @var array The original parameters of the request object.
     */
    protected $requestParameters = array();
    /**
     * @var string
     */
    protected $stringToBeSigned = '';

    /**
     * AcsRequest constructor.
     *
     * @param string      $product
     * @param string      $version
     * @param string      $actionName
     * @param string|null $locationServiceCode
     * @param string      $locationEndpointType
     */
    public function __construct($product,
                                $version,
                                $actionName,
                                $locationServiceCode = null,
                                $locationEndpointType = 'openAPI')
    {
        $this->headers['x-sdk-client'] = 'php/2.0.0';
        $this->product                 = $product;
        $this->version                 = $version;
        $this->actionName              = $actionName;
        $this->locationServiceCode     = $locationServiceCode;
        $this->locationEndpointType    = $locationEndpointType;
    }

    /**
     * @param $iSigner
     * @param $credential
     * @param $domain
     *
     * @return mixed
     */
    abstract public function composeUrl($iSigner, $credential, $domain);

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return string
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     * @param string $actionName
     */
    public function setActionName($actionName)
    {
        $this->actionName = $actionName;
    }

    /**
     * @return string
     */
    public function getAcceptFormat()
    {
        return $this->acceptFormat;
    }

    /**
     * @param string $acceptFormat
     */
    public function setAcceptFormat($acceptFormat)
    {
        $this->acceptFormat = $acceptFormat;
    }

    /**
     * @return array
     */
    public function getQueryParameters()
    {
        return $this->queryParameters;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getProtocol()
    {
        return $this->requestScheme;
    }

    /**
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->requestScheme = $protocol;
    }

    /**
     * @return string
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * @param string $region
     */
    public function setRegionId($region)
    {
        $this->regionId = $region;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param string $headerKey
     * @param mixed  $headerValue
     */
    public function addHeader($headerKey, $headerValue)
    {
        $this->headers[$headerKey] = $headerValue;
    }

    /**
     * @return null|string
     */
    public function getLocationServiceCode()
    {
        return $this->locationServiceCode;
    }

    /**
     * @return null|string
     */
    public function getLocationEndpointType()
    {
        return $this->locationEndpointType;
    }

    /**
     * Magic method for get parameters.
     *
     * @param string $name
     * @param mixed  $arguments
     *
     * @return $this
     */
    public function __call($name, $arguments)
    {
        if (\strpos($name, 'get', 0) !== false) {
            $parameterName = $this->propertyNameByMethodName($name);
            return isset($this->requestParameters[$parameterName])
                ? $this->requestParameters[$parameterName]
                : null;
        }
        return $this;
    }

    /**
     * @param string $methodName
     *
     * @return string
     */
    protected function propertyNameByMethodName($methodName)
    {
        return \mb_strcut($methodName, 3);
    }

    /**
     * @return string
     */
    public function stringToBeSigned()
    {
        return $this->stringToBeSigned;
    }
}