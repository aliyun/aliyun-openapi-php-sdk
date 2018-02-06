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

class DescribeAvailableResourceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeAvailableResource", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $ioOptimized;

	private  $dataDiskCategory;

	private  $systemDiskCategory;

	private  $instanceType;

	private  $networkCategory;

	private  $instanceChargeType;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $spotStrategy;

	private  $destinationResource;

	private  $zoneId;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getIoOptimized() {
		return $this->ioOptimized;
	}

	public function setIoOptimized($ioOptimized) {
		$this->ioOptimized = $ioOptimized;
		$this->queryParameters["IoOptimized"]=$ioOptimized;
	}

	public function getDataDiskCategory() {
		return $this->dataDiskCategory;
	}

	public function setDataDiskCategory($dataDiskCategory) {
		$this->dataDiskCategory = $dataDiskCategory;
		$this->queryParameters["DataDiskCategory"]=$dataDiskCategory;
	}

	public function getSystemDiskCategory() {
		return $this->systemDiskCategory;
	}

	public function setSystemDiskCategory($systemDiskCategory) {
		$this->systemDiskCategory = $systemDiskCategory;
		$this->queryParameters["SystemDiskCategory"]=$systemDiskCategory;
	}

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
	}

	public function getNetworkCategory() {
		return $this->networkCategory;
	}

	public function setNetworkCategory($networkCategory) {
		$this->networkCategory = $networkCategory;
		$this->queryParameters["NetworkCategory"]=$networkCategory;
	}

	public function getInstanceChargeType() {
		return $this->instanceChargeType;
	}

	public function setInstanceChargeType($instanceChargeType) {
		$this->instanceChargeType = $instanceChargeType;
		$this->queryParameters["InstanceChargeType"]=$instanceChargeType;
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

	public function getSpotStrategy() {
		return $this->spotStrategy;
	}

	public function setSpotStrategy($spotStrategy) {
		$this->spotStrategy = $spotStrategy;
		$this->queryParameters["SpotStrategy"]=$spotStrategy;
	}

	public function getDestinationResource() {
		return $this->destinationResource;
	}

	public function setDestinationResource($destinationResource) {
		$this->destinationResource = $destinationResource;
		$this->queryParameters["DestinationResource"]=$destinationResource;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}
	
}