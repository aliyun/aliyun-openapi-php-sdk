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

class CreateImageRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "CreateImage", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $DiskDeviceMappings;

	private  $resourceOwnerId;

	private  $snapshotId;

	private  $resourceOwnerAccount;

	private  $clientToken;

	private  $ownerAccount;

	private  $description;

	private  $ownerId;

	private  $platform;

	private  $resourceGroupId;

	private  $instanceId;

	private  $imageName;

	private  $imageVersion;

	private  $Tags;

	private  $architecture;

	public function getDiskDeviceMappings() {
		return $this->DiskDeviceMappings;
	}

	public function setDiskDeviceMappings($DiskDeviceMappings) {
		$this->DiskDeviceMappings = $DiskDeviceMappings;
		for ($i = 0; $i < count($DiskDeviceMappings); $i ++) {	
			$this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.SnapshotId'] = $DiskDeviceMappings[$i]['SnapshotId'];
			$this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.Size'] = $DiskDeviceMappings[$i]['Size'];
			$this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.DiskType'] = $DiskDeviceMappings[$i]['DiskType'];
			$this->queryParameters['DiskDeviceMapping.' . ($i + 1) . '.Device'] = $DiskDeviceMappings[$i]['Device'];

		}
	}

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

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPlatform() {
		return $this->platform;
	}

	public function setPlatform($platform) {
		$this->platform = $platform;
		$this->queryParameters["Platform"]=$platform;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getImageName() {
		return $this->imageName;
	}

	public function setImageName($imageName) {
		$this->imageName = $imageName;
		$this->queryParameters["ImageName"]=$imageName;
	}

	public function getImageVersion() {
		return $this->imageVersion;
	}

	public function setImageVersion($imageVersion) {
		$this->imageVersion = $imageVersion;
		$this->queryParameters["ImageVersion"]=$imageVersion;
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

	public function getArchitecture() {
		return $this->architecture;
	}

	public function setArchitecture($architecture) {
		$this->architecture = $architecture;
		$this->queryParameters["Architecture"]=$architecture;
	}
	
}