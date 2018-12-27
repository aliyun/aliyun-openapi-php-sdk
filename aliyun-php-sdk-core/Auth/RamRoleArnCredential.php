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

class RamRoleArnCredential extends AbstractCredential
{
    /**
     * @var string
     */
    private $accessKeyId;
    /**
     * @var string
     */
    private $accessSecret;
    /**
     * @var string
     */
    private $roleArn;
    /**
     * @var string
     */
    private $roleSessionName;

    /**
     * RamRoleArnCredential constructor.
     *
     * @param $accessKeyId
     * @param $accessSecret
     * @param $roleArn
     * @param $roleSessionName
     */
    public function __construct($accessKeyId, $accessSecret, $roleArn, $roleSessionName)
    {
        $this->accessKeyId     = $accessKeyId;
        $this->accessSecret    = $accessSecret;
        $this->roleArn         = $roleArn;
        $this->roleSessionName = $roleSessionName;
    }

    /**
     * @return string
     */
    public function getAccessKeyId()
    {
        return $this->accessKeyId;
    }

    /**
     * @param $accessKeyId
     */
    public function setAccessKeyId($accessKeyId)
    {
        $this->accessKeyId = $accessKeyId;
    }

    /**
     * @return string
     */
    public function getAccessSecret()
    {
        return $this->accessSecret;
    }

    /**
     * @param $accessSecret
     */
    public function setAccessSecret($accessSecret)
    {
        $this->accessSecret = $accessSecret;
    }

    /**
     * @return string
     */
    public function getRoleArn()
    {
        return $this->roleArn;
    }

    /**
     * @param $roleArn
     */
    public function setRoleArn($roleArn)
    {
        $this->roleArn = $roleArn;
    }

    /**
     * @return string
     */
    public function getRoleSessionName()
    {
        return $this->roleSessionName;
    }

    /**
     * @param $roleSessionName
     */
    public function setRoleSessionName($roleSessionName)
    {
        $this->roleSessionName = $roleSessionName;
    }

    /**
     * @return null
     */
    public function getSecurityToken()
    {
        return null;
    }
}