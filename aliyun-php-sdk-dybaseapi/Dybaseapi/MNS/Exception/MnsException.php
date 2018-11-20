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
namespace Dybaseapi\MNS\Exception;

class MnsException extends \RuntimeException
{
    private $mnsErrorCode;
    private $requestId;
    private $hostId;

    public function __construct($code, $message, $previousException = NULL, $mnsErrorCode = NULL, $requestId = NULL, $hostId = NULL)
    {
        parent::__construct($message, $code, $previousException);

        if ($mnsErrorCode == NULL)
        {
            if ($code >= 500)
            {
                $mnsErrorCode = "ServerError";
            }
            else
            {
                $mnsErrorCode = "ClientError";
            }
        }
        $this->mnsErrorCode = $mnsErrorCode;

        $this->requestId = $requestId;
        $this->hostId = $hostId;
    }

    public function __toString()
    {
        $str = "Code: " . $this->getCode() . " Message: " . $this->getMessage();
        if ($this->mnsErrorCode != NULL)
        {
            $str .= " MnsErrorCode: " . $this->mnsErrorCode;
        }
        if ($this->requestId != NULL)
        {
            $str .= " RequestId: " . $this->requestId;
        }
        if ($this->hostId != NULL)
        {
            $str .= " HostId: " . $this->hostId;
        }
        return $str;
    }

    public function getMnsErrorCode()
    {
        return $this->mnsErrorCode;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function getHostId()
    {
        return $this->hostId;
    }
}
