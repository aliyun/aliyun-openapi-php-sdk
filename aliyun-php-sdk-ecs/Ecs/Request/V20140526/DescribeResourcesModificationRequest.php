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

class DescribeResourcesModificationRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeResourcesModification", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $migrateAcrossZone;

	private  $instanceType;

	private  $resourceId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $operationType;

	private  $ownerId;

	private  $destinationResource;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getMigrateAcrossZone() {
		return $this->migrateAcrossZone;
	}

	public function setMigrateAcrossZone($migrateAcrossZone) {
		$this->migrateAcrossZone = $migrateAcrossZone;
		$this->queryParameters["MigrateAcrossZone"]=$migrateAcrossZone;
	}

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
	}

	public function getResourceId() {
		return $this->resourceId;
	}

	public function setResourceId($resourceId) {
		$this->resourceId = $resourceId;
		$this->queryParameters["ResourceId"]=$resourceId;
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

	public function getOperationType() {
		return $this->operationType;
	}

	public function setOperationType($operationType) {
		$this->operationType = $operationType;
		$this->queryParameters["OperationType"]=$operationType;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getDestinationResource() {
		return $this->destinationResource;
	}

	public function setDestinationResource($destinationResource) {
		$this->destinationResource = $destinationResource;
		$this->queryParameters["DestinationResource"]=$destinationResource;
	}
	
}