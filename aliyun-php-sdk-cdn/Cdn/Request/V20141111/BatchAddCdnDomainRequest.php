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

class BatchAddCdnDomainRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "BatchAddCdnDomain");
	}

	private  $ownerId;

	private  $ownerAccount;

	private  $securityToken;

	private  $domainNames;

	private  $cdnType;

	private  $sourceType;

	private  $sources;

	private  $sourcePort;

	private  $checkUrl;

	private  $scope;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getDomainNames() {
		return $this->domainNames;
	}

	public function setDomainNames($domainNames) {
		$this->domainNames = $domainNames;
		$this->queryParameters["DomainNames"]=$domainNames;
	}

	public function getCdnType() {
		return $this->cdnType;
	}

	public function setCdnType($cdnType) {
		$this->cdnType = $cdnType;
		$this->queryParameters["CdnType"]=$cdnType;
	}

	public function getSourceType() {
		return $this->sourceType;
	}

	public function setSourceType($sourceType) {
		$this->sourceType = $sourceType;
		$this->queryParameters["SourceType"]=$sourceType;
	}

	public function getSources() {
		return $this->sources;
	}

	public function setSources($sources) {
		$this->sources = $sources;
		$this->queryParameters["Sources"]=$sources;
	}

	public function getSourcePort() {
		return $this->sourcePort;
	}

	public function setSourcePort($sourcePort) {
		$this->sourcePort = $sourcePort;
		$this->queryParameters["SourcePort"]=$sourcePort;
	}

	public function getCheckUrl() {
		return $this->checkUrl;
	}

	public function setCheckUrl($checkUrl) {
		$this->checkUrl = $checkUrl;
		$this->queryParameters["CheckUrl"]=$checkUrl;
	}

	public function getScope() {
		return $this->scope;
	}

	public function setScope($scope) {
		$this->scope = $scope;
		$this->queryParameters["Scope"]=$scope;
	}
	
}