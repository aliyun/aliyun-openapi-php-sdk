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

class CreateLoadBalancerRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Slb", "2014-05-15", "CreateLoadBalancer", "slb", "openAPI");
		$this->setMethod("POST");
	}

	private  $access_key_id;

	private  $loadBalancerSpec;

	private  $resourceOwnerId;

	private  $autoPay;

	private  $resourceOwnerAccount;

	private  $bandwidth;

	private  $clientToken;

	private  $ownerAccount;

	private  $ownerId;

	private  $masterZoneId;

	private  $tags;

	private  $vSwitchId;

	private  $duration;

	private  $resourceGroupId;

	private  $loadBalancerName;

	private  $enableVpcVipFlow;

	private  $internetChargeType;

	private  $vpcId;

	private  $addressType;

	private  $slaveZoneId;

	private  $payType;

	private  $pricingCycle;

	public function getaccess_key_id() {
		return $this->access_key_id;
	}

	public function setaccess_key_id($access_key_id) {
		$this->access_key_id = $access_key_id;
		$this->queryParameters["access_key_id"]=$access_key_id;
	}

	public function getLoadBalancerSpec() {
		return $this->loadBalancerSpec;
	}

	public function setLoadBalancerSpec($loadBalancerSpec) {
		$this->loadBalancerSpec = $loadBalancerSpec;
		$this->queryParameters["LoadBalancerSpec"]=$loadBalancerSpec;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getAutoPay() {
		return $this->autoPay;
	}

	public function setAutoPay($autoPay) {
		$this->autoPay = $autoPay;
		$this->queryParameters["AutoPay"]=$autoPay;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getBandwidth() {
		return $this->bandwidth;
	}

	public function setBandwidth($bandwidth) {
		$this->bandwidth = $bandwidth;
		$this->queryParameters["Bandwidth"]=$bandwidth;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getMasterZoneId() {
		return $this->masterZoneId;
	}

	public function setMasterZoneId($masterZoneId) {
		$this->masterZoneId = $masterZoneId;
		$this->queryParameters["MasterZoneId"]=$masterZoneId;
	}

	public function getTags() {
		return $this->tags;
	}

	public function setTags($tags) {
		$this->tags = $tags;
		$this->queryParameters["Tags"]=$tags;
	}

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getDuration() {
		return $this->duration;
	}

	public function setDuration($duration) {
		$this->duration = $duration;
		$this->queryParameters["Duration"]=$duration;
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

	public function getEnableVpcVipFlow() {
		return $this->enableVpcVipFlow;
	}

	public function setEnableVpcVipFlow($enableVpcVipFlow) {
		$this->enableVpcVipFlow = $enableVpcVipFlow;
		$this->queryParameters["EnableVpcVipFlow"]=$enableVpcVipFlow;
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

	public function getPricingCycle() {
		return $this->pricingCycle;
	}

	public function setPricingCycle($pricingCycle) {
		$this->pricingCycle = $pricingCycle;
		$this->queryParameters["PricingCycle"]=$pricingCycle;
	}
	
}