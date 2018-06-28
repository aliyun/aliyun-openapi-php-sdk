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

class ModifyScalingConfigurationRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "ModifyScalingConfiguration", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $imageId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $InstanceTypess;

	private  $internetMaxBandwidthOut;

	private  $ramRoleName;

	private  $keyPairName;

	private  $ownerId;

	private  $systemDiskCategory;

	private  $scalingConfigurationName;

	private  $tags;

	private  $scalingConfigurationId;

	private  $userData;

	private  $hostName;

	private  $instanceName;

	private  $loadBalancerWeight;

	private  $passwordInherit;

	private  $systemDiskSize;

	private  $internetChargeType;

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
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

	public function getInstanceTypess() {
		return $this->InstanceTypess;
	}

	public function setInstanceTypess($InstanceTypess) {
		$this->InstanceTypess = $InstanceTypess;
		for ($i = 0; $i < count($InstanceTypess); $i ++) {	
			$this->queryParameters["InstanceTypes.".($i+1)] = $InstanceTypess[$i];
		}
	}

	public function getInternetMaxBandwidthOut() {
		return $this->internetMaxBandwidthOut;
	}

	public function setInternetMaxBandwidthOut($internetMaxBandwidthOut) {
		$this->internetMaxBandwidthOut = $internetMaxBandwidthOut;
		$this->queryParameters["InternetMaxBandwidthOut"]=$internetMaxBandwidthOut;
	}

	public function getRamRoleName() {
		return $this->ramRoleName;
	}

	public function setRamRoleName($ramRoleName) {
		$this->ramRoleName = $ramRoleName;
		$this->queryParameters["RamRoleName"]=$ramRoleName;
	}

	public function getKeyPairName() {
		return $this->keyPairName;
	}

	public function setKeyPairName($keyPairName) {
		$this->keyPairName = $keyPairName;
		$this->queryParameters["KeyPairName"]=$keyPairName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getSystemDiskCategory() {
		return $this->systemDiskCategory;
	}

	public function setSystemDiskCategory($systemDiskCategory) {
		$this->systemDiskCategory = $systemDiskCategory;
		$this->queryParameters["SystemDisk.Category"]=$systemDiskCategory;
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

	public function getScalingConfigurationId() {
		return $this->scalingConfigurationId;
	}

	public function setScalingConfigurationId($scalingConfigurationId) {
		$this->scalingConfigurationId = $scalingConfigurationId;
		$this->queryParameters["ScalingConfigurationId"]=$scalingConfigurationId;
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

	public function getInstanceName() {
		return $this->instanceName;
	}

	public function setInstanceName($instanceName) {
		$this->instanceName = $instanceName;
		$this->queryParameters["InstanceName"]=$instanceName;
	}

	public function getLoadBalancerWeight() {
		return $this->loadBalancerWeight;
	}

	public function setLoadBalancerWeight($loadBalancerWeight) {
		$this->loadBalancerWeight = $loadBalancerWeight;
		$this->queryParameters["LoadBalancerWeight"]=$loadBalancerWeight;
	}

	public function getPasswordInherit() {
		return $this->passwordInherit;
	}

	public function setPasswordInherit($passwordInherit) {
		$this->passwordInherit = $passwordInherit;
		$this->queryParameters["PasswordInherit"]=$passwordInherit;
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
	
}