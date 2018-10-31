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

class ModifyCdnDomainRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "ModifyCdnDomain");
		$this->setMethod("POST");
	}

	private  $topLevelDomain;

	private  $sourcePort;

	private  $resourceGroupId;

	private  $priorities;

	private  $sources;

	private  $securityToken;

	private  $domainName;

	private  $sourceType;

	private  $ownerId;

	public function getTopLevelDomain() {
		return $this->topLevelDomain;
	}

	public function setTopLevelDomain($topLevelDomain) {
		$this->topLevelDomain = $topLevelDomain;
		$this->queryParameters["TopLevelDomain"]=$topLevelDomain;
	}

	public function getSourcePort() {
		return $this->sourcePort;
	}

	public function setSourcePort($sourcePort) {
		$this->sourcePort = $sourcePort;
		$this->queryParameters["SourcePort"]=$sourcePort;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getPriorities() {
		return $this->priorities;
	}

	public function setPriorities($priorities) {
		$this->priorities = $priorities;
		$this->queryParameters["Priorities"]=$priorities;
	}

	public function getSources() {
		return $this->sources;
	}

	public function setSources($sources) {
		$this->sources = $sources;
		$this->queryParameters["Sources"]=$sources;
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

	public function getSourceType() {
		return $this->sourceType;
	}

	public function setSourceType($sourceType) {
		$this->sourceType = $sourceType;
		$this->queryParameters["SourceType"]=$sourceType;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}