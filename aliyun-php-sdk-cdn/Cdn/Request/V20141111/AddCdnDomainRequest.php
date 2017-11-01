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

class AddCdnDomainRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "AddCdnDomain");
		$this->setMethod("POST");
	}

	private  $topLevelDomain;

	private  $sources;

	private  $ownerAccount;

	private  $domainName;

	private  $liveType;

	private  $ownerId;

	private  $resourceGroupId;

	private  $sourcePort;

	private  $priorities;

	private  $securityToken;

	private  $cdnType;

	private  $scope;

	private  $sourceType;

	private  $checkUrl;

	private  $region;

	public function getTopLevelDomain() {
		return $this->topLevelDomain;
	}

	public function setTopLevelDomain($topLevelDomain) {
		$this->topLevelDomain = $topLevelDomain;
		$this->queryParameters["TopLevelDomain"]=$topLevelDomain;
	}

	public function getSources() {
		return $this->sources;
	}

	public function setSources($sources) {
		$this->sources = $sources;
		$this->queryParameters["Sources"]=$sources;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getLiveType() {
		return $this->liveType;
	}

	public function setLiveType($liveType) {
		$this->liveType = $liveType;
		$this->queryParameters["LiveType"]=$liveType;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getSourcePort() {
		return $this->sourcePort;
	}

	public function setSourcePort($sourcePort) {
		$this->sourcePort = $sourcePort;
		$this->queryParameters["SourcePort"]=$sourcePort;
	}

	public function getPriorities() {
		return $this->priorities;
	}

	public function setPriorities($priorities) {
		$this->priorities = $priorities;
		$this->queryParameters["Priorities"]=$priorities;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getCdnType() {
		return $this->cdnType;
	}

	public function setCdnType($cdnType) {
		$this->cdnType = $cdnType;
		$this->queryParameters["CdnType"]=$cdnType;
	}

	public function getScope() {
		return $this->scope;
	}

	public function setScope($scope) {
		$this->scope = $scope;
		$this->queryParameters["Scope"]=$scope;
	}

	public function getSourceType() {
		return $this->sourceType;
	}

	public function setSourceType($sourceType) {
		$this->sourceType = $sourceType;
		$this->queryParameters["SourceType"]=$sourceType;
	}

	public function getCheckUrl() {
		return $this->checkUrl;
	}

	public function setCheckUrl($checkUrl) {
		$this->checkUrl = $checkUrl;
		$this->queryParameters["CheckUrl"]=$checkUrl;
	}

	public function getRegion() {
		return $this->region;
	}

	public function setRegion($region) {
		$this->region = $region;
		$this->queryParameters["Region"]=$region;
	}
	
}