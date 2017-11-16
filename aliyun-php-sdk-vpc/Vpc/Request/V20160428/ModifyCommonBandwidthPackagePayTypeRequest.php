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
namespace Vpc\Request\V20160428;

class ModifyCommonBandwidthPackagePayTypeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Vpc", "2016-04-28", "ModifyCommonBandwidthPackagePayType", "vpc", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $bandwidthPackageId;

	private  $autoPay;

	private  $resourceOwnerAccount;

	private  $bandwidth;

	private  $ownerAccount;

	private  $ownerId;

	private  $duration;

	private  $kbpsBandwidth;

	private  $resourceUid;

	private  $resourceBid;

	private  $payType;

	private  $pricingCycle;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getBandwidthPackageId() {
		return $this->bandwidthPackageId;
	}

	public function setBandwidthPackageId($bandwidthPackageId) {
		$this->bandwidthPackageId = $bandwidthPackageId;
		$this->queryParameters["BandwidthPackageId"]=$bandwidthPackageId;
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

	public function getDuration() {
		return $this->duration;
	}

	public function setDuration($duration) {
		$this->duration = $duration;
		$this->queryParameters["Duration"]=$duration;
	}

	public function getKbpsBandwidth() {
		return $this->kbpsBandwidth;
	}

	public function setKbpsBandwidth($kbpsBandwidth) {
		$this->kbpsBandwidth = $kbpsBandwidth;
		$this->queryParameters["KbpsBandwidth"]=$kbpsBandwidth;
	}

	public function getResourceUid() {
		return $this->resourceUid;
	}

	public function setResourceUid($resourceUid) {
		$this->resourceUid = $resourceUid;
		$this->queryParameters["ResourceUid"]=$resourceUid;
	}

	public function getResourceBid() {
		return $this->resourceBid;
	}

	public function setResourceBid($resourceBid) {
		$this->resourceBid = $resourceBid;
		$this->queryParameters["ResourceBid"]=$resourceBid;
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