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

class DescribeImagesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeImages", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $tag4Value;

	private  $actionType;

	private  $resourceOwnerId;

	private  $imageId;

	private  $snapshotId;

	private  $tag2Key;

	private  $usage;

	private  $tag3Key;

	private  $pageNumber;

	private  $imageOwnerAlias;

	private  $tag1Value;

	private  $isSupportIoOptimized;

	private  $imageName;

	private  $isSupportCloudinit;

	private  $pageSize;

	private  $instanceType;

	private  $tag3Value;

	private  $architecture;

	private  $dryRun;

	private  $tag5Key;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $showExpired;

	private  $oSType;

	private  $ownerId;

	private  $tag5Value;

	private  $tag1Key;

	private  $Filters;

	private  $tag2Value;

	private  $tag4Key;

	private  $status;

	public function getTag4Value() {
		return $this->tag4Value;
	}

	public function setTag4Value($tag4Value) {
		$this->tag4Value = $tag4Value;
		$this->queryParameters["Tag.4.Value"]=$tag4Value;
	}

	public function getActionType() {
		return $this->actionType;
	}

	public function setActionType($actionType) {
		$this->actionType = $actionType;
		$this->queryParameters["ActionType"]=$actionType;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getSnapshotId() {
		return $this->snapshotId;
	}

	public function setSnapshotId($snapshotId) {
		$this->snapshotId = $snapshotId;
		$this->queryParameters["SnapshotId"]=$snapshotId;
	}

	public function getTag2Key() {
		return $this->tag2Key;
	}

	public function setTag2Key($tag2Key) {
		$this->tag2Key = $tag2Key;
		$this->queryParameters["Tag.2.Key"]=$tag2Key;
	}

	public function getUsage() {
		return $this->usage;
	}

	public function setUsage($usage) {
		$this->usage = $usage;
		$this->queryParameters["Usage"]=$usage;
	}

	public function getTag3Key() {
		return $this->tag3Key;
	}

	public function setTag3Key($tag3Key) {
		$this->tag3Key = $tag3Key;
		$this->queryParameters["Tag.3.Key"]=$tag3Key;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getImageOwnerAlias() {
		return $this->imageOwnerAlias;
	}

	public function setImageOwnerAlias($imageOwnerAlias) {
		$this->imageOwnerAlias = $imageOwnerAlias;
		$this->queryParameters["ImageOwnerAlias"]=$imageOwnerAlias;
	}

	public function getTag1Value() {
		return $this->tag1Value;
	}

	public function setTag1Value($tag1Value) {
		$this->tag1Value = $tag1Value;
		$this->queryParameters["Tag.1.Value"]=$tag1Value;
	}

	public function getIsSupportIoOptimized() {
		return $this->isSupportIoOptimized;
	}

	public function setIsSupportIoOptimized($isSupportIoOptimized) {
		$this->isSupportIoOptimized = $isSupportIoOptimized;
		$this->queryParameters["IsSupportIoOptimized"]=$isSupportIoOptimized;
	}

	public function getImageName() {
		return $this->imageName;
	}

	public function setImageName($imageName) {
		$this->imageName = $imageName;
		$this->queryParameters["ImageName"]=$imageName;
	}

	public function getIsSupportCloudinit() {
		return $this->isSupportCloudinit;
	}

	public function setIsSupportCloudinit($isSupportCloudinit) {
		$this->isSupportCloudinit = $isSupportCloudinit;
		$this->queryParameters["IsSupportCloudinit"]=$isSupportCloudinit;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
	}

	public function getTag3Value() {
		return $this->tag3Value;
	}

	public function setTag3Value($tag3Value) {
		$this->tag3Value = $tag3Value;
		$this->queryParameters["Tag.3.Value"]=$tag3Value;
	}

	public function getArchitecture() {
		return $this->architecture;
	}

	public function setArchitecture($architecture) {
		$this->architecture = $architecture;
		$this->queryParameters["Architecture"]=$architecture;
	}

	public function getDryRun() {
		return $this->dryRun;
	}

	public function setDryRun($dryRun) {
		$this->dryRun = $dryRun;
		$this->queryParameters["DryRun"]=$dryRun;
	}

	public function getTag5Key() {
		return $this->tag5Key;
	}

	public function setTag5Key($tag5Key) {
		$this->tag5Key = $tag5Key;
		$this->queryParameters["Tag.5.Key"]=$tag5Key;
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

	public function getShowExpired() {
		return $this->showExpired;
	}

	public function setShowExpired($showExpired) {
		$this->showExpired = $showExpired;
		$this->queryParameters["ShowExpired"]=$showExpired;
	}

	public function getOSType() {
		return $this->oSType;
	}

	public function setOSType($oSType) {
		$this->oSType = $oSType;
		$this->queryParameters["OSType"]=$oSType;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTag5Value() {
		return $this->tag5Value;
	}

	public function setTag5Value($tag5Value) {
		$this->tag5Value = $tag5Value;
		$this->queryParameters["Tag.5.Value"]=$tag5Value;
	}

	public function getTag1Key() {
		return $this->tag1Key;
	}

	public function setTag1Key($tag1Key) {
		$this->tag1Key = $tag1Key;
		$this->queryParameters["Tag.1.Key"]=$tag1Key;
	}

	public function getFilters() {
		return $this->Filters;
	}

	public function setFilters($Filters) {
		$this->Filters = $Filters;
		for ($i = 0; $i < count($Filters); $i ++) {	
			$this->queryParameters['Filter.' . ($i + 1) . '.Key'] = $Filters[$i]['Key'];
			$this->queryParameters['Filter.' . ($i + 1) . '.Value'] = $Filters[$i]['Value'];

		}
	}

	public function getTag2Value() {
		return $this->tag2Value;
	}

	public function setTag2Value($tag2Value) {
		$this->tag2Value = $tag2Value;
		$this->queryParameters["Tag.2.Value"]=$tag2Value;
	}

	public function getTag4Key() {
		return $this->tag4Key;
	}

	public function setTag4Key($tag4Key) {
		$this->tag4Key = $tag4Key;
		$this->queryParameters["Tag.4.Key"]=$tag4Key;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}