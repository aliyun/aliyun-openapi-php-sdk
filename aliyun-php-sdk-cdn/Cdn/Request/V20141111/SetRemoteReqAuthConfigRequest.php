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
namespace Cdn\Request\V20141111;

class SetRemoteReqAuthConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetRemoteReqAuthConfig");
		$this->setMethod("POST");
	}

	private  $authPath;

	private  $domainName;

	private  $authEnable;

	private  $ownerId;

	private  $timeOut;

	private  $authType;

	private  $authProvider;

	private  $securityToken;

	private  $authCrash;

	private  $authAddr;

	private  $authFileType;

	public function getAuthPath() {
		return $this->authPath;
	}

	public function setAuthPath($authPath) {
		$this->authPath = $authPath;
		$this->queryParameters["AuthPath"]=$authPath;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getAuthEnable() {
		return $this->authEnable;
	}

	public function setAuthEnable($authEnable) {
		$this->authEnable = $authEnable;
		$this->queryParameters["AuthEnable"]=$authEnable;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTimeOut() {
		return $this->timeOut;
	}

	public function setTimeOut($timeOut) {
		$this->timeOut = $timeOut;
		$this->queryParameters["TimeOut"]=$timeOut;
	}

	public function getAuthType() {
		return $this->authType;
	}

	public function setAuthType($authType) {
		$this->authType = $authType;
		$this->queryParameters["AuthType"]=$authType;
	}

	public function getAuthProvider() {
		return $this->authProvider;
	}

	public function setAuthProvider($authProvider) {
		$this->authProvider = $authProvider;
		$this->queryParameters["AuthProvider"]=$authProvider;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getAuthCrash() {
		return $this->authCrash;
	}

	public function setAuthCrash($authCrash) {
		$this->authCrash = $authCrash;
		$this->queryParameters["AuthCrash"]=$authCrash;
	}

	public function getAuthAddr() {
		return $this->authAddr;
	}

	public function setAuthAddr($authAddr) {
		$this->authAddr = $authAddr;
		$this->queryParameters["AuthAddr"]=$authAddr;
	}

	public function getAuthFileType() {
		return $this->authFileType;
	}

	public function setAuthFileType($authFileType) {
		$this->authFileType = $authFileType;
		$this->queryParameters["AuthFileType"]=$authFileType;
	}
	
}