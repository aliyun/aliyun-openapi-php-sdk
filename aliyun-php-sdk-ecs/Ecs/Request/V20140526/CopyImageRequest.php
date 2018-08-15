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

class CopyImageRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "CopyImage", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $imageId;

	private  $encrypted;

	private  $resourceOwnerAccount;

	private  $destinationImageName;

	private  $destinationRegionId;

	private  $ownerAccount;

	private  $Tags;

	private  $ownerId;

	private  $destinationDescription;

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

	public function getEncrypted() {
		return $this->encrypted;
	}

	public function setEncrypted($encrypted) {
		$this->encrypted = $encrypted;
		$this->queryParameters["Encrypted"]=$encrypted;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getDestinationImageName() {
		return $this->destinationImageName;
	}

	public function setDestinationImageName($destinationImageName) {
		$this->destinationImageName = $destinationImageName;
		$this->queryParameters["DestinationImageName"]=$destinationImageName;
	}

	public function getDestinationRegionId() {
		return $this->destinationRegionId;
	}

	public function setDestinationRegionId($destinationRegionId) {
		$this->destinationRegionId = $destinationRegionId;
		$this->queryParameters["DestinationRegionId"]=$destinationRegionId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
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

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getDestinationDescription() {
		return $this->destinationDescription;
	}

	public function setDestinationDescription($destinationDescription) {
		$this->destinationDescription = $destinationDescription;
		$this->queryParameters["DestinationDescription"]=$destinationDescription;
	}
	
}