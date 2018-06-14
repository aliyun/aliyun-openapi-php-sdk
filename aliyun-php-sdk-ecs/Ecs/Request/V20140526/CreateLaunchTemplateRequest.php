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

class CreateLaunchTemplateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "CreateLaunchTemplate", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $launchTemplateName;

	private  $resourceOwnerId;

	private  $templateTag4Key;

	private  $securityEnhancementStrategy;

	private  $networkType;

	private  $keyPairName;

	private  $spotPriceLimit;

	private  $imageOwnerAlias;

	private  $resourceGroupId;

	private  $templateTag3Key;

	private  $hostName;

	private  $systemDiskIops;

	private  $templateTag3Value;

	private  $Tags;

	private  $period;

	private  $templateResourceGroupId;

	private  $templateTag2Value;

	private  $ownerId;

	private  $vSwitchId;

	private  $spotStrategy;

	private  $instanceName;

	private  $internetChargeType;

	private  $templateTag5Key;

	private  $zoneId;

	private  $internetMaxBandwidthIn;

	private  $versionDescription;

	private  $templateTag1Value;

	private  $imageId;

	private  $ioOptimized;

	private  $securityGroupId;

	private  $internetMaxBandwidthOut;

	private  $description;

	private  $systemDiskCategory;

	private  $userData;

	private  $templateTag5Value;

	private  $instanceType;

	private  $instanceChargeType;

	private  $enableVmOsConfig;

	private  $NetworkInterfaces;

	private  $templateTag2Key;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $systemDiskDiskName;

	private  $ramRoleName;

	private  $autoReleaseTime;

	private  $spotDuration;

	private  $DataDisks;

	private  $templateTag4Value;

	private  $systemDiskSize;

	private  $vpcId;

	private  $templateTag1Key;

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

	public function getTemplateTag4Key() {
		return $this->templateTag4Key;
	}

	public function setTemplateTag4Key($templateTag4Key) {
		$this->templateTag4Key = $templateTag4Key;
		$this->queryParameters["TemplateTag.4.Key"]=$templateTag4Key;
	}

	public function getSecurityEnhancementStrategy() {
		return $this->securityEnhancementStrategy;
	}

	public function setSecurityEnhancementStrategy($securityEnhancementStrategy) {
		$this->securityEnhancementStrategy = $securityEnhancementStrategy;
		$this->queryParameters["SecurityEnhancementStrategy"]=$securityEnhancementStrategy;
	}

	public function getNetworkType() {
		return $this->networkType;
	}

	public function setNetworkType($networkType) {
		$this->networkType = $networkType;
		$this->queryParameters["NetworkType"]=$networkType;
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

	public function getImageOwnerAlias() {
		return $this->imageOwnerAlias;
	}

	public function setImageOwnerAlias($imageOwnerAlias) {
		$this->imageOwnerAlias = $imageOwnerAlias;
		$this->queryParameters["ImageOwnerAlias"]=$imageOwnerAlias;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getTemplateTag3Key() {
		return $this->templateTag3Key;
	}

	public function setTemplateTag3Key($templateTag3Key) {
		$this->templateTag3Key = $templateTag3Key;
		$this->queryParameters["TemplateTag.3.Key"]=$templateTag3Key;
	}

	public function getHostName() {
		return $this->hostName;
	}

	public function setHostName($hostName) {
		$this->hostName = $hostName;
		$this->queryParameters["HostName"]=$hostName;
	}

	public function getSystemDiskIops() {
		return $this->systemDiskIops;
	}

	public function setSystemDiskIops($systemDiskIops) {
		$this->systemDiskIops = $systemDiskIops;
		$this->queryParameters["SystemDisk.Iops"]=$systemDiskIops;
	}

	public function getTemplateTag3Value() {
		return $this->templateTag3Value;
	}

	public function setTemplateTag3Value($templateTag3Value) {
		$this->templateTag3Value = $templateTag3Value;
		$this->queryParameters["TemplateTag.3.Value"]=$templateTag3Value;
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

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getTemplateResourceGroupId() {
		return $this->templateResourceGroupId;
	}

	public function setTemplateResourceGroupId($templateResourceGroupId) {
		$this->templateResourceGroupId = $templateResourceGroupId;
		$this->queryParameters["TemplateResourceGroupId"]=$templateResourceGroupId;
	}

	public function getTemplateTag2Value() {
		return $this->templateTag2Value;
	}

	public function setTemplateTag2Value($templateTag2Value) {
		$this->templateTag2Value = $templateTag2Value;
		$this->queryParameters["TemplateTag.2.Value"]=$templateTag2Value;
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

	public function getInstanceName() {
		return $this->instanceName;
	}

	public function setInstanceName($instanceName) {
		$this->instanceName = $instanceName;
		$this->queryParameters["InstanceName"]=$instanceName;
	}

	public function getInternetChargeType() {
		return $this->internetChargeType;
	}

	public function setInternetChargeType($internetChargeType) {
		$this->internetChargeType = $internetChargeType;
		$this->queryParameters["InternetChargeType"]=$internetChargeType;
	}

	public function getTemplateTag5Key() {
		return $this->templateTag5Key;
	}

	public function setTemplateTag5Key($templateTag5Key) {
		$this->templateTag5Key = $templateTag5Key;
		$this->queryParameters["TemplateTag.5.Key"]=$templateTag5Key;
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

	public function getVersionDescription() {
		return $this->versionDescription;
	}

	public function setVersionDescription($versionDescription) {
		$this->versionDescription = $versionDescription;
		$this->queryParameters["VersionDescription"]=$versionDescription;
	}

	public function getTemplateTag1Value() {
		return $this->templateTag1Value;
	}

	public function setTemplateTag1Value($templateTag1Value) {
		$this->templateTag1Value = $templateTag1Value;
		$this->queryParameters["TemplateTag.1.Value"]=$templateTag1Value;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
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

	public function getTemplateTag5Value() {
		return $this->templateTag5Value;
	}

	public function setTemplateTag5Value($templateTag5Value) {
		$this->templateTag5Value = $templateTag5Value;
		$this->queryParameters["TemplateTag.5.Value"]=$templateTag5Value;
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

	public function getEnableVmOsConfig() {
		return $this->enableVmOsConfig;
	}

	public function setEnableVmOsConfig($enableVmOsConfig) {
		$this->enableVmOsConfig = $enableVmOsConfig;
		$this->queryParameters["EnableVmOsConfig"]=$enableVmOsConfig;
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

	public function getTemplateTag2Key() {
		return $this->templateTag2Key;
	}

	public function setTemplateTag2Key($templateTag2Key) {
		$this->templateTag2Key = $templateTag2Key;
		$this->queryParameters["TemplateTag.2.Key"]=$templateTag2Key;
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

	public function getSpotDuration() {
		return $this->spotDuration;
	}

	public function setSpotDuration($spotDuration) {
		$this->spotDuration = $spotDuration;
		$this->queryParameters["SpotDuration"]=$spotDuration;
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
			$this->queryParameters['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $DataDisks[$i]['DeleteWithInstance'];

		}
	}

	public function getTemplateTag4Value() {
		return $this->templateTag4Value;
	}

	public function setTemplateTag4Value($templateTag4Value) {
		$this->templateTag4Value = $templateTag4Value;
		$this->queryParameters["TemplateTag.4.Value"]=$templateTag4Value;
	}

	public function getSystemDiskSize() {
		return $this->systemDiskSize;
	}

	public function setSystemDiskSize($systemDiskSize) {
		$this->systemDiskSize = $systemDiskSize;
		$this->queryParameters["SystemDisk.Size"]=$systemDiskSize;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getTemplateTag1Key() {
		return $this->templateTag1Key;
	}

	public function setTemplateTag1Key($templateTag1Key) {
		$this->templateTag1Key = $templateTag1Key;
		$this->queryParameters["TemplateTag.1.Key"]=$templateTag1Key;
	}

	public function getSystemDiskDescription() {
		return $this->systemDiskDescription;
	}

	public function setSystemDiskDescription($systemDiskDescription) {
		$this->systemDiskDescription = $systemDiskDescription;
		$this->queryParameters["SystemDisk.Description"]=$systemDiskDescription;
	}
	
}