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

class ModifyDiskAttributeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ModifyDiskAttribute", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $diskName;

	private  $deleteAutoSnapshot;

	private  $resourceOwnerId;

	private  $enableAutoSnapshot;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $description;

	private  $diskId;

	private  $ownerId;

	private  $deleteWithInstance;

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

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getEnableAutoSnapshot() {
		return $this->enableAutoSnapshot;
	}

	public function setEnableAutoSnapshot($enableAutoSnapshot) {
		$this->enableAutoSnapshot = $enableAutoSnapshot;
		$this->queryParameters["EnableAutoSnapshot"]=$enableAutoSnapshot;
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

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getDiskId() {
		return $this->diskId;
	}

	public function setDiskId($diskId) {
		$this->diskId = $diskId;
		$this->queryParameters["DiskId"]=$diskId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getDeleteWithInstance() {
		return $this->deleteWithInstance;
	}

	public function setDeleteWithInstance($deleteWithInstance) {
		$this->deleteWithInstance = $deleteWithInstance;
		$this->queryParameters["DeleteWithInstance"]=$deleteWithInstance;
	}
	
}