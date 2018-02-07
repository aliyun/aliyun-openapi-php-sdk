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
namespace aegis\Request\V20161111;

class DescribeWarningRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("aegis", "2016-11-11", "DescribeWarning", "vipaegis", "openAPI");
		$this->setMethod("POST");
	}

	private  $typeNames;

	private  $resourceOwnerId;

	private  $riskName;

	private  $statusList;

	private  $sourceIp;

	private  $riskLevels;

	private  $pageSize;

	private  $currentPage;

	private  $dealed;

	private  $subTypeNames;

	private  $uuids;

	public function getTypeNames() {
		return $this->typeNames;
	}

	public function setTypeNames($typeNames) {
		$this->typeNames = $typeNames;
		$this->queryParameters["TypeNames"]=$typeNames;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getRiskName() {
		return $this->riskName;
	}

	public function setRiskName($riskName) {
		$this->riskName = $riskName;
		$this->queryParameters["RiskName"]=$riskName;
	}

	public function getStatusList() {
		return $this->statusList;
	}

	public function setStatusList($statusList) {
		$this->statusList = $statusList;
		$this->queryParameters["StatusList"]=$statusList;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getRiskLevels() {
		return $this->riskLevels;
	}

	public function setRiskLevels($riskLevels) {
		$this->riskLevels = $riskLevels;
		$this->queryParameters["RiskLevels"]=$riskLevels;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getCurrentPage() {
		return $this->currentPage;
	}

	public function setCurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->queryParameters["CurrentPage"]=$currentPage;
	}

	public function getDealed() {
		return $this->dealed;
	}

	public function setDealed($dealed) {
		$this->dealed = $dealed;
		$this->queryParameters["Dealed"]=$dealed;
	}

	public function getSubTypeNames() {
		return $this->subTypeNames;
	}

	public function setSubTypeNames($subTypeNames) {
		$this->subTypeNames = $subTypeNames;
		$this->queryParameters["SubTypeNames"]=$subTypeNames;
	}

	public function getUuids() {
		return $this->uuids;
	}

	public function setUuids($uuids) {
		$this->uuids = $uuids;
		$this->queryParameters["Uuids"]=$uuids;
	}
	
}