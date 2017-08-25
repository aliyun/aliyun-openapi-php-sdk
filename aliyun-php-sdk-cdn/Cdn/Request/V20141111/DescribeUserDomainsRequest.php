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

class DescribeUserDomainsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeUserDomains");
		$this->setMethod("POST");
	}

	private  $funcFilter;

	private  $sources;

	private  $domainName;

	private  $ownerId;

	private  $funcId;

	private  $pageNumber;

	private  $domainStatus;

	private  $domainSearchType;

	private  $checkDomainShow;

	private  $resourceGroupId;

	private  $securityToken;

	private  $cdnType;

	private  $pageSize;

	public function getFuncFilter() {
		return $this->funcFilter;
	}

	public function setFuncFilter($funcFilter) {
		$this->funcFilter = $funcFilter;
		$this->queryParameters["FuncFilter"]=$funcFilter;
	}

	public function getSources() {
		return $this->sources;
	}

	public function setSources($sources) {
		$this->sources = $sources;
		$this->queryParameters["Sources"]=$sources;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getFuncId() {
		return $this->funcId;
	}

	public function setFuncId($funcId) {
		$this->funcId = $funcId;
		$this->queryParameters["FuncId"]=$funcId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getDomainStatus() {
		return $this->domainStatus;
	}

	public function setDomainStatus($domainStatus) {
		$this->domainStatus = $domainStatus;
		$this->queryParameters["DomainStatus"]=$domainStatus;
	}

	public function getDomainSearchType() {
		return $this->domainSearchType;
	}

	public function setDomainSearchType($domainSearchType) {
		$this->domainSearchType = $domainSearchType;
		$this->queryParameters["DomainSearchType"]=$domainSearchType;
	}

	public function getCheckDomainShow() {
		return $this->checkDomainShow;
	}

	public function setCheckDomainShow($checkDomainShow) {
		$this->checkDomainShow = $checkDomainShow;
		$this->queryParameters["CheckDomainShow"]=$checkDomainShow;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
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

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}
	
}