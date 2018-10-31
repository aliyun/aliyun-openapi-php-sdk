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

class AddLiveAppRecordConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "AddLiveAppRecordConfig");
		$this->setMethod("POST");
	}

	private  $ossBucket;

	private  $appName;

	private  $securityToken;

	private  $domainName;

	private  $ossEndpoint;

	private  $ossObjectPrefix;

	private  $ownerId;

	public function getOssBucket() {
		return $this->ossBucket;
	}

	public function setOssBucket($ossBucket) {
		$this->ossBucket = $ossBucket;
		$this->queryParameters["OssBucket"]=$ossBucket;
	}

	public function getAppName() {
		return $this->appName;
	}

	public function setAppName($appName) {
		$this->appName = $appName;
		$this->queryParameters["AppName"]=$appName;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getOssEndpoint() {
		return $this->ossEndpoint;
	}

	public function setOssEndpoint($ossEndpoint) {
		$this->ossEndpoint = $ossEndpoint;
		$this->queryParameters["OssEndpoint"]=$ossEndpoint;
	}

	public function getOssObjectPrefix() {
		return $this->ossObjectPrefix;
	}

	public function setOssObjectPrefix($ossObjectPrefix) {
		$this->ossObjectPrefix = $ossObjectPrefix;
		$this->queryParameters["OssObjectPrefix"]=$ossObjectPrefix;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}