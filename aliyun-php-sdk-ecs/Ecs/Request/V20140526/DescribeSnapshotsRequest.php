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

class DescribeSnapshotsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeSnapshots", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $filter2Value;

	private  $snapshotIds;

	private  $usage;

	private  $snapshotLinkId;

	private  $snapshotName;

	private  $pageNumber;

	private  $resourceGroupId;

	private  $filter1Key;

	private  $pageSize;

	private  $diskId;

	private  $Tags;

	private  $dryRun;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $sourceDiskType;

	private  $filter1Value;

	private  $filter2Key;

	private  $ownerId;

	private  $instanceId;

	private  $encrypted;

	private  $snapshotType;

	private  $status;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getFilter2Value() {
		return $this->filter2Value;
	}

	public function setFilter2Value($filter2Value) {
		$this->filter2Value = $filter2Value;
		$this->queryParameters["Filter.2.Value"]=$filter2Value;
	}

	public function getSnapshotIds() {
		return $this->snapshotIds;
	}

	public function setSnapshotIds($snapshotIds) {
		$this->snapshotIds = $snapshotIds;
		$this->queryParameters["SnapshotIds"]=$snapshotIds;
	}

	public function getUsage() {
		return $this->usage;
	}

	public function setUsage($usage) {
		$this->usage = $usage;
		$this->queryParameters["Usage"]=$usage;
	}

	public function getSnapshotLinkId() {
		return $this->snapshotLinkId;
	}

	public function setSnapshotLinkId($snapshotLinkId) {
		$this->snapshotLinkId = $snapshotLinkId;
		$this->queryParameters["SnapshotLinkId"]=$snapshotLinkId;
	}

	public function getSnapshotName() {
		return $this->snapshotName;
	}

	public function setSnapshotName($snapshotName) {
		$this->snapshotName = $snapshotName;
		$this->queryParameters["SnapshotName"]=$snapshotName;
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

	public function getDiskId() {
		return $this->diskId;
	}

	public function setDiskId($diskId) {
		$this->diskId = $diskId;
		$this->queryParameters["DiskId"]=$diskId;
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

	public function getSourceDiskType() {
		return $this->sourceDiskType;
	}

	public function setSourceDiskType($sourceDiskType) {
		$this->sourceDiskType = $sourceDiskType;
		$this->queryParameters["SourceDiskType"]=$sourceDiskType;
	}

	public function getFilter1Value() {
		return $this->filter1Value;
	}

	public function setFilter1Value($filter1Value) {
		$this->filter1Value = $filter1Value;
		$this->queryParameters["Filter.1.Value"]=$filter1Value;
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

	public function getSnapshotType() {
		return $this->snapshotType;
	}

	public function setSnapshotType($snapshotType) {
		$this->snapshotType = $snapshotType;
		$this->queryParameters["SnapshotType"]=$snapshotType;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}