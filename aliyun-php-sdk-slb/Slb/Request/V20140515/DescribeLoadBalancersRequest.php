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
namespace Slb\Request\V20140515;

class DescribeLoadBalancersRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Slb", "2014-05-15", "DescribeLoadBalancers", "slb", "openAPI");
		$this->setMethod("POST");
	}

	private  $access_key_id;

	private  $resourceOwnerId;

	private  $address;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $networkType;

	private  $ownerId;

	private  $serverId;

	private  $masterZoneId;

	private  $pageNumber;

	private  $tags;

	private  $serverIntranetAddress;

	private  $vSwitchId;

	private  $resourceGroupId;

	private  $loadBalancerName;

	private  $loadBalancerId;

	private  $internetChargeType;

	private  $vpcId;

	private  $pageSize;

	private  $addressType;

	private  $slaveZoneId;

	private  $payType;

	public function getaccess_key_id() {
		return $this->access_key_id;
	}

	public function setaccess_key_id($access_key_id) {
		$this->access_key_id = $access_key_id;
		$this->queryParameters["access_key_id"]=$access_key_id;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->queryParameters["Address"]=$address;
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

	public function getNetworkType() {
		return $this->networkType;
	}

	public function setNetworkType($networkType) {
		$this->networkType = $networkType;
		$this->queryParameters["NetworkType"]=$networkType;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getServerId() {
		return $this->serverId;
	}

	public function setServerId($serverId) {
		$this->serverId = $serverId;
		$this->queryParameters["ServerId"]=$serverId;
	}

	public function getMasterZoneId() {
		return $this->masterZoneId;
	}

	public function setMasterZoneId($masterZoneId) {
		$this->masterZoneId = $masterZoneId;
		$this->queryParameters["MasterZoneId"]=$masterZoneId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getTags() {
		return $this->tags;
	}

	public function setTags($tags) {
		$this->tags = $tags;
		$this->queryParameters["Tags"]=$tags;
	}

	public function getServerIntranetAddress() {
		return $this->serverIntranetAddress;
	}

	public function setServerIntranetAddress($serverIntranetAddress) {
		$this->serverIntranetAddress = $serverIntranetAddress;
		$this->queryParameters["ServerIntranetAddress"]=$serverIntranetAddress;
	}

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getLoadBalancerName() {
		return $this->loadBalancerName;
	}

	public function setLoadBalancerName($loadBalancerName) {
		$this->loadBalancerName = $loadBalancerName;
		$this->queryParameters["LoadBalancerName"]=$loadBalancerName;
	}

	public function getLoadBalancerId() {
		return $this->loadBalancerId;
	}

	public function setLoadBalancerId($loadBalancerId) {
		$this->loadBalancerId = $loadBalancerId;
		$this->queryParameters["LoadBalancerId"]=$loadBalancerId;
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

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getAddressType() {
		return $this->addressType;
	}

	public function setAddressType($addressType) {
		$this->addressType = $addressType;
		$this->queryParameters["AddressType"]=$addressType;
	}

	public function getSlaveZoneId() {
		return $this->slaveZoneId;
	}

	public function setSlaveZoneId($slaveZoneId) {
		$this->slaveZoneId = $slaveZoneId;
		$this->queryParameters["SlaveZoneId"]=$slaveZoneId;
	}

	public function getPayType() {
		return $this->payType;
	}

	public function setPayType($payType) {
		$this->payType = $payType;
		$this->queryParameters["PayType"]=$payType;
	}
	
}