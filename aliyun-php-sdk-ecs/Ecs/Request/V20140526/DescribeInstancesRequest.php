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

	private  $tag4Value;

	private  $innerIpAddresses;

	private  $resourceOwnerId;

	private  $tag2Key;

	private  $privateIpAddresses;

	private  $hpcClusterId;

	private  $filter2Value;

	private  $tag3Key;

	private  $keyPairName;

	private  $tag1Value;

	private  $resourceGroupId;

	private  $lockReason;

	private  $filter1Key;

	private  $deviceAvailable;

	private  $filter3Value;

	private  $dryRun;

	private  $tag5Key;

	private  $filter1Value;

	private  $ownerId;

	private  $vSwitchId;

	private  $instanceName;

	private  $instanceIds;

	private  $internetChargeType;

	private  $zoneId;

	private  $tag4Key;

	private  $instanceNetworkType;

	private  $status;

	private  $imageId;

	private  $filter4Value;

	private  $ioOptimized;

	private  $securityGroupId;

	private  $filter4Key;

	private  $pageNumber;

	private  $rdmaIpAddresses;

	private  $pageSize;

	private  $publicIpAddresses;

	private  $instanceType;

	private  $instanceChargeType;

	private  $tag3Value;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $instanceTypeFamily;

	private  $filter2Key;

	private  $tag5Value;

	private  $tag1Key;

	private  $eipAddresses;

	private  $vpcId;

	private  $tag2Value;

	private  $filter3Key;

	public function getTag4Value() {
		return $this->tag4Value;
	}

	public function setTag4Value($tag4Value) {
		$this->tag4Value = $tag4Value;
		$this->queryParameters["Tag.4.Value"]=$tag4Value;
	}

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

	public function getTag2Key() {
		return $this->tag2Key;
	}

	public function setTag2Key($tag2Key) {
		$this->tag2Key = $tag2Key;
		$this->queryParameters["Tag.2.Key"]=$tag2Key;
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

	public function getTag3Key() {
		return $this->tag3Key;
	}

	public function setTag3Key($tag3Key) {
		$this->tag3Key = $tag3Key;
		$this->queryParameters["Tag.3.Key"]=$tag3Key;
	}

	public function getKeyPairName() {
		return $this->keyPairName;
	}

	public function setKeyPairName($keyPairName) {
		$this->keyPairName = $keyPairName;
		$this->queryParameters["KeyPairName"]=$keyPairName;
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

	public function getDeviceAvailable() {
		return $this->deviceAvailable;
	}

	public function setDeviceAvailable($deviceAvailable) {
		$this->deviceAvailable = $deviceAvailable;
		$this->queryParameters["DeviceAvailable"]=$deviceAvailable;
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

	public function getTag5Key() {
		return $this->tag5Key;
	}

	public function setTag5Key($tag5Key) {
		$this->tag5Key = $tag5Key;
		$this->queryParameters["Tag.5.Key"]=$tag5Key;
	}

	public function getFilter1Value() {
		return $this->filter1Value;
	}

	public function setFilter1Value($filter1Value) {
		$this->filter1Value = $filter1Value;
		$this->queryParameters["Filter.1.Value"]=$filter1Value;
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

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
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

	public function getRdmaIpAddresses() {
		return $this->rdmaIpAddresses;
	}

	public function setRdmaIpAddresses($rdmaIpAddresses) {
		$this->rdmaIpAddresses = $rdmaIpAddresses;
		$this->queryParameters["RdmaIpAddresses"]=$rdmaIpAddresses;
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

	public function getFilter2Key() {
		return $this->filter2Key;
	}

	public function setFilter2Key($filter2Key) {
		$this->filter2Key = $filter2Key;
		$this->queryParameters["Filter.2.Key"]=$filter2Key;
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

	public function getEipAddresses() {
		return $this->eipAddresses;
	}

	public function setEipAddresses($eipAddresses) {
		$this->eipAddresses = $eipAddresses;
		$this->queryParameters["EipAddresses"]=$eipAddresses;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getTag2Value() {
		return $this->tag2Value;
	}

	public function setTag2Value($tag2Value) {
		$this->tag2Value = $tag2Value;
		$this->queryParameters["Tag.2.Value"]=$tag2Value;
	}

	public function getFilter3Key() {
		return $this->filter3Key;
	}

	public function setFilter3Key($filter3Key) {
		$this->filter3Key = $filter3Key;
		$this->queryParameters["Filter.3.Key"]=$filter3Key;
	}
	
}