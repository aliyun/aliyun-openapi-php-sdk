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

class SetDynamicConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetDynamicConfig");
		$this->setMethod("POST");
	}

	private  $dynamicOrigin;

	private  $staticType;

	private  $securityToken;

	private  $staticUri;

	private  $domainName;

	private  $staticPath;

	private  $dynamicCacheControl;

	private  $ownerId;

	public function getDynamicOrigin() {
		return $this->dynamicOrigin;
	}

	public function setDynamicOrigin($dynamicOrigin) {
		$this->dynamicOrigin = $dynamicOrigin;
		$this->queryParameters["DynamicOrigin"]=$dynamicOrigin;
	}

	public function getStaticType() {
		return $this->staticType;
	}

	public function setStaticType($staticType) {
		$this->staticType = $staticType;
		$this->queryParameters["StaticType"]=$staticType;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getStaticUri() {
		return $this->staticUri;
	}

	public function setStaticUri($staticUri) {
		$this->staticUri = $staticUri;
		$this->queryParameters["StaticUri"]=$staticUri;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getStaticPath() {
		return $this->staticPath;
	}

	public function setStaticPath($staticPath) {
		$this->staticPath = $staticPath;
		$this->queryParameters["StaticPath"]=$staticPath;
	}

	public function getDynamicCacheControl() {
		return $this->dynamicCacheControl;
	}

	public function setDynamicCacheControl($dynamicCacheControl) {
		$this->dynamicCacheControl = $dynamicCacheControl;
		$this->queryParameters["DynamicCacheControl"]=$dynamicCacheControl;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}