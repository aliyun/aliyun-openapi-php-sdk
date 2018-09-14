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
namespace Ecs\Request\V20140526;

class DescribeDedicatedHostsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeDedicatedHosts", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $dedicatedHostIds;

	private  $resourceOwnerId;

	private  $dedicatedHostName;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $pageNumber;

	private  $resourceGroupId;

	private  $lockReason;

	private  $pageSize;

	private  $zoneId;

	private  $dedicatedHostType;

	private  $Tags;

	private  $status;

	public function getDedicatedHostIds() {
		return $this->dedicatedHostIds;
	}

	public function setDedicatedHostIds($dedicatedHostIds) {
		$this->dedicatedHostIds = $dedicatedHostIds;
		$this->queryParameters["DedicatedHostIds"]=$dedicatedHostIds;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getDedicatedHostName() {
		return $this->dedicatedHostName;
	}

	public function setDedicatedHostName($dedicatedHostName) {
		$this->dedicatedHostName = $dedicatedHostName;
		$this->queryParameters["DedicatedHostName"]=$dedicatedHostName;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getLockReason() {
		return $this->lockReason;
	}

	public function setLockReason($lockReason) {
		$this->lockReason = $lockReason;
		$this->queryParameters["LockReason"]=$lockReason;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getDedicatedHostType() {
		return $this->dedicatedHostType;
	}

	public function setDedicatedHostType($dedicatedHostType) {
		$this->dedicatedHostType = $dedicatedHostType;
		$this->queryParameters["DedicatedHostType"]=$dedicatedHostType;
	}

	public function getTags() {
		return $this->Tags;
	}

	public function setTags($Tags) {
		$this->Tags = $Tags;
		for ($i = 0; $i < count($Tags); $i ++) {	
			$this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];
			$this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $Tags[$i]['Key'];

		}
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}