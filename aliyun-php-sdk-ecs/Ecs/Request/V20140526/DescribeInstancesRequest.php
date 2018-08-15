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

class DescribeInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeInstances", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $innerIpAddresses;

	private  $resourceOwnerId;

	private  $imageId;

	private  $privateIpAddresses;

	private  $hpcClusterId;

	private  $filter2Value;

	private  $filter4Value;

	private  $ioOptimized;

	private  $securityGroupId;

	private  $keyPairName;

	private  $filter4Key;

	private  $pageNumber;

	private  $resourceGroupId;

	private  $lockReason;

	private  $filter1Key;

	private  $rdmaIpAddresses;

	private  $deviceAvailable;

	private  $pageSize;

	private  $publicIpAddresses;

	private  $instanceType;

	private  $Tags;

	private  $instanceChargeType;

	private  $filter3Value;

	private  $dryRun;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $instanceTypeFamily;

	private  $filter1Value;

	private  $filter2Key;

	private  $ownerId;

	private  $vSwitchId;

	private  $eipAddresses;

	private  $instanceName;

	private  $instanceIds;

	private  $internetChargeType;

	private  $vpcId;

	private  $zoneId;

	private  $filter3Key;

	private  $instanceNetworkType;

	private  $status;

	public function getInnerIpAddresses() {
		return $this->innerIpAddresses;
	}

	public function setInnerIpAddresses($innerIpAddresses) {
		$this->innerIpAddresses = $innerIpAddresses;
		$this->queryParameters["InnerIpAddresses"]=$innerIpAddresses;
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

	public function getPrivateIpAddresses() {
		return $this->privateIpAddresses;
	}

	public function setPrivateIpAddresses($privateIpAddresses) {
		$this->privateIpAddresses = $privateIpAddresses;
		$this->queryParameters["PrivateIpAddresses"]=$privateIpAddresses;
	}

	public function getHpcClusterId() {
		return $this->hpcClusterId;
	}

	public function setHpcClusterId($hpcClusterId) {
		$this->hpcClusterId = $hpcClusterId;
		$this->queryParameters["HpcClusterId"]=$hpcClusterId;
	}

	public function getFilter2Value() {
		return $this->filter2Value;
	}

	public function setFilter2Value($filter2Value) {
		$this->filter2Value = $filter2Value;
		$this->queryParameters["Filter.2.Value"]=$filter2Value;
	}

	public function getFilter4Value() {
		return $this->filter4Value;
	}

	public function setFilter4Value($filter4Value) {
		$this->filter4Value = $filter4Value;
		$this->queryParameters["Filter.4.Value"]=$filter4Value;
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

	public function getKeyPairName() {
		return $this->keyPairName;
	}

	public function setKeyPairName($keyPairName) {
		$this->keyPairName = $keyPairName;
		$this->queryParameters["KeyPairName"]=$keyPairName;
	}

	public function getFilter4Key() {
		return $this->filter4Key;
	}

	public function setFilter4Key($filter4Key) {
		$this->filter4Key = $filter4Key;
		$this->queryParameters["Filter.4.Key"]=$filter4Key;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getLockReason() {
		return $this->lockReason;
	}

	public function setLockReason($lockReason) {
		$this->lockReason = $lockReason;
		$this->queryParameters["LockReason"]=$lockReason;
	}

	public function getFilter1Key() {
		return $this->filter1Key;
	}

	public function setFilter1Key($filter1Key) {
		$this->filter1Key = $filter1Key;
		$this->queryParameters["Filter.1.Key"]=$filter1Key;
	}

	public function getRdmaIpAddresses() {
		return $this->rdmaIpAddresses;
	}

	public function setRdmaIpAddresses($rdmaIpAddresses) {
		$this->rdmaIpAddresses = $rdmaIpAddresses;
		$this->queryParameters["RdmaIpAddresses"]=$rdmaIpAddresses;
	}

	public function getDeviceAvailable() {
		return $this->deviceAvailable;
	}

	public function setDeviceAvailable($deviceAvailable) {
		$this->deviceAvailable = $deviceAvailable;
		$this->queryParameters["DeviceAvailable"]=$deviceAvailable;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getPublicIpAddresses() {
		return $this->publicIpAddresses;
	}

	public function setPublicIpAddresses($publicIpAddresses) {
		$this->publicIpAddresses = $publicIpAddresses;
		$this->queryParameters["PublicIpAddresses"]=$publicIpAddresses;
	}

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
	}

	public function getTags() {
		return $this->Tags;
	}

	public function setTags($Tags) {
		$this->Tags = $Tags;
		for ($i = 0; $i < count($Tags); $i ++) {	
			$this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];
			$this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $Tags[$i]['Key'];

		}
	}

	public function getInstanceChargeType() {
		return $this->instanceChargeType;
	}

	public function setInstanceChargeType($instanceChargeType) {
		$this->instanceChargeType = $instanceChargeType;
		$this->queryParameters["InstanceChargeType"]=$instanceChargeType;
	}

	public function getFilter3Value() {
		return $this->filter3Value;
	}

	public function setFilter3Value($filter3Value) {
		$this->filter3Value = $filter3Value;
		$this->queryParameters["Filter.3.Value"]=$filter3Value;
	}

	public function getDryRun() {
		return $this->dryRun;
	}

	public function setDryRun($dryRun) {
		$this->dryRun = $dryRun;
		$this->queryParameters["DryRun"]=$dryRun;
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

	public function getInstanceTypeFamily() {
		return $this->instanceTypeFamily;
	}

	public function setInstanceTypeFamily($instanceTypeFamily) {
		$this->instanceTypeFamily = $instanceTypeFamily;
		$this->queryParameters["InstanceTypeFamily"]=$instanceTypeFamily;
	}

	public function getFilter1Value() {
		return $this->filter1Value;
	}

	public function setFilter1Value($filter1Value) {
		$this->filter1Value = $filter1Value;
		$this->queryParameters["Filter.1.Value"]=$filter1Value;
	}

	public function getFilter2Key() {
		return $this->filter2Key;
	}

	public function setFilter2Key($filter2Key) {
		$this->filter2Key = $filter2Key;
		$this->queryParameters["Filter.2.Key"]=$filter2Key;
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

	public function getEipAddresses() {
		return $this->eipAddresses;
	}

	public function setEipAddresses($eipAddresses) {
		$this->eipAddresses = $eipAddresses;
		$this->queryParameters["EipAddresses"]=$eipAddresses;
	}

	public function getInstanceName() {
		return $this->instanceName;
	}

	public function setInstanceName($instanceName) {
		$this->instanceName = $instanceName;
		$this->queryParameters["InstanceName"]=$instanceName;
	}

	public function getInstanceIds() {
		return $this->instanceIds;
	}

	public function setInstanceIds($instanceIds) {
		$this->instanceIds = $instanceIds;
		$this->queryParameters["InstanceIds"]=$instanceIds;
	}

	public function getInternetChargeType() {
		return $this->internetChargeType;
	}

	public function setInternetChargeType($internetChargeType) {
		$this->internetChargeType = $internetChargeType;
		$this->queryParameters["InternetChargeType"]=$internetChargeType;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getFilter3Key() {
		return $this->filter3Key;
	}

	public function setFilter3Key($filter3Key) {
		$this->filter3Key = $filter3Key;
		$this->queryParameters["Filter.3.Key"]=$filter3Key;
	}

	public function getInstanceNetworkType() {
		return $this->instanceNetworkType;
	}

	public function setInstanceNetworkType($instanceNetworkType) {
		$this->instanceNetworkType = $instanceNetworkType;
		$this->queryParameters["InstanceNetworkType"]=$instanceNetworkType;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}