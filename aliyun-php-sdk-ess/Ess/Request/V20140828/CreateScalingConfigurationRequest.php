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

	private  $imageId;

	private  $scalingGroupId;

	private  $InstanceTypes;

	private  $ioOptimized;

	private  $securityGroupId;

	private  $internetMaxBandwidthOut;

	private  $securityEnhancementStrategy;

	private  $keyPairName;

	private  $SpotPriceLimits;

	private  $systemDiskCategory;

	private  $userData;

	private  $hostName;

	private  $passwordInherit;

	private  $imageName;

	private  $instanceType;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ramRoleName;

	private  $ownerId;

	private  $DataDisks;

	private  $scalingConfigurationName;

	private  $tags;

	private  $spotStrategy;

	private  $loadBalancerWeight;

	private  $instanceName;

	private  $systemDiskSize;

	private  $internetChargeType;

	private  $internetMaxBandwidthIn;

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
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
			$this->queryParameters['SpotPriceLimit.' . ($i + 1) . '.InstanceType'] = $SpotPriceLimits[$i]['InstanceType'];
			$this->queryParameters['SpotPriceLimit.' . ($i + 1) . '.PriceLimit'] = $SpotPriceLimits[$i]['PriceLimit'];

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

	public function getHostName() {
		return $this->hostName;
	}

	public function setHostName($hostName) {
		$this->hostName = $hostName;
		$this->queryParameters["HostName"]=$hostName;
	}

	public function getPasswordInherit() {
		return $this->passwordInherit;
	}

	public function setPasswordInherit($passwordInherit) {
		$this->passwordInherit = $passwordInherit;
		$this->queryParameters["PasswordInherit"]=$passwordInherit;
	}

	public function getImageName() {
		return $this->imageName;
	}

	public function setImageName($imageName) {
		$this->imageName = $imageName;
		$this->queryParameters["ImageName"]=$imageName;
	}

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
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

	public function getDataDisks() {
		return $this->DataDisks;
	}

	public function setDataDisks($DataDisks) {
		$this->DataDisks = $DataDisks;
		for ($i = 0; $i < count($DataDisks); $i ++) {	
			$this->queryParameters['DataDisk.' . ($i + 1) . '.SnapshotId'] = $DataDisks[$i]['SnapshotId'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Size'] = $DataDisks[$i]['Size'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Category'] = $DataDisks[$i]['Category'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Device'] = $DataDisks[$i]['Device'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $DataDisks[$i]['DeleteWithInstance'];

		}
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

	public function getSpotStrategy() {
		return $this->spotStrategy;
	}

	public function setSpotStrategy($spotStrategy) {
		$this->spotStrategy = $spotStrategy;
		$this->queryParameters["SpotStrategy"]=$spotStrategy;
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

	public function getInternetChargeType() {
		return $this->internetChargeType;
	}

	public function setInternetChargeType($internetChargeType) {
		$this->internetChargeType = $internetChargeType;
		$this->queryParameters["InternetChargeType"]=$internetChargeType;
	}

	public function getInternetMaxBandwidthIn() {
		return $this->internetMaxBandwidthIn;
	}

	public function setInternetMaxBandwidthIn($internetMaxBandwidthIn) {
		$this->internetMaxBandwidthIn = $internetMaxBandwidthIn;
		$this->queryParameters["InternetMaxBandwidthIn"]=$internetMaxBandwidthIn;
	}
	
}