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
namespace Dybaseapi\MNS\Requests;

abstract class BaseRequest
{
    protected $headers;
    protected $resourcePath;
    protected $method;

    protected $body;
    protected $queryString;

    public function __construct($method, $resourcePath) {
        $this->method = $method;
        $this->resourcePath = $resourcePath;
    }

    abstract public function generateBody();
    abstract public function generateQueryString();

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;
    }

    public function getQueryString()
    {
        return $this->queryString;
    }

    public function isHeaderSet($header)
    {
        return isset($this->headers[$header]);
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function removeHeader($header)
    {
        if (isset($this->headers[$header]))
        {
            unset($this->headers[$header]);
        }
    }

    public function setHeader($header, $value)
    {
        $this->headers[$header] = $value;
    }

    public function getResourcePath()
    {
        return $this->resourcePath;
    }

    public function getMethod()
    {
        return $this->method;
    }
}

