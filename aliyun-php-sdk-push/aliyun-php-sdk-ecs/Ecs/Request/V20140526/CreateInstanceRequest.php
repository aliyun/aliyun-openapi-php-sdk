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
		parent::__construct("Ecs", "2014-05-26", "CreateInstance");
	}

	private  $ownerId;

	private  $resourceOwnerAccount;

	private  $resourceOwnerId;

	private  $imageId;

	private  $instanceType;

	private  $securityGroupId;

	private  $instanceName;

	private  $internetChargeType;

	private  $internetMaxBandwidthIn;

	private  $internetMaxBandwidthOut;

	private  $hostName;

	private  $password;

	private  $zoneId;

	private  $clusterId;

	private  $clientToken;

	private  $vlanId;

	private  $innerIpAddress;

	private  $systemDiskSize;

	private  $systemDiskCategory;

	private  $systemDiskDiskName;

	private  $systemDiskDescription;

	private  $dataDisk1Size;

	private  $dataDisk1Category;

	private  $dataDisk1SnapshotId;

	private  $dataDisk1DiskName;

	private  $dataDisk1Description;

	private  $dataDisk1Device;

	private  $dataDisk1DeleteWithInstance;

	private  $dataDisk2Size;

	private  $dataDisk2Category;

	private  $dataDisk2SnapshotId;

	private  $dataDisk2DiskName;

	private  $dataDisk2Description;

	private  $dataDisk2Device;

	private  $dataDisk2DeleteWithInstance;

	private  $dataDisk3Size;

	private  $dataDisk3Category;

	private  $dataDisk3SnapshotId;

	private  $dataDisk3DiskName;

	private  $dataDisk3Description;

	private  $dataDisk3Device;

	private  $dataDisk3DeleteWithInstance;

	private  $dataDisk4Size;

	private  $dataDisk4Category;

	private  $dataDisk4SnapshotId;

	private  $dataDisk4DiskName;

	private  $dataDisk4Description;

	private  $dataDisk4Device;

	private  $dataDisk4DeleteWithInstance;

	private  $nodeControllerId;

	private  $description;

	private  $vSwitchId;

	private  $privateIpAddress;

	private  $ioOptimized;

	private  $ownerAccount;

	private  $useAdditionalService;

	private  $instanceChargeType;

	private  $period;

	private  $tag1Key;

	private  $tag2Key;

	private  $tag3Key;

	private  $tag4Key;

	private  $tag5Key;

	private  $tag1Value;

	private  $tag2Value;

	private  $tag3Value;

	private  $tag4Value;

	private  $tag5Value;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
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

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
	}

	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId = $securityGroupId;
		$this->queryParameters["SecurityGroupId"]=$securityGroupId;
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

	public function getInternetMaxBandwidthIn() {
		return $this->internetMaxBandwidthIn;
	}

	public function setInternetMaxBandwidthIn($internetMaxBandwidthIn) {
		$this->internetMaxBandwidthIn = $internetMaxBandwidthIn;
		$this->queryParameters["InternetMaxBandwidthIn"]=$internetMaxBandwidthIn;
	}

	public function getInternetMaxBandwidthOut() {
		return $this->internetMaxBandwidthOut;
	}

	public function setInternetMaxBandwidthOut($internetMaxBandwidthOut) {
		$this->internetMaxBandwidthOut = $internetMaxBandwidthOut;
		$this->queryParameters["InternetMaxBandwidthOut"]=$internetMaxBandwidthOut;
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

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->queryParameters["ClusterId"]=$clusterId;
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

	public function getInnerIpAddress() {
		return $this->innerIpAddress;
	}

	public function setInnerIpAddress($innerIpAddress) {
		$this->innerIpAddress = $innerIpAddress;
		$this->queryParameters["InnerIpAddress"]=$innerIpAddress;
	}

	public function getSystemDiskSize() {
		return $this->systemDiskSize;
	}

	public function setSystemDiskSize($systemDiskSize) {
		$this->systemDiskSize = $systemDiskSize;
		$this->queryParameters["SystemDiskSize"]=$systemDiskSize;
	}

	public function getSystemDiskCategory() {
		return $this->systemDiskCategory;
	}

	public function setSystemDiskCategory($systemDiskCategory) {
		$this->systemDiskCategory = $systemDiskCategory;
		$this->queryParameters["SystemDiskCategory"]=$systemDiskCategory;
	}

	public function getSystemDiskDiskName() {
		return $this->systemDiskDiskName;
	}

	public function setSystemDiskDiskName($systemDiskDiskName) {
		$this->systemDiskDiskName = $systemDiskDiskName;
		$this->queryParameters["SystemDiskDiskName"]=$systemDiskDiskName;
	}

	public function getSystemDiskDescription() {
		return $this->systemDiskDescription;
	}

	public function setSystemDiskDescription($systemDiskDescription) {
		$this->systemDiskDescription = $systemDiskDescription;
		$this->queryParameters["SystemDiskDescription"]=$systemDiskDescription;
	}

	public function getDataDisk1Size() {
		return $this->dataDisk1Size;
	}

	public function setDataDisk1Size($dataDisk1Size) {
		$this->dataDisk1Size = $dataDisk1Size;
		$this->queryParameters["DataDisk1Size"]=$dataDisk1Size;
	}

	public function getDataDisk1Category() {
		return $this->dataDisk1Category;
	}

	public function setDataDisk1Category($dataDisk1Category) {
		$this->dataDisk1Category = $dataDisk1Category;
		$this->queryParameters["DataDisk1Category"]=$dataDisk1Category;
	}

	public function getDataDisk1SnapshotId() {
		return $this->dataDisk1SnapshotId;
	}

	public function setDataDisk1SnapshotId($dataDisk1SnapshotId) {
		$this->dataDisk1SnapshotId = $dataDisk1SnapshotId;
		$this->queryParameters["DataDisk1SnapshotId"]=$dataDisk1SnapshotId;
	}

	public function getDataDisk1DiskName() {
		return $this->dataDisk1DiskName;
	}

	public function setDataDisk1DiskName($dataDisk1DiskName) {
		$this->dataDisk1DiskName = $dataDisk1DiskName;
		$this->queryParameters["DataDisk1DiskName"]=$dataDisk1DiskName;
	}

	public function getDataDisk1Description() {
		return $this->dataDisk1Description;
	}

	public function setDataDisk1Description($dataDisk1Description) {
		$this->dataDisk1Description = $dataDisk1Description;
		$this->queryParameters["DataDisk1Description"]=$dataDisk1Description;
	}

	public function getDataDisk1Device() {
		return $this->dataDisk1Device;
	}

	public function setDataDisk1Device($dataDisk1Device) {
		$this->dataDisk1Device = $dataDisk1Device;
		$this->queryParameters["DataDisk1Device"]=$dataDisk1Device;
	}

	public function getDataDisk1DeleteWithInstance() {
		return $this->dataDisk1DeleteWithInstance;
	}

	public function setDataDisk1DeleteWithInstance($dataDisk1DeleteWithInstance) {
		$this->dataDisk1DeleteWithInstance = $dataDisk1DeleteWithInstance;
		$this->queryParameters["DataDisk1DeleteWithInstance"]=$dataDisk1DeleteWithInstance;
	}

	public function getDataDisk2Size() {
		return $this->dataDisk2Size;
	}

	public function setDataDisk2Size($dataDisk2Size) {
		$this->dataDisk2Size = $dataDisk2Size;
		$this->queryParameters["DataDisk2Size"]=$dataDisk2Size;
	}

	public function getDataDisk2Category() {
		return $this->dataDisk2Category;
	}

	public function setDataDisk2Category($dataDisk2Category) {
		$this->dataDisk2Category = $dataDisk2Category;
		$this->queryParameters["DataDisk2Category"]=$dataDisk2Category;
	}

	public function getDataDisk2SnapshotId() {
		return $this->dataDisk2SnapshotId;
	}

	public function setDataDisk2SnapshotId($dataDisk2SnapshotId) {
		$this->dataDisk2SnapshotId = $dataDisk2SnapshotId;
		$this->queryParameters["DataDisk2SnapshotId"]=$dataDisk2SnapshotId;
	}

	public function getDataDisk2DiskName() {
		return $this->dataDisk2DiskName;
	}

	public function setDataDisk2DiskName($dataDisk2DiskName) {
		$this->dataDisk2DiskName = $dataDisk2DiskName;
		$this->queryParameters["DataDisk2DiskName"]=$dataDisk2DiskName;
	}

	public function getDataDisk2Description() {
		return $this->dataDisk2Description;
	}

	public function setDataDisk2Description($dataDisk2Description) {
		$this->dataDisk2Description = $dataDisk2Description;
		$this->queryParameters["DataDisk2Description"]=$dataDisk2Description;
	}

	public function getDataDisk2Device() {
		return $this->dataDisk2Device;
	}

	public function setDataDisk2Device($dataDisk2Device) {
		$this->dataDisk2Device = $dataDisk2Device;
		$this->queryParameters["DataDisk2Device"]=$dataDisk2Device;
	}

	public function getDataDisk2DeleteWithInstance() {
		return $this->dataDisk2DeleteWithInstance;
	}

	public function setDataDisk2DeleteWithInstance($dataDisk2DeleteWithInstance) {
		$this->dataDisk2DeleteWithInstance = $dataDisk2DeleteWithInstance;
		$this->queryParameters["DataDisk2DeleteWithInstance"]=$dataDisk2DeleteWithInstance;
	}

	public function getDataDisk3Size() {
		return $this->dataDisk3Size;
	}

	public function setDataDisk3Size($dataDisk3Size) {
		$this->dataDisk3Size = $dataDisk3Size;
		$this->queryParameters["DataDisk3Size"]=$dataDisk3Size;
	}

	public function getDataDisk3Category() {
		return $this->dataDisk3Category;
	}

	public function setDataDisk3Category($dataDisk3Category) {
		$this->dataDisk3Category = $dataDisk3Category;
		$this->queryParameters["DataDisk3Category"]=$dataDisk3Category;
	}

	public function getDataDisk3SnapshotId() {
		return $this->dataDisk3SnapshotId;
	}

	public function setDataDisk3SnapshotId($dataDisk3SnapshotId) {
		$this->dataDisk3SnapshotId = $dataDisk3SnapshotId;
		$this->queryParameters["DataDisk3SnapshotId"]=$dataDisk3SnapshotId;
	}

	public function getDataDisk3DiskName() {
		return $this->dataDisk3DiskName;
	}

	public function setDataDisk3DiskName($dataDisk3DiskName) {
		$this->dataDisk3DiskName = $dataDisk3DiskName;
		$this->queryParameters["DataDisk3DiskName"]=$dataDisk3DiskName;
	}

	public function getDataDisk3Description() {
		return $this->dataDisk3Description;
	}

	public function setDataDisk3Description($dataDisk3Description) {
		$this->dataDisk3Description = $dataDisk3Description;
		$this->queryParameters["DataDisk3Description"]=$dataDisk3Description;
	}

	public function getDataDisk3Device() {
		return $this->dataDisk3Device;
	}

	public function setDataDisk3Device($dataDisk3Device) {
		$this->dataDisk3Device = $dataDisk3Device;
		$this->queryParameters["DataDisk3Device"]=$dataDisk3Device;
	}

	public function getDataDisk3DeleteWithInstance() {
		return $this->dataDisk3DeleteWithInstance;
	}

	public function setDataDisk3DeleteWithInstance($dataDisk3DeleteWithInstance) {
		$this->dataDisk3DeleteWithInstance = $dataDisk3DeleteWithInstance;
		$this->queryParameters["DataDisk3DeleteWithInstance"]=$dataDisk3DeleteWithInstance;
	}

	public function getDataDisk4Size() {
		return $this->dataDisk4Size;
	}

	public function setDataDisk4Size($dataDisk4Size) {
		$this->dataDisk4Size = $dataDisk4Size;
		$this->queryParameters["DataDisk4Size"]=$dataDisk4Size;
	}

	public function getDataDisk4Category() {
		return $this->dataDisk4Category;
	}

	public function setDataDisk4Category($dataDisk4Category) {
		$this->dataDisk4Category = $dataDisk4Category;
		$this->queryParameters["DataDisk4Category"]=$dataDisk4Category;
	}

	public function getDataDisk4SnapshotId() {
		return $this->dataDisk4SnapshotId;
	}

	public function setDataDisk4SnapshotId($dataDisk4SnapshotId) {
		$this->dataDisk4SnapshotId = $dataDisk4SnapshotId;
		$this->queryParameters["DataDisk4SnapshotId"]=$dataDisk4SnapshotId;
	}

	public function getDataDisk4DiskName() {
		return $this->dataDisk4DiskName;
	}

	public function setDataDisk4DiskName($dataDisk4DiskName) {
		$this->dataDisk4DiskName = $dataDisk4DiskName;
		$this->queryParameters["DataDisk4DiskName"]=$dataDisk4DiskName;
	}

	public function getDataDisk4Description() {
		return $this->dataDisk4Description;
	}

	public function setDataDisk4Description($dataDisk4Description) {
		$this->dataDisk4Description = $dataDisk4Description;
		$this->queryParameters["DataDisk4Description"]=$dataDisk4Description;
	}

	public function getDataDisk4Device() {
		return $this->dataDisk4Device;
	}

	public function setDataDisk4Device($dataDisk4Device) {
		$this->dataDisk4Device = $dataDisk4Device;
		$this->queryParameters["DataDisk4Device"]=$dataDisk4Device;
	}

	public function getDataDisk4DeleteWithInstance() {
		return $this->dataDisk4DeleteWithInstance;
	}

	public function setDataDisk4DeleteWithInstance($dataDisk4DeleteWithInstance) {
		$this->dataDisk4DeleteWithInstance = $dataDisk4DeleteWithInstance;
		$this->queryParameters["DataDisk4DeleteWithInstance"]=$dataDisk4DeleteWithInstance;
	}

	public function getNodeControllerId() {
		return $this->nodeControllerId;
	}

	public function setNodeControllerId($nodeControllerId) {
		$this->nodeControllerId = $nodeControllerId;
		$this->queryParameters["NodeControllerId"]=$nodeControllerId;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
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

	public function getIoOptimized() {
		return $this->ioOptimized;
	}

	public function setIoOptimized($ioOptimized) {
		$this->ioOptimized = $ioOptimized;
		$this->queryParameters["IoOptimized"]=$ioOptimized;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getUseAdditionalService() {
		return $this->useAdditionalService;
	}

	public function setUseAdditionalService($useAdditionalService) {
		$this->useAdditionalService = $useAdditionalService;
		$this->queryParameters["UseAdditionalService"]=$useAdditionalService;
	}

	public function getInstanceChargeType() {
		return $this->instanceChargeType;
	}

	public function setInstanceChargeType($instanceChargeType) {
		$this->instanceChargeType = $instanceChargeType;
		$this->queryParameters["InstanceChargeType"]=$instanceChargeType;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getTag1Key() {
		return $this->tag1Key;
	}

	public function setTag1Key($tag1Key) {
		$this->tag1Key = $tag1Key;
		$this->queryParameters["Tag1Key"]=$tag1Key;
	}

	public function getTag2Key() {
		return $this->tag2Key;
	}

	public function setTag2Key($tag2Key) {
		$this->tag2Key = $tag2Key;
		$this->queryParameters["Tag2Key"]=$tag2Key;
	}

	public function getTag3Key() {
		return $this->tag3Key;
	}

	public function setTag3Key($tag3Key) {
		$this->tag3Key = $tag3Key;
		$this->queryParameters["Tag3Key"]=$tag3Key;
	}

	public function getTag4Key() {
		return $this->tag4Key;
	}

	public function setTag4Key($tag4Key) {
		$this->tag4Key = $tag4Key;
		$this->queryParameters["Tag4Key"]=$tag4Key;
	}

	public function getTag5Key() {
		return $this->tag5Key;
	}

	public function setTag5Key($tag5Key) {
		$this->tag5Key = $tag5Key;
		$this->queryParameters["Tag5Key"]=$tag5Key;
	}

	public function getTag1Value() {
		return $this->tag1Value;
	}

	public function setTag1Value($tag1Value) {
		$this->tag1Value = $tag1Value;
		$this->queryParameters["Tag1Value"]=$tag1Value;
	}

	public function getTag2Value() {
		return $this->tag2Value;
	}

	public function setTag2Value($tag2Value) {
		$this->tag2Value = $tag2Value;
		$this->queryParameters["Tag2Value"]=$tag2Value;
	}

	public function getTag3Value() {
		return $this->tag3Value;
	}

	public function setTag3Value($tag3Value) {
		$this->tag3Value = $tag3Value;
		$this->queryParameters["Tag3Value"]=$tag3Value;
	}

	public function getTag4Value() {
		return $this->tag4Value;
	}

	public function setTag4Value($tag4Value) {
		$this->tag4Value = $tag4Value;
		$this->queryParameters["Tag4Value"]=$tag4Value;
	}

	public function getTag5Value() {
		return $this->tag5Value;
	}

	public function setTag5Value($tag5Value) {
		$this->tag5Value = $tag5Value;
		$this->queryParameters["Tag5Value"]=$tag5Value;
	}
	
}