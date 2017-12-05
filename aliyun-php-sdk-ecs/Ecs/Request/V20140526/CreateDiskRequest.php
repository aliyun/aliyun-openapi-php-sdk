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

class CreateDiskRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "CreateDisk", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $tag4Value;

	private  $resourceOwnerId;

	private  $snapshotId;

	private  $tag2Key;

	private  $clientToken;

	private  $description;

	private  $tag3Key;

	private  $diskName;

	private  $tag1Value;

	private  $resourceGroupId;

	private  $diskCategory;

	private  $tag3Value;

	private  $tag5Key;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $tag5Value;

	private  $tag1Key;

	private  $size;

	private  $encrypted;

	private  $tag2Value;

	private  $zoneId;

	private  $tag4Key;

	public function getTag4Value() {
		return $this->tag4Value;
	}

	public function setTag4Value($tag4Value) {
		$this->tag4Value = $tag4Value;
		$this->queryParameters["Tag.4.Value"]=$tag4Value;
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

	public function getTag2Key() {
		return $this->tag2Key;
	}

	public function setTag2Key($tag2Key) {
		$this->tag2Key = $tag2Key;
		$this->queryParameters["Tag.2.Key"]=$tag2Key;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getTag3Key() {
		return $this->tag3Key;
	}

	public function setTag3Key($tag3Key) {
		$this->tag3Key = $tag3Key;
		$this->queryParameters["Tag.3.Key"]=$tag3Key;
	}

	public function getDiskName() {
		return $this->diskName;
	}

	public function setDiskName($diskName) {
		$this->diskName = $diskName;
		$this->queryParameters["DiskName"]=$diskName;
	}

	public function getTag1Value() {
		return $this->tag1Value;
	}

	public function setTag1Value($tag1Value) {
		$this->tag1Value = $tag1Value;
		$this->queryParameters["Tag.1.Value"]=$tag1Value;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getDiskCategory() {
		return $this->diskCategory;
	}

	public function setDiskCategory($diskCategory) {
		$this->diskCategory = $diskCategory;
		$this->queryParameters["DiskCategory"]=$diskCategory;
	}

	public function getTag3Value() {
		return $this->tag3Value;
	}

	public function setTag3Value($tag3Value) {
		$this->tag3Value = $tag3Value;
		$this->queryParameters["Tag.3.Value"]=$tag3Value;
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

	public function getSize() {
		return $this->size;
	}

	public function setSize($size) {
		$this->size = $size;
		$this->queryParameters["Size"]=$size;
	}

	public function getEncrypted() {
		return $this->encrypted;
	}

	public function setEncrypted($encrypted) {
		$this->encrypted = $encrypted;
		$this->queryParameters["Encrypted"]=$encrypted;
	}

	public function getTag2Value() {
		return $this->tag2Value;
	}

	public function setTag2Value($tag2Value) {
		$this->tag2Value = $tag2Value;
		$this->queryParameters["Tag.2.Value"]=$tag2Value;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getTag4Key() {
		return $this->tag4Key;
	}

	public function setTag4Key($tag4Key) {
		$this->tag4Key = $tag4Key;
		$this->queryParameters["Tag.4.Key"]=$tag4Key;
	}
	
}