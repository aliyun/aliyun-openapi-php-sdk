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

class DescribeDisksRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeDisks", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $snapshotId;

	private  $filter2Value;

	private  $autoSnapshotPolicyId;

	private  $pageNumber;

	private  $diskName;

	private  $deleteAutoSnapshot;

	private  $resourceGroupId;

	private  $diskChargeType;

	private  $lockReason;

	private  $filter1Key;

	private  $pageSize;

	private  $diskIds;

	private  $Tags;

	private  $deleteWithInstance;

	private  $enableAutoSnapshot;

	private  $dryRun;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $filter1Value;

	private  $portable;

	private  $enableAutomatedSnapshotPolicy;

	private  $filter2Key;

	private  $ownerId;

	private  $diskType;

	private  $AdditionalAttributess;

	private  $enableShared;

	private  $instanceId;

	private  $encrypted;

	private  $zoneId;

	private  $category;

	private  $status;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getSnapshotId() {
		return $this->snapshotId;
	}

	public function setSnapshotId($snapshotId) {
		$this->snapshotId = $snapshotId;
		$this->queryParameters["SnapshotId"]=$snapshotId;
	}

	public function getFilter2Value() {
		return $this->filter2Value;
	}

	public function setFilter2Value($filter2Value) {
		$this->filter2Value = $filter2Value;
		$this->queryParameters["Filter.2.Value"]=$filter2Value;
	}

	public function getAutoSnapshotPolicyId() {
		return $this->autoSnapshotPolicyId;
	}

	public function setAutoSnapshotPolicyId($autoSnapshotPolicyId) {
		$this->autoSnapshotPolicyId = $autoSnapshotPolicyId;
		$this->queryParameters["AutoSnapshotPolicyId"]=$autoSnapshotPolicyId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getDiskName() {
		return $this->diskName;
	}

	public function setDiskName($diskName) {
		$this->diskName = $diskName;
		$this->queryParameters["DiskName"]=$diskName;
	}

	public function getDeleteAutoSnapshot() {
		return $this->deleteAutoSnapshot;
	}

	public function setDeleteAutoSnapshot($deleteAutoSnapshot) {
		$this->deleteAutoSnapshot = $deleteAutoSnapshot;
		$this->queryParameters["DeleteAutoSnapshot"]=$deleteAutoSnapshot;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getDiskChargeType() {
		return $this->diskChargeType;
	}

	public function setDiskChargeType($diskChargeType) {
		$this->diskChargeType = $diskChargeType;
		$this->queryParameters["DiskChargeType"]=$diskChargeType;
	}

	public function getLockReason() {
		return $this->lockReason;
	}

	public function setLockReason($lockReason) {
		$this->lockReason = $lockReason;
		$this->queryParameters["LockReason"]=$lockReason;
	}

	public function getFilter1Key() {
		return $this->filter1Key;
	}

	public function setFilter1Key($filter1Key) {
		$this->filter1Key = $filter1Key;
		$this->queryParameters["Filter.1.Key"]=$filter1Key;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getDiskIds() {
		return $this->diskIds;
	}

	public function setDiskIds($diskIds) {
		$this->diskIds = $diskIds;
		$this->queryParameters["DiskIds"]=$diskIds;
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

	public function getDeleteWithInstance() {
		return $this->deleteWithInstance;
	}

	public function setDeleteWithInstance($deleteWithInstance) {
		$this->deleteWithInstance = $deleteWithInstance;
		$this->queryParameters["DeleteWithInstance"]=$deleteWithInstance;
	}

	public function getEnableAutoSnapshot() {
		return $this->enableAutoSnapshot;
	}

	public function setEnableAutoSnapshot($enableAutoSnapshot) {
		$this->enableAutoSnapshot = $enableAutoSnapshot;
		$this->queryParameters["EnableAutoSnapshot"]=$enableAutoSnapshot;
	}

	public function getDryRun() {
		return $this->dryRun;
	}

	public function setDryRun($dryRun) {
		$this->dryRun = $dryRun;
		$this->queryParameters["DryRun"]=$dryRun;
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

	public function getFilter1Value() {
		return $this->filter1Value;
	}

	public function setFilter1Value($filter1Value) {
		$this->filter1Value = $filter1Value;
		$this->queryParameters["Filter.1.Value"]=$filter1Value;
	}

	public function getPortable() {
		return $this->portable;
	}

	public function setPortable($portable) {
		$this->portable = $portable;
		$this->queryParameters["Portable"]=$portable;
	}

	public function getEnableAutomatedSnapshotPolicy() {
		return $this->enableAutomatedSnapshotPolicy;
	}

	public function setEnableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy) {
		$this->enableAutomatedSnapshotPolicy = $enableAutomatedSnapshotPolicy;
		$this->queryParameters["EnableAutomatedSnapshotPolicy"]=$enableAutomatedSnapshotPolicy;
	}

	public function getFilter2Key() {
		return $this->filter2Key;
	}

	public function setFilter2Key($filter2Key) {
		$this->filter2Key = $filter2Key;
		$this->queryParameters["Filter.2.Key"]=$filter2Key;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getDiskType() {
		return $this->diskType;
	}

	public function setDiskType($diskType) {
		$this->diskType = $diskType;
		$this->queryParameters["DiskType"]=$diskType;
	}

	public function getAdditionalAttributess() {
		return $this->AdditionalAttributess;
	}

	public function setAdditionalAttributess($AdditionalAttributess) {
		$this->AdditionalAttributess = $AdditionalAttributess;
		for ($i = 0; $i < count($AdditionalAttributess); $i ++) {	
			$this->queryParameters["AdditionalAttributes.".($i+1)] = $AdditionalAttributess[$i];
		}
	}

	public function getEnableShared() {
		return $this->enableShared;
	}

	public function setEnableShared($enableShared) {
		$this->enableShared = $enableShared;
		$this->queryParameters["EnableShared"]=$enableShared;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getEncrypted() {
		return $this->encrypted;
	}

	public function setEncrypted($encrypted) {
		$this->encrypted = $encrypted;
		$this->queryParameters["Encrypted"]=$encrypted;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getCategory() {
		return $this->category;
	}

	public function setCategory($category) {
		$this->category = $category;
		$this->queryParameters["Category"]=$category;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}