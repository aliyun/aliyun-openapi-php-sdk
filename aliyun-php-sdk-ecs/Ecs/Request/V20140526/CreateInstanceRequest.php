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

class CreateInstanceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "CreateInstance", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $tag4Value;

	private  $resourceOwnerId;

	private  $tag2Key;

	private  $hpcClusterId;

	private  $tag3Key;

	private  $securityEnhancementStrategy;

	private  $keyPairName;

	private  $spotPriceLimit;

	private  $tag1Value;

	private  $resourceGroupId;

	private  $hostName;

	private  $password;

	private  $autoRenewPeriod;

	private  $nodeControllerId;

	private  $period;

	private  $dryRun;

	private  $tag5Key;

	private  $ownerId;

	private  $vSwitchId;

	private  $privateIpAddress;

	private  $spotStrategy;

	private  $periodUnit;

	private  $instanceName;

	private  $autoRenew;

	private  $internetChargeType;

	private  $zoneId;

	private  $tag4Key;

	private  $internetMaxBandwidthIn;

	private  $useAdditionalService;

	private  $imageId;

	private  $clientToken;

	private  $vlanId;

	private  $ioOptimized;

	private  $securityGroupId;

	private  $internetMaxBandwidthOut;

	private  $description;

	private  $systemDiskCategory;

	private  $userData;

	private  $instanceType;

	private  $instanceChargeType;

	private  $tag3Value;

	private  $deploymentSetId;

	private  $innerIpAddress;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $systemDiskDiskName;

	private  $ramRoleName;

	private  $clusterId;

	private  $DataDisks;

	private  $tag5Value;

	private  $tag1Key;

	private  $systemDiskSize;

	private  $tag2Value;

	private  $systemDiskDescription;

	public function getTag4Value() {
		return $this->tag4Value;
	}

	public function setTag4Value($tag4Value) {
		$this->tag4Value = $tag4Value;
		$this->queryParameters["Tag.4.Value"]=$tag4Value;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getTag2Key() {
		return $this->tag2Key;
	}

	public function setTag2Key($tag2Key) {
		$this->tag2Key = $tag2Key;
		$this->queryParameters["Tag.2.Key"]=$tag2Key;
	}

	public function getHpcClusterId() {
		return $this->hpcClusterId;
	}

	public function setHpcClusterId($hpcClusterId) {
		$this->hpcClusterId = $hpcClusterId;
		$this->queryParameters["HpcClusterId"]=$hpcClusterId;
	}

	public function getTag3Key() {
		return $this->tag3Key;
	}

	public function setTag3Key($tag3Key) {
		$this->tag3Key = $tag3Key;
		$this->queryParameters["Tag.3.Key"]=$tag3Key;
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

	public function getTag1Value() {
		return $this->tag1Value;
	}

	public function setTag1Value($tag1Value) {
		$this->tag1Value = $tag1Value;
		$this->queryParameters["Tag.1.Value"]=$tag1Value;
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

	public function getAutoRenewPeriod() {
		return $this->autoRenewPeriod;
	}

	public function setAutoRenewPeriod($autoRenewPeriod) {
		$this->autoRenewPeriod = $autoRenewPeriod;
		$this->queryParameters["AutoRenewPeriod"]=$autoRenewPeriod;
	}

	public function getNodeControllerId() {
		return $this->nodeControllerId;
	}

	public function setNodeControllerId($nodeControllerId) {
		$this->nodeControllerId = $nodeControllerId;
		$this->queryParameters["NodeControllerId"]=$nodeControllerId;
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

	public function getTag5Key() {
		return $this->tag5Key;
	}

	public function setTag5Key($tag5Key) {
		$this->tag5Key = $tag5Key;
		$this->queryParameters["Tag.5.Key"]=$tag5Key;
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

	public function getPrivateIpAddress() {
		return $this->privateIpAddress;
	}

	public function setPrivateIpAddress($privateIpAddress) {
		$this->privateIpAddress = $privateIpAddress;
		$this->queryParameters["PrivateIpAddress"]=$privateIpAddress;
	}

	public function getSpotStrategy() {
		return $this->spotStrategy;
	}

	public function setSpotStrategy($spotStrategy) {
		$this->spotStrategy = $spotStrategy;
		$this->queryParameters["SpotStrategy"]=$spotStrategy;
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

	public function getTag4Key() {
		return $this->tag4Key;
	}

	public function setTag4Key($tag4Key) {
		$this->tag4Key = $tag4Key;
		$this->queryParameters["Tag.4.Key"]=$tag4Key;
	}

	public function getInternetMaxBandwidthIn() {
		return $this->internetMaxBandwidthIn;
	}

	public function setInternetMaxBandwidthIn($internetMaxBandwidthIn) {
		$this->internetMaxBandwidthIn = $internetMaxBandwidthIn;
		$this->queryParameters["InternetMaxBandwidthIn"]=$internetMaxBandwidthIn;
	}

	public function getUseAdditionalService() {
		return $this->useAdditionalService;
	}

	public function setUseAdditionalService($useAdditionalService) {
		$this->useAdditionalService = $useAdditionalService;
		$this->queryParameters["UseAdditionalService"]=$useAdditionalService;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getVlanId() {
		return $this->vlanId;
	}

	public function setVlanId($vlanId) {
		$this->vlanId = $vlanId;
		$this->queryParameters["VlanId"]=$vlanId;
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

	public function getTag3Value() {
		return $this->tag3Value;
	}

	public function setTag3Value($tag3Value) {
		$this->tag3Value = $tag3Value;
		$this->queryParameters["Tag.3.Value"]=$tag3Value;
	}

	public function getDeploymentSetId() {
		return $this->deploymentSetId;
	}

	public function setDeploymentSetId($deploymentSetId) {
		$this->deploymentSetId = $deploymentSetId;
		$this->queryParameters["DeploymentSetId"]=$deploymentSetId;
	}

	public function getInnerIpAddress() {
		return $this->innerIpAddress;
	}

	public function setInnerIpAddress($innerIpAddress) {
		$this->innerIpAddress = $innerIpAddress;
		$this->queryParameters["InnerIpAddress"]=$innerIpAddress;
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

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->queryParameters["ClusterId"]=$clusterId;
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
			$this->queryParameters['DataDisk.' . ($i + 1) . '.DiskName'] = $DataDisks[$i]['DiskName'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Description'] = $DataDisks[$i]['Description'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Device'] = $DataDisks[$i]['Device'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $DataDisks[$i]['DeleteWithInstance'];
			$this->queryParameters['DataDisk.' . ($i + 1) . '.Encrypted'] = $DataDisks[$i]['Encrypted'];

		}
	}

	public function getTag5Value() {
		return $this->tag5Value;
	}

	public function setTag5Value($tag5Value) {
		$this->tag5Value = $tag5Value;
		$this->queryParameters["Tag.5.Value"]=$tag5Value;
	}

	public function getTag1Key() {
		return $this->tag1Key;
	}

	public function setTag1Key($tag1Key) {
		$this->tag1Key = $tag1Key;
		$this->queryParameters["Tag.1.Key"]=$tag1Key;
	}

	public function getSystemDiskSize() {
		return $this->systemDiskSize;
	}

	public function setSystemDiskSize($systemDiskSize) {
		$this->systemDiskSize = $systemDiskSize;
		$this->queryParameters["SystemDisk.Size"]=$systemDiskSize;
	}

	public function getTag2Value() {
		return $this->tag2Value;
	}

	public function setTag2Value($tag2Value) {
		$this->tag2Value = $tag2Value;
		$this->queryParameters["Tag.2.Value"]=$tag2Value;
	}

	public function getSystemDiskDescription() {
		return $this->systemDiskDescription;
	}

	public function setSystemDiskDescription($systemDiskDescription) {
		$this->systemDiskDescription = $systemDiskDescription;
		$this->queryParameters["SystemDisk.Description"]=$systemDiskDescription;
	}
	
}