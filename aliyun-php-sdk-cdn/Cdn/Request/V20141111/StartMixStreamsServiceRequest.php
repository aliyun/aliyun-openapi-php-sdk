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

class StartMixStreamsServiceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "StartMixStreamsService");
		$this->setMethod("POST");
	}

	private  $mixType;

	private  $securityToken;

	private  $mainDomainName;

	private  $mixStreamName;

	private  $mixTemplate;

	private  $mixDomainName;

	private  $ownerId;

	private  $mainAppName;

	private  $mixAppName;

	private  $mainStreamName;

	public function getMixType() {
		return $this->mixType;
	}

	public function setMixType($mixType) {
		$this->mixType = $mixType;
		$this->queryParameters["MixType"]=$mixType;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getMainDomainName() {
		return $this->mainDomainName;
	}

	public function setMainDomainName($mainDomainName) {
		$this->mainDomainName = $mainDomainName;
		$this->queryParameters["MainDomainName"]=$mainDomainName;
	}

	public function getMixStreamName() {
		return $this->mixStreamName;
	}

	public function setMixStreamName($mixStreamName) {
		$this->mixStreamName = $mixStreamName;
		$this->queryParameters["MixStreamName"]=$mixStreamName;
	}

	public function getMixTemplate() {
		return $this->mixTemplate;
	}

	public function setMixTemplate($mixTemplate) {
		$this->mixTemplate = $mixTemplate;
		$this->queryParameters["MixTemplate"]=$mixTemplate;
	}

	public function getMixDomainName() {
		return $this->mixDomainName;
	}

	public function setMixDomainName($mixDomainName) {
		$this->mixDomainName = $mixDomainName;
		$this->queryParameters["MixDomainName"]=$mixDomainName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getMainAppName() {
		return $this->mainAppName;
	}

	public function setMainAppName($mainAppName) {
		$this->mainAppName = $mainAppName;
		$this->queryParameters["MainAppName"]=$mainAppName;
	}

	public function getMixAppName() {
		return $this->mixAppName;
	}

	public function setMixAppName($mixAppName) {
		$this->mixAppName = $mixAppName;
		$this->queryParameters["MixAppName"]=$mixAppName;
	}

	public function getMainStreamName() {
		return $this->mainStreamName;
	}

	public function setMainStreamName($mainStreamName) {
		$this->mainStreamName = $mainStreamName;
		$this->queryParameters["MainStreamName"]=$mainStreamName;
	}
	
}