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

class DescribeVulListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("aegis", "2016-11-11", "DescribeVulList", "vipaegis", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $product;

	private  $statusList;

	private  $level;

	private  $resource;

	private  $orderBy;

	private  $dealed;

	private  $currentPage;

	private  $type;

	private  $lastTsEnd;

	private  $batchName;

	private  $patchId;

	private  $aliasName;

	private  $sourceIp;

	private  $name;

	private  $pageSize;

	private  $lang;

	private  $lastTsStart;

	private  $necessity;

	private  $uuids;

	private  $direction;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getProduct() {
		return $this->product;
	}

	public function setProduct($product) {
		$this->product = $product;
		$this->queryParameters["Product"]=$product;
	}

	public function getStatusList() {
		return $this->statusList;
	}

	public function setStatusList($statusList) {
		$this->statusList = $statusList;
		$this->queryParameters["StatusList"]=$statusList;
	}

	public function getLevel() {
		return $this->level;
	}

	public function setLevel($level) {
		$this->level = $level;
		$this->queryParameters["Level"]=$level;
	}

	public function getResource() {
		return $this->resource;
	}

	public function setResource($resource) {
		$this->resource = $resource;
		$this->queryParameters["Resource"]=$resource;
	}

	public function getOrderBy() {
		return $this->orderBy;
	}

	public function setOrderBy($orderBy) {
		$this->orderBy = $orderBy;
		$this->queryParameters["OrderBy"]=$orderBy;
	}

	public function getDealed() {
		return $this->dealed;
	}

	public function setDealed($dealed) {
		$this->dealed = $dealed;
		$this->queryParameters["Dealed"]=$dealed;
	}

	public function getCurrentPage() {
		return $this->currentPage;
	}

	public function setCurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->queryParameters["CurrentPage"]=$currentPage;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getLastTsEnd() {
		return $this->lastTsEnd;
	}

	public function setLastTsEnd($lastTsEnd) {
		$this->lastTsEnd = $lastTsEnd;
		$this->queryParameters["LastTsEnd"]=$lastTsEnd;
	}

	public function getBatchName() {
		return $this->batchName;
	}

	public function setBatchName($batchName) {
		$this->batchName = $batchName;
		$this->queryParameters["BatchName"]=$batchName;
	}

	public function getPatchId() {
		return $this->patchId;
	}

	public function setPatchId($patchId) {
		$this->patchId = $patchId;
		$this->queryParameters["PatchId"]=$patchId;
	}

	public function getAliasName() {
		return $this->aliasName;
	}

	public function setAliasName($aliasName) {
		$this->aliasName = $aliasName;
		$this->queryParameters["AliasName"]=$aliasName;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getLastTsStart() {
		return $this->lastTsStart;
	}

	public function setLastTsStart($lastTsStart) {
		$this->lastTsStart = $lastTsStart;
		$this->queryParameters["LastTsStart"]=$lastTsStart;
	}

	public function getNecessity() {
		return $this->necessity;
	}

	public function setNecessity($necessity) {
		$this->necessity = $necessity;
		$this->queryParameters["Necessity"]=$necessity;
	}

	public function getUuids() {
		return $this->uuids;
	}

	public function setUuids($uuids) {
		$this->uuids = $uuids;
		$this->queryParameters["Uuids"]=$uuids;
	}

	public function getDirection() {
		return $this->direction;
	}

	public function setDirection($direction) {
		$this->direction = $direction;
		$this->queryParameters["Direction"]=$direction;
	}
	
}