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

class DescribePriceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribePrice", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $dataDisk3Size;

	private  $resourceOwnerId;

	private  $imageId;

	private  $dataDisk3Category;

	private  $ioOptimized;

	private  $internetMaxBandwidthOut;

	private  $systemDiskCategory;

	private  $dataDisk4Category;

	private  $dataDisk4Size;

	private  $priceUnit;

	private  $instanceType;

	private  $dataDisk2Category;

	private  $dataDisk1Size;

	private  $period;

	private  $amount;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $dataDisk2Size;

	private  $ownerId;

	private  $resourceType;

	private  $dataDisk1Category;

	private  $systemDiskSize;

	private  $internetChargeType;

	private  $instanceNetworkType;

	public function getDataDisk3Size() {
		return $this->dataDisk3Size;
	}

	public function setDataDisk3Size($dataDisk3Size) {
		$this->dataDisk3Size = $dataDisk3Size;
		$this->queryParameters["DataDisk.3.Size"]=$dataDisk3Size;
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

	public function getDataDisk3Category() {
		return $this->dataDisk3Category;
	}

	public function setDataDisk3Category($dataDisk3Category) {
		$this->dataDisk3Category = $dataDisk3Category;
		$this->queryParameters["DataDisk.3.Category"]=$dataDisk3Category;
	}

	public function getIoOptimized() {
		return $this->ioOptimized;
	}

	public function setIoOptimized($ioOptimized) {
		$this->ioOptimized = $ioOptimized;
		$this->queryParameters["IoOptimized"]=$ioOptimized;
	}

	public function getInternetMaxBandwidthOut() {
		return $this->internetMaxBandwidthOut;
	}

	public function setInternetMaxBandwidthOut($internetMaxBandwidthOut) {
		$this->internetMaxBandwidthOut = $internetMaxBandwidthOut;
		$this->queryParameters["InternetMaxBandwidthOut"]=$internetMaxBandwidthOut;
	}

	public function getSystemDiskCategory() {
		return $this->systemDiskCategory;
	}

	public function setSystemDiskCategory($systemDiskCategory) {
		$this->systemDiskCategory = $systemDiskCategory;
		$this->queryParameters["SystemDisk.Category"]=$systemDiskCategory;
	}

	public function getDataDisk4Category() {
		return $this->dataDisk4Category;
	}

	public function setDataDisk4Category($dataDisk4Category) {
		$this->dataDisk4Category = $dataDisk4Category;
		$this->queryParameters["DataDisk.4.Category"]=$dataDisk4Category;
	}

	public function getDataDisk4Size() {
		return $this->dataDisk4Size;
	}

	public function setDataDisk4Size($dataDisk4Size) {
		$this->dataDisk4Size = $dataDisk4Size;
		$this->queryParameters["DataDisk.4.Size"]=$dataDisk4Size;
	}

	public function getPriceUnit() {
		return $this->priceUnit;
	}

	public function setPriceUnit($priceUnit) {
		$this->priceUnit = $priceUnit;
		$this->queryParameters["PriceUnit"]=$priceUnit;
	}

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
	}

	public function getDataDisk2Category() {
		return $this->dataDisk2Category;
	}

	public function setDataDisk2Category($dataDisk2Category) {
		$this->dataDisk2Category = $dataDisk2Category;
		$this->queryParameters["DataDisk.2.Category"]=$dataDisk2Category;
	}

	public function getDataDisk1Size() {
		return $this->dataDisk1Size;
	}

	public function setDataDisk1Size($dataDisk1Size) {
		$this->dataDisk1Size = $dataDisk1Size;
		$this->queryParameters["DataDisk.1.Size"]=$dataDisk1Size;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getAmount() {
		return $this->amount;
	}

	public function setAmount($amount) {
		$this->amount = $amount;
		$this->queryParameters["Amount"]=$amount;
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

	public function getDataDisk2Size() {
		return $this->dataDisk2Size;
	}

	public function setDataDisk2Size($dataDisk2Size) {
		$this->dataDisk2Size = $dataDisk2Size;
		$this->queryParameters["DataDisk.2.Size"]=$dataDisk2Size;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceType() {
		return $this->resourceType;
	}

	public function setResourceType($resourceType) {
		$this->resourceType = $resourceType;
		$this->queryParameters["ResourceType"]=$resourceType;
	}

	public function getDataDisk1Category() {
		return $this->dataDisk1Category;
	}

	public function setDataDisk1Category($dataDisk1Category) {
		$this->dataDisk1Category = $dataDisk1Category;
		$this->queryParameters["DataDisk.1.Category"]=$dataDisk1Category;
	}

	public function getSystemDiskSize() {
		return $this->systemDiskSize;
	}

	public function setSystemDiskSize($systemDiskSize) {
		$this->systemDiskSize = $systemDiskSize;
		$this->queryParameters["SystemDisk.Size"]=$systemDiskSize;
	}

	public function getInternetChargeType() {
		return $this->internetChargeType;
	}

	public function setInternetChargeType($internetChargeType) {
		$this->internetChargeType = $internetChargeType;
		$this->queryParameters["InternetChargeType"]=$internetChargeType;
	}

	public function getInstanceNetworkType() {
		return $this->instanceNetworkType;
	}

	public function setInstanceNetworkType($instanceNetworkType) {
		$this->instanceNetworkType = $instanceNetworkType;
		$this->queryParameters["InstanceNetworkType"]=$instanceNetworkType;
	}
	
}