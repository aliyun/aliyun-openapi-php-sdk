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

class RunInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "RunInstances", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $launchTemplateName;

	private  $resourceOwnerId;

	private  $uniqueSuffix;

	private  $hpcClusterId;

	private  $securityEnhancementStrategy;

	private  $keyPairName;

	private  $spotPriceLimit;

	private  $resourceGroupId;

	private  $hostName;

	private  $password;

	private  $Tags;

	private  $autoRenewPeriod;

	private  $period;

	private  $dryRun;

	private  $launchTemplateId;

	private  $ownerId;

	private  $vSwitchId;

	private  $spotStrategy;

	private  $privateIpAddress;

	private  $periodUnit;

	private  $instanceName;

	private  $autoRenew;

	private  $internetChargeType;

	private  $zoneId;

	private  $internetMaxBandwidthIn;

	private  $imageId;

	private  $spotInterruptionBehavior;

	private  $clientToken;

	private  $ioOptimized;

	private  $securityGroupId;

	private  $internetMaxBandwidthOut;

	private  $description;

	private  $systemDiskCategory;

	private  $userData;

	private  $passwordInherit;

	private  $instanceType;

	private  $instanceChargeType;

	private  $NetworkInterfaces;

	private  $amount;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $systemDiskDiskName;

	private  $ramRoleName;

	private  $autoReleaseTime;

	private  $dedicatedHostId;

	private  $creditSpecification;

	private  $DataDisks;

	private  $launchTemplateVersion;

	private  $systemDiskSize;

	private  $systemDiskDescription;

	public function getLaunchTemplateName() {
		return $this->launchTemplateName;
	}

	public function setLaunchTemplateName($launchTemplateName) {
		$this->launchTemplateName = $launchTemplateName;
		$this->queryParameters["LaunchTemplateName"]=$launchTemplateName;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getUniqueSuffix() {
		return $this->uniqueSuffix;
	}

	public function setUniqueSuffix($uniqueSuffix) {
		$this->uniqueSuffix = $uniqueSuffix;
		$this->queryParameters["UniqueSuffix"]=$uniqueSuffix;
	}

	public function getHpcClusterId() {
		return $this->hpcClusterId;
	}

	public function setHpcClusterId($hpcClusterId) {
		$this->hpcClusterId = $hpcClusterId;
		$this->queryParameters["HpcClusterId"]=$hpcClusterId;
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

	public function getSpotPriceLimit() {
		return $this->spotPriceLimit;
	}

	public function setSpotPriceLimit($spotPriceLimit) {
		$this->spotPriceLimit = $spotPriceLimit;
		$this->queryParameters["SpotPriceLimit"]=$spotPriceLimit;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getHostName() {
		return $this->hostName;
	}

	public function setHostName($hostName) {
		$this->hostName = $hostName;
		$this->queryParameters["HostName"]=$hostName;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
		$this->queryParameters["Password"]=$password;
	}

	public function getTags() {
		return $this->Tags;
	}

	public function setTags($Tags) {
		$this->Tags = $Tags;
		for ($i = 0; $i < count($Tags); $i ++) {	
			$this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $Tags[$i]['Key'];
			$this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];

		}
	}

	public function getAutoRenewPeriod() {
		return $this->autoRenewPeriod;
	}

	public function setAutoRenewPeriod($autoRenewPeriod) {
		$this->autoRenewPeriod = $autoRenewPeriod;
		$this->queryParameters["AutoRenewPeriod"]=$autoRenewPeriod;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getDryRun() {
		return $this->dryRun;
	}

	public function setDryRun($dryRun) {
		$this->dryRun = $dryRun;
		$this->queryParameters["DryRun"]=$dryRun;
	}

	public function getLaunchTemplateId() {
		return $this->launchTemplateId;
	}

	public function setLaunchTemplateId($launchTemplateId) {
		$this->launchTemplateId = $launchTemplateId;
		$this->queryParameters["LaunchTemplateId"]=$launchTemplateId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getSpotStrategy() {
		return $this->spotStrategy;
	}

	public function setSpotStrategy($spotStrategy) {
		$this->spotStrategy = $spotStrategy;
		$this->queryParameters["SpotStrategy"]=$spotStrategy;
	}

	public function getPrivateIpAddress() {
		return $this->privateIpAddress;
	}

	public function setPrivateIpAddress($privateIpAddress) {
		$this->privateIpAddress = $privateIpAddress;
		$this->queryParameters["PrivateIpAddress"]=$privateIpAddress;
	}

	public function getPeriodUnit() {
		return $this->periodUnit;
	}

	public function setPeriodUnit($periodUnit) {
		$this->periodUnit = $periodUnit;
		$this->queryParameters["PeriodUnit"]=$periodUnit;
	}

	public function getInstanceName() {
		return $this->instanceName;
	}

	public function setInstanceName($instanceName) {
		$this->instanceName = $instanceName;
		$this->queryParameters["InstanceName"]=$instanceName;
	}

	public function getAutoRenew() {
		return $this->autoRenew;
	}

	public function setAutoRenew($autoRenew) {
		$this->autoRenew = $autoRenew;
		$this->queryParameters["AutoRenew"]=$autoRenew;
	}

	public function getInternetChargeType() {
		return $this->internetChargeType;
	}

	public function setInternetChargeType($internetChargeType) {
		$this->internetChargeType = $internetChargeType;
		$this->queryParameters["InternetChargeType"]=$internetChargeType;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getInternetMaxBandwidthIn() {
		return $this->internetMaxBandwidthIn;
	}

	public function setInternetMaxBandwidthIn($internetMaxBandwidthIn) {
		$this->internetMaxBandwidthIn = $internetMaxBandwidthIn;
		$this->queryParameters["InternetMaxBandwidthIn"]=$internetMaxBandwidthIn;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getSpotInterruptionBehavior() {
		return $this->spotInterruptionBehavior;
	}

	public function setSpotInterruptionBehavior($spotInterruptionBehavior) {
		$this->spotInterruptionBehavior = $spotInterruptionBehavior;
		$this->queryParameters["SpotInterruptionBehavior"]=$spotInterruptionBehavior;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
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

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
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

	public function getPasswordInherit() {
		return $this->passwordInherit;
	}

	public function setPasswordInherit($passwordInherit) {
		$this->passwordInherit = $passwordInherit;
		$this->queryParameters["PasswordInherit"]=$passwordInherit;
	}

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
	}

	public function getInstanceChargeType() {
		return $this->instanceChargeType;
	}

	public function setInstanceChargeType($instanceChargeType) {
		$this->instanceChargeType = $instanceChargeType;
		$this->queryParameters["InstanceChargeType"]=$instanceChargeType;
	}

	public function getNetworkInterfaces() {
		return $this->NetworkInterfaces;
	}

	public function setNetworkInterfaces($NetworkInterfaces) {
		$this->NetworkInterfaces = $NetworkInterfaces;
		for ($i = 0; $i < count($NetworkInterfaces); $i ++) {	
			$this->queryParameters['NetworkInterface.' . ($i + 1) . '.PrimaryIpAddress'] = $NetworkInterfaces[$i]['PrimaryIpAddress'];
			$this->queryParameters['NetworkInterface.' . ($i + 1) . '.VSwitchId'] = $NetworkInterfaces[$i]['VSwitchId'];
			$this->queryParameters['NetworkInterface.' . ($i + 1) . '.SecurityGroupId'] = $NetworkInterfaces[$i]['SecurityGroupId'];
			$this->queryParameters['NetworkInterface.' . ($i + 1) . '.NetworkInterfaceName'] = $NetworkInterfaces[$i]['NetworkInterfaceName'];
			$this->queryParameters['NetworkInterface.' . ($i + 1) . '.Description'] = $NetworkInterfaces[$i]['Description'];

		}
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

	public function getSystemDiskDiskName() {
		return $this->systemDiskDiskName;
	}

	public function setSystemDiskDiskName($systemDiskDiskName) {
		$this->systemDiskDiskName = $systemDiskDiskName;
		$this->queryParameters["SystemDisk.DiskName"]=$systemDiskDiskName;
	}

	public function getRamRoleName() {
		return $this->ramRoleName;
	}

	public function setRamRoleName($ramRoleName) {
		$this->ramRoleName = $ramRoleName;
		$this->queryParameters["RamRoleName"]=$ramRoleName;
	}

	public function getAutoReleaseTime() {
		return $this->autoReleaseTime;
	}

	public function setAutoReleaseTime($autoReleaseTime) {
		$this->autoReleaseTime = $autoReleaseTime;
		$this->queryParameters["AutoReleaseTime"]=$autoReleaseTime;
	}

	public function getDedicatedHostId() {
		return $this->dedicatedHostId;
	}

	public function setDedicatedHostId($dedicatedHostId) {
		$this->dedicatedHostId = $dedicatedHostId;
		$this->queryParameters["DedicatedHostId"]=$dedicatedHostId;
	}

	public function getCreditSpecification() {
		return $this->creditSpecification;
	}

	public function setCreditSpecification($creditSpecification) {
		$this->creditSpecification = $creditSpecification;
		$this->queryParameters["CreditSpecification"]=$creditSpecification;
	}

	public function getDataDisks() {
		return $this->DataDisks;
	}

	public function setDataDisks($DataDisks) {
		$this->DataDisks = $DataDisks;
		for ($i = 0; $i < count($DataDisks); $i ++) {	
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Size'] = $DataDisks[$i]['Size'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.SnapshotId'] = $DataDisks[$i]['SnapshotId'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Category'] = $DataDisks[$i]['Category'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Encrypted'] = $DataDisks[$i]['Encrypted'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.DiskName'] = $DataDisks[$i]['DiskName'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Description'] = $DataDisks[$i]['Description'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Device'] = $DataDisks[$i]['Device'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $DataDisks[$i]['DeleteWithInstance'];

		}
	}

	public function getLaunchTemplateVersion() {
		return $this->launchTemplateVersion;
	}

	public function setLaunchTemplateVersion($launchTemplateVersion) {
		$this->launchTemplateVersion = $launchTemplateVersion;
		$this->queryParameters["LaunchTemplateVersion"]=$launchTemplateVersion;
	}

	public function getSystemDiskSize() {
		return $this->systemDiskSize;
	}

	public function setSystemDiskSize($systemDiskSize) {
		$this->systemDiskSize = $systemDiskSize;
		$this->queryParameters["SystemDisk.Size"]=$systemDiskSize;
	}

	public function getSystemDiskDescription() {
		return $this->systemDiskDescription;
	}

	public function setSystemDiskDescription($systemDiskDescription) {
		$this->systemDiskDescription = $systemDiskDescription;
		$this->queryParameters["SystemDisk.Description"]=$systemDiskDescription;
	}
	
}