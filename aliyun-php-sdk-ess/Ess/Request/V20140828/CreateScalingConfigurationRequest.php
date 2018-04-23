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
namespace Ess\Request\V20140828;

class CreateScalingConfigurationRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "CreateScalingConfiguration", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $dataDisk3Size;

	private  $imageId;

	private  $dataDisk1SnapshotId;

	private  $dataDisk3Category;

	private  $dataDisk1Device;

	private  $scalingGroupId;

	private  $dataDisk2Device;

	private  $InstanceTypes;

	private  $ioOptimized;

	private  $securityGroupId;

	private  $internetMaxBandwidthOut;

	private  $securityEnhancementStrategy;

	private  $keyPairName;

	private  $SpotPriceLimits;

	private  $systemDiskCategory;

	private  $userData;

	private  $dataDisk4Category;

	private  $dataDisk2SnapshotId;

	private  $dataDisk4Size;

	private  $instanceType;

	private  $dataDisk2Category;

	private  $dataDisk1Size;

	private  $dataDisk3SnapshotId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $dataDisk2Size;

	private  $ramRoleName;

	private  $ownerId;

	private  $scalingConfigurationName;

	private  $tags;

	private  $dataDisk2DeleteWithInstance;

	private  $spotStrategy;

	private  $dataDisk1Category;

	private  $dataDisk3DeleteWithInstance;

	private  $loadBalancerWeight;

	private  $instanceName;

	private  $systemDiskSize;

	private  $dataDisk4SnapshotId;

	private  $dataDisk4Device;

	private  $internetChargeType;

	private  $dataDisk3Device;

	private  $dataDisk4DeleteWithInstance;

	private  $internetMaxBandwidthIn;

	private  $dataDisk1DeleteWithInstance;

	public function getDataDisk3Size() {
		return $this->dataDisk3Size;
	}

	public function setDataDisk3Size($dataDisk3Size) {
		$this->dataDisk3Size = $dataDisk3Size;
		$this->queryParameters["DataDisk.3.Size"]=$dataDisk3Size;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getDataDisk1SnapshotId() {
		return $this->dataDisk1SnapshotId;
	}

	public function setDataDisk1SnapshotId($dataDisk1SnapshotId) {
		$this->dataDisk1SnapshotId = $dataDisk1SnapshotId;
		$this->queryParameters["DataDisk.1.SnapshotId"]=$dataDisk1SnapshotId;
	}

	public function getDataDisk3Category() {
		return $this->dataDisk3Category;
	}

	public function setDataDisk3Category($dataDisk3Category) {
		$this->dataDisk3Category = $dataDisk3Category;
		$this->queryParameters["DataDisk.3.Category"]=$dataDisk3Category;
	}

	public function getDataDisk1Device() {
		return $this->dataDisk1Device;
	}

	public function setDataDisk1Device($dataDisk1Device) {
		$this->dataDisk1Device = $dataDisk1Device;
		$this->queryParameters["DataDisk.1.Device"]=$dataDisk1Device;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getDataDisk2Device() {
		return $this->dataDisk2Device;
	}

	public function setDataDisk2Device($dataDisk2Device) {
		$this->dataDisk2Device = $dataDisk2Device;
		$this->queryParameters["DataDisk.2.Device"]=$dataDisk2Device;
	}

	public function getInstanceTypes() {
		return $this->InstanceTypes;
	}

	public function setInstanceTypes($InstanceTypes) {
		$this->InstanceTypes = $InstanceTypes;
		for ($i = 0; $i < count($InstanceTypes); $i ++) {	
			$this->queryParameters["InstanceTypes.".($i+1)] = $InstanceTypes[$i];
		}
	}

	public function getIoOptimized() {
		return $this->ioOptimized;
	}

	public function setIoOptimized($ioOptimized) {
		$this->ioOptimized = $ioOptimized;
		$this->queryParameters["IoOptimized"]=$ioOptimized;
	}

	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId = $securityGroupId;
		$this->queryParameters["SecurityGroupId"]=$securityGroupId;
	}

	public function getInternetMaxBandwidthOut() {
		return $this->internetMaxBandwidthOut;
	}

	public function setInternetMaxBandwidthOut($internetMaxBandwidthOut) {
		$this->internetMaxBandwidthOut = $internetMaxBandwidthOut;
		$this->queryParameters["InternetMaxBandwidthOut"]=$internetMaxBandwidthOut;
	}

	public function getSecurityEnhancementStrategy() {
		return $this->securityEnhancementStrategy;
	}

	public function setSecurityEnhancementStrategy($securityEnhancementStrategy) {
		$this->securityEnhancementStrategy = $securityEnhancementStrategy;
		$this->queryParameters["SecurityEnhancementStrategy"]=$securityEnhancementStrategy;
	}

	public function getKeyPairName() {
		return $this->keyPairName;
	}

	public function setKeyPairName($keyPairName) {
		$this->keyPairName = $keyPairName;
		$this->queryParameters["KeyPairName"]=$keyPairName;
	}

	public function getSpotPriceLimits() {
		return $this->SpotPriceLimits;
	}

	public function setSpotPriceLimits($SpotPriceLimits) {
		$this->SpotPriceLimits = $SpotPriceLimits;
		for ($i = 0; $i < count($SpotPriceLimits); $i ++) {	
			$this->queryParameters["SpotPriceLimit.".($i+1)] = $SpotPriceLimits[$i];
		}
	}

	public function getSystemDiskCategory() {
		return $this->systemDiskCategory;
	}

	public function setSystemDiskCategory($systemDiskCategory) {
		$this->systemDiskCategory = $systemDiskCategory;
		$this->queryParameters["SystemDisk.Category"]=$systemDiskCategory;
	}

	public function getUserData() {
		return $this->userData;
	}

	public function setUserData($userData) {
		$this->userData = $userData;
		$this->queryParameters["UserData"]=$userData;
	}

	public function getDataDisk4Category() {
		return $this->dataDisk4Category;
	}

	public function setDataDisk4Category($dataDisk4Category) {
		$this->dataDisk4Category = $dataDisk4Category;
		$this->queryParameters["DataDisk.4.Category"]=$dataDisk4Category;
	}

	public function getDataDisk2SnapshotId() {
		return $this->dataDisk2SnapshotId;
	}

	public function setDataDisk2SnapshotId($dataDisk2SnapshotId) {
		$this->dataDisk2SnapshotId = $dataDisk2SnapshotId;
		$this->queryParameters["DataDisk.2.SnapshotId"]=$dataDisk2SnapshotId;
	}

	public function getDataDisk4Size() {
		return $this->dataDisk4Size;
	}

	public function setDataDisk4Size($dataDisk4Size) {
		$this->dataDisk4Size = $dataDisk4Size;
		$this->queryParameters["DataDisk.4.Size"]=$dataDisk4Size;
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

	public function getDataDisk3SnapshotId() {
		return $this->dataDisk3SnapshotId;
	}

	public function setDataDisk3SnapshotId($dataDisk3SnapshotId) {
		$this->dataDisk3SnapshotId = $dataDisk3SnapshotId;
		$this->queryParameters["DataDisk.3.SnapshotId"]=$dataDisk3SnapshotId;
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

	public function getRamRoleName() {
		return $this->ramRoleName;
	}

	public function setRamRoleName($ramRoleName) {
		$this->ramRoleName = $ramRoleName;
		$this->queryParameters["RamRoleName"]=$ramRoleName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getScalingConfigurationName() {
		return $this->scalingConfigurationName;
	}

	public function setScalingConfigurationName($scalingConfigurationName) {
		$this->scalingConfigurationName = $scalingConfigurationName;
		$this->queryParameters["ScalingConfigurationName"]=$scalingConfigurationName;
	}

	public function getTags() {
		return $this->tags;
	}

	public function setTags($tags) {
		$this->tags = $tags;
		$this->queryParameters["Tags"]=$tags;
	}

	public function getDataDisk2DeleteWithInstance() {
		return $this->dataDisk2DeleteWithInstance;
	}

	public function setDataDisk2DeleteWithInstance($dataDisk2DeleteWithInstance) {
		$this->dataDisk2DeleteWithInstance = $dataDisk2DeleteWithInstance;
		$this->queryParameters["DataDisk.2.DeleteWithInstance"]=$dataDisk2DeleteWithInstance;
	}

	public function getSpotStrategy() {
		return $this->spotStrategy;
	}

	public function setSpotStrategy($spotStrategy) {
		$this->spotStrategy = $spotStrategy;
		$this->queryParameters["SpotStrategy"]=$spotStrategy;
	}

	public function getDataDisk1Category() {
		return $this->dataDisk1Category;
	}

	public function setDataDisk1Category($dataDisk1Category) {
		$this->dataDisk1Category = $dataDisk1Category;
		$this->queryParameters["DataDisk.1.Category"]=$dataDisk1Category;
	}

	public function getDataDisk3DeleteWithInstance() {
		return $this->dataDisk3DeleteWithInstance;
	}

	public function setDataDisk3DeleteWithInstance($dataDisk3DeleteWithInstance) {
		$this->dataDisk3DeleteWithInstance = $dataDisk3DeleteWithInstance;
		$this->queryParameters["DataDisk.3.DeleteWithInstance"]=$dataDisk3DeleteWithInstance;
	}

	public function getLoadBalancerWeight() {
		return $this->loadBalancerWeight;
	}

	public function setLoadBalancerWeight($loadBalancerWeight) {
		$this->loadBalancerWeight = $loadBalancerWeight;
		$this->queryParameters["LoadBalancerWeight"]=$loadBalancerWeight;
	}

	public function getInstanceName() {
		return $this->instanceName;
	}

	public function setInstanceName($instanceName) {
		$this->instanceName = $instanceName;
		$this->queryParameters["InstanceName"]=$instanceName;
	}

	public function getSystemDiskSize() {
		return $this->systemDiskSize;
	}

	public function setSystemDiskSize($systemDiskSize) {
		$this->systemDiskSize = $systemDiskSize;
		$this->queryParameters["SystemDisk.Size"]=$systemDiskSize;
	}

	public function getDataDisk4SnapshotId() {
		return $this->dataDisk4SnapshotId;
	}

	public function setDataDisk4SnapshotId($dataDisk4SnapshotId) {
		$this->dataDisk4SnapshotId = $dataDisk4SnapshotId;
		$this->queryParameters["DataDisk.4.SnapshotId"]=$dataDisk4SnapshotId;
	}

	public function getDataDisk4Device() {
		return $this->dataDisk4Device;
	}

	public function setDataDisk4Device($dataDisk4Device) {
		$this->dataDisk4Device = $dataDisk4Device;
		$this->queryParameters["DataDisk.4.Device"]=$dataDisk4Device;
	}

	public function getInternetChargeType() {
		return $this->internetChargeType;
	}

	public function setInternetChargeType($internetChargeType) {
		$this->internetChargeType = $internetChargeType;
		$this->queryParameters["InternetChargeType"]=$internetChargeType;
	}

	public function getDataDisk3Device() {
		return $this->dataDisk3Device;
	}

	public function setDataDisk3Device($dataDisk3Device) {
		$this->dataDisk3Device = $dataDisk3Device;
		$this->queryParameters["DataDisk.3.Device"]=$dataDisk3Device;
	}

	public function getDataDisk4DeleteWithInstance() {
		return $this->dataDisk4DeleteWithInstance;
	}

	public function setDataDisk4DeleteWithInstance($dataDisk4DeleteWithInstance) {
		$this->dataDisk4DeleteWithInstance = $dataDisk4DeleteWithInstance;
		$this->queryParameters["DataDisk.4.DeleteWithInstance"]=$dataDisk4DeleteWithInstance;
	}

	public function getInternetMaxBandwidthIn() {
		return $this->internetMaxBandwidthIn;
	}

	public function setInternetMaxBandwidthIn($internetMaxBandwidthIn) {
		$this->internetMaxBandwidthIn = $internetMaxBandwidthIn;
		$this->queryParameters["InternetMaxBandwidthIn"]=$internetMaxBandwidthIn;
	}

	public function getDataDisk1DeleteWithInstance() {
		return $this->dataDisk1DeleteWithInstance;
	}

	public function setDataDisk1DeleteWithInstance($dataDisk1DeleteWithInstance) {
		$this->dataDisk1DeleteWithInstance = $dataDisk1DeleteWithInstance;
		$this->queryParameters["DataDisk.1.DeleteWithInstance"]=$dataDisk1DeleteWithInstance;
	}
	
}
