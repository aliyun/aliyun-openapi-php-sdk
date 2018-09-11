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
namespace Rds\Request\V20140815;

class DescribeSqlLogTemplatesListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "DescribeSqlLogTemplatesList", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $minAvgConsume;

	private  $ownerAccount;

	private  $maxRecordsPerPage;

	private  $endTime;

	private  $startTime;

	private  $ownerId;

	private  $maxAvgConsume;

	private  $sortKey;

	private  $minAvgScanRows;

	private  $sqType;

	private  $securityToken;

	private  $sortMethod;

	private  $pageNumbers;

	private  $pagingId;

	private  $dBInstanceId;

	private  $maxAvgScanRows;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getMinAvgConsume() {
		return $this->minAvgConsume;
	}

	public function setMinAvgConsume($minAvgConsume) {
		$this->minAvgConsume = $minAvgConsume;
		$this->queryParameters["MinAvgConsume"]=$minAvgConsume;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getMaxRecordsPerPage() {
		return $this->maxRecordsPerPage;
	}

	public function setMaxRecordsPerPage($maxRecordsPerPage) {
		$this->maxRecordsPerPage = $maxRecordsPerPage;
		$this->queryParameters["MaxRecordsPerPage"]=$maxRecordsPerPage;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getMaxAvgConsume() {
		return $this->maxAvgConsume;
	}

	public function setMaxAvgConsume($maxAvgConsume) {
		$this->maxAvgConsume = $maxAvgConsume;
		$this->queryParameters["MaxAvgConsume"]=$maxAvgConsume;
	}

	public function getSortKey() {
		return $this->sortKey;
	}

	public function setSortKey($sortKey) {
		$this->sortKey = $sortKey;
		$this->queryParameters["SortKey"]=$sortKey;
	}

	public function getMinAvgScanRows() {
		return $this->minAvgScanRows;
	}

	public function setMinAvgScanRows($minAvgScanRows) {
		$this->minAvgScanRows = $minAvgScanRows;
		$this->queryParameters["MinAvgScanRows"]=$minAvgScanRows;
	}

	public function getSqType() {
		return $this->sqType;
	}

	public function setSqType($sqType) {
		$this->sqType = $sqType;
		$this->queryParameters["SqType"]=$sqType;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getSortMethod() {
		return $this->sortMethod;
	}

	public function setSortMethod($sortMethod) {
		$this->sortMethod = $sortMethod;
		$this->queryParameters["SortMethod"]=$sortMethod;
	}

	public function getPageNumbers() {
		return $this->pageNumbers;
	}

	public function setPageNumbers($pageNumbers) {
		$this->pageNumbers = $pageNumbers;
		$this->queryParameters["PageNumbers"]=$pageNumbers;
	}

	public function getPagingId() {
		return $this->pagingId;
	}

	public function setPagingId($pagingId) {
		$this->pagingId = $pagingId;
		$this->queryParameters["PagingId"]=$pagingId;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getMaxAvgScanRows() {
		return $this->maxAvgScanRows;
	}

	public function setMaxAvgScanRows($maxAvgScanRows) {
		$this->maxAvgScanRows = $maxAvgScanRows;
		$this->queryParameters["MaxAvgScanRows"]=$maxAvgScanRows;
	}
	
}