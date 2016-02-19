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
		parent::__construct("Ecs", "2014-05-26", "DescribeInstances");
	}

	private  $ownerId;

	private  $resourceOwnerAccount;

	private  $resourceOwnerId;

	private  $vpcId;

	private  $vSwitchId;

	private  $zoneId;

	private  $instanceNetworkType;

	private  $securityGroupId;

	private  $instanceIds;

	private  $pageNumber;

	private  $pageSize;

	private  $innerIpAddresses;

	private  $privateIpAddresses;

	private  $publicIpAddresses;

	private  $ownerAccount;

	private  $instanceChargeType;

	private  $internetChargeType;

	private  $instanceName;

	private  $imageId;

	private  $status;

	private  $lockReason;

	private  $filter1Key;

	private  $filter2Key;

	private  $filter3Key;

	private  $filter4Key;

	private  $filter1Value;

	private  $filter2Value;

	private  $filter3Value;

	private  $filter4Value;

	private  $deviceAvailable;

	private  $ioOptimized;

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

	private  $instanceType;

	private  $instanceTypeFamily;

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

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getInstanceNetworkType() {
		return $this->instanceNetworkType;
	}

	public function setInstanceNetworkType($instanceNetworkType) {
		$this->instanceNetworkType = $instanceNetworkType;
		$this->queryParameters["InstanceNetworkType"]=$instanceNetworkType;
	}

	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId = $securityGroupId;
		$this->queryParameters["SecurityGroupId"]=$securityGroupId;
	}

	public function getInstanceIds() {
		return $this->instanceIds;
	}

	public function setInstanceIds($instanceIds) {
		$this->instanceIds = $instanceIds;
		$this->queryParameters["InstanceIds"]=$instanceIds;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getInnerIpAddresses() {
		return $this->innerIpAddresses;
	}

	public function setInnerIpAddresses($innerIpAddresses) {
		$this->innerIpAddresses = $innerIpAddresses;
		$this->queryParameters["InnerIpAddresses"]=$innerIpAddresses;
	}

	public function getPrivateIpAddresses() {
		return $this->privateIpAddresses;
	}

	public function setPrivateIpAddresses($privateIpAddresses) {
		$this->privateIpAddresses = $privateIpAddresses;
		$this->queryParameters["PrivateIpAddresses"]=$privateIpAddresses;
	}

	public function getPublicIpAddresses() {
		return $this->publicIpAddresses;
	}

	public function setPublicIpAddresses($publicIpAddresses) {
		$this->publicIpAddresses = $publicIpAddresses;
		$this->queryParameters["PublicIpAddresses"]=$publicIpAddresses;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getInstanceChargeType() {
		return $this->instanceChargeType;
	}

	public function setInstanceChargeType($instanceChargeType) {
		$this->instanceChargeType = $instanceChargeType;
		$this->queryParameters["InstanceChargeType"]=$instanceChargeType;
	}

	public function getInternetChargeType() {
		return $this->internetChargeType;
	}

	public function setInternetChargeType($internetChargeType) {
		$this->internetChargeType = $internetChargeType;
		$this->queryParameters["InternetChargeType"]=$internetChargeType;
	}

	public function getInstanceName() {
		return $this->instanceName;
	}

	public function setInstanceName($instanceName) {
		$this->instanceName = $instanceName;
		$this->queryParameters["InstanceName"]=$instanceName;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
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
		$this->queryParameters["Filter1Key"]=$filter1Key;
	}

	public function getFilter2Key() {
		return $this->filter2Key;
	}

	public function setFilter2Key($filter2Key) {
		$this->filter2Key = $filter2Key;
		$this->queryParameters["Filter2Key"]=$filter2Key;
	}

	public function getFilter3Key() {
		return $this->filter3Key;
	}

	public function setFilter3Key($filter3Key) {
		$this->filter3Key = $filter3Key;
		$this->queryParameters["Filter3Key"]=$filter3Key;
	}

	public function getFilter4Key() {
		return $this->filter4Key;
	}

	public function setFilter4Key($filter4Key) {
		$this->filter4Key = $filter4Key;
		$this->queryParameters["Filter4Key"]=$filter4Key;
	}

	public function getFilter1Value() {
		return $this->filter1Value;
	}

	public function setFilter1Value($filter1Value) {
		$this->filter1Value = $filter1Value;
		$this->queryParameters["Filter1Value"]=$filter1Value;
	}

	public function getFilter2Value() {
		return $this->filter2Value;
	}

	public function setFilter2Value($filter2Value) {
		$this->filter2Value = $filter2Value;
		$this->queryParameters["Filter2Value"]=$filter2Value;
	}

	public function getFilter3Value() {
		return $this->filter3Value;
	}

	public function setFilter3Value($filter3Value) {
		$this->filter3Value = $filter3Value;
		$this->queryParameters["Filter3Value"]=$filter3Value;
	}

	public function getFilter4Value() {
		return $this->filter4Value;
	}

	public function setFilter4Value($filter4Value) {
		$this->filter4Value = $filter4Value;
		$this->queryParameters["Filter4Value"]=$filter4Value;
	}

	public function getDeviceAvailable() {
		return $this->deviceAvailable;
	}

	public function setDeviceAvailable($deviceAvailable) {
		$this->deviceAvailable = $deviceAvailable;
		$this->queryParameters["DeviceAvailable"]=$deviceAvailable;
	}

	public function getIoOptimized() {
		return $this->ioOptimized;
	}

	public function setIoOptimized($ioOptimized) {
		$this->ioOptimized = $ioOptimized;
		$this->queryParameters["IoOptimized"]=$ioOptimized;
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

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
	}

	public function getInstanceTypeFamily() {
		return $this->instanceTypeFamily;
	}

	public function setInstanceTypeFamily($instanceTypeFamily) {
		$this->instanceTypeFamily = $instanceTypeFamily;
		$this->queryParameters["InstanceTypeFamily"]=$instanceTypeFamily;
	}
	
}