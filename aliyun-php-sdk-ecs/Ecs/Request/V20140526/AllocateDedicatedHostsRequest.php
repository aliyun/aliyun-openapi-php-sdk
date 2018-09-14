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

class AllocateDedicatedHostsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "AllocateDedicatedHosts", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $clientToken;

	private  $description;

	private  $resourceGroupId;

	private  $actionOnMaintenance;

	private  $Tags;

	private  $dedicatedHostType;

	private  $autoRenewPeriod;

	private  $period;

	private  $quantity;

	private  $dedicatedHostName;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $autoReleaseTime;

	private  $ownerId;

	private  $periodUnit;

	private  $autoRenew;

	private  $networkAttributesSlbUdpTimeout;

	private  $zoneId;

	private  $chargeType;

	private  $networkAttributesUdpTimeout;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getActionOnMaintenance() {
		return $this->actionOnMaintenance;
	}

	public function setActionOnMaintenance($actionOnMaintenance) {
		$this->actionOnMaintenance = $actionOnMaintenance;
		$this->queryParameters["ActionOnMaintenance"]=$actionOnMaintenance;
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

	public function getDedicatedHostType() {
		return $this->dedicatedHostType;
	}

	public function setDedicatedHostType($dedicatedHostType) {
		$this->dedicatedHostType = $dedicatedHostType;
		$this->queryParameters["DedicatedHostType"]=$dedicatedHostType;
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

	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->queryParameters["Quantity"]=$quantity;
	}

	public function getDedicatedHostName() {
		return $this->dedicatedHostName;
	}

	public function setDedicatedHostName($dedicatedHostName) {
		$this->dedicatedHostName = $dedicatedHostName;
		$this->queryParameters["DedicatedHostName"]=$dedicatedHostName;
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

	public function getAutoReleaseTime() {
		return $this->autoReleaseTime;
	}

	public function setAutoReleaseTime($autoReleaseTime) {
		$this->autoReleaseTime = $autoReleaseTime;
		$this->queryParameters["AutoReleaseTime"]=$autoReleaseTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPeriodUnit() {
		return $this->periodUnit;
	}

	public function setPeriodUnit($periodUnit) {
		$this->periodUnit = $periodUnit;
		$this->queryParameters["PeriodUnit"]=$periodUnit;
	}

	public function getAutoRenew() {
		return $this->autoRenew;
	}

	public function setAutoRenew($autoRenew) {
		$this->autoRenew = $autoRenew;
		$this->queryParameters["AutoRenew"]=$autoRenew;
	}

	public function getNetworkAttributesSlbUdpTimeout() {
		return $this->networkAttributesSlbUdpTimeout;
	}

	public function setNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout) {
		$this->networkAttributesSlbUdpTimeout = $networkAttributesSlbUdpTimeout;
		$this->queryParameters["NetworkAttributes.SlbUdpTimeout"]=$networkAttributesSlbUdpTimeout;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getChargeType() {
		return $this->chargeType;
	}

	public function setChargeType($chargeType) {
		$this->chargeType = $chargeType;
		$this->queryParameters["ChargeType"]=$chargeType;
	}

	public function getNetworkAttributesUdpTimeout() {
		return $this->networkAttributesUdpTimeout;
	}

	public function setNetworkAttributesUdpTimeout($networkAttributesUdpTimeout) {
		$this->networkAttributesUdpTimeout = $networkAttributesUdpTimeout;
		$this->queryParameters["NetworkAttributes.UdpTimeout"]=$networkAttributesUdpTimeout;
	}
	
}