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
namespace Smartag\Request\V20180313;

class CreateSmartAccessGatewayRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Smartag", "2018-03-13", "CreateSmartAccessGateway", "smartag", "openAPI");
		$this->setMethod("POST");
	}

	private  $maxBandWidth;

	private  $resourceOwnerId;

	private  $description;

	private  $receiverTown;

	private  $receiverDistrict;

	private  $receiverAddress;

	private  $buyerMessage;

	private  $hardWareSpec;

	private  $receiverEmail;

	private  $receiverState;

	private  $receiverCity;

	private  $period;

	private  $autoPay;

	private  $receiverMobile;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $receiverPhone;

	private  $receiverName;

	private  $haType;

	private  $name;

	private  $receiverCountry;

	private  $chargeType;

	private  $receiverZip;

	public function getMaxBandWidth() {
		return $this->maxBandWidth;
	}

	public function setMaxBandWidth($maxBandWidth) {
		$this->maxBandWidth = $maxBandWidth;
		$this->queryParameters["MaxBandWidth"]=$maxBandWidth;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getReceiverTown() {
		return $this->receiverTown;
	}

	public function setReceiverTown($receiverTown) {
		$this->receiverTown = $receiverTown;
		$this->queryParameters["ReceiverTown"]=$receiverTown;
	}

	public function getReceiverDistrict() {
		return $this->receiverDistrict;
	}

	public function setReceiverDistrict($receiverDistrict) {
		$this->receiverDistrict = $receiverDistrict;
		$this->queryParameters["ReceiverDistrict"]=$receiverDistrict;
	}

	public function getReceiverAddress() {
		return $this->receiverAddress;
	}

	public function setReceiverAddress($receiverAddress) {
		$this->receiverAddress = $receiverAddress;
		$this->queryParameters["ReceiverAddress"]=$receiverAddress;
	}

	public function getBuyerMessage() {
		return $this->buyerMessage;
	}

	public function setBuyerMessage($buyerMessage) {
		$this->buyerMessage = $buyerMessage;
		$this->queryParameters["BuyerMessage"]=$buyerMessage;
	}

	public function getHardWareSpec() {
		return $this->hardWareSpec;
	}

	public function setHardWareSpec($hardWareSpec) {
		$this->hardWareSpec = $hardWareSpec;
		$this->queryParameters["HardWareSpec"]=$hardWareSpec;
	}

	public function getReceiverEmail() {
		return $this->receiverEmail;
	}

	public function setReceiverEmail($receiverEmail) {
		$this->receiverEmail = $receiverEmail;
		$this->queryParameters["ReceiverEmail"]=$receiverEmail;
	}

	public function getReceiverState() {
		return $this->receiverState;
	}

	public function setReceiverState($receiverState) {
		$this->receiverState = $receiverState;
		$this->queryParameters["ReceiverState"]=$receiverState;
	}

	public function getReceiverCity() {
		return $this->receiverCity;
	}

	public function setReceiverCity($receiverCity) {
		$this->receiverCity = $receiverCity;
		$this->queryParameters["ReceiverCity"]=$receiverCity;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getAutoPay() {
		return $this->autoPay;
	}

	public function setAutoPay($autoPay) {
		$this->autoPay = $autoPay;
		$this->queryParameters["AutoPay"]=$autoPay;
	}

	public function getReceiverMobile() {
		return $this->receiverMobile;
	}

	public function setReceiverMobile($receiverMobile) {
		$this->receiverMobile = $receiverMobile;
		$this->queryParameters["ReceiverMobile"]=$receiverMobile;
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

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getReceiverPhone() {
		return $this->receiverPhone;
	}

	public function setReceiverPhone($receiverPhone) {
		$this->receiverPhone = $receiverPhone;
		$this->queryParameters["ReceiverPhone"]=$receiverPhone;
	}

	public function getReceiverName() {
		return $this->receiverName;
	}

	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->queryParameters["ReceiverName"]=$receiverName;
	}

	public function getHaType() {
		return $this->haType;
	}

	public function setHaType($haType) {
		$this->haType = $haType;
		$this->queryParameters["HaType"]=$haType;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getReceiverCountry() {
		return $this->receiverCountry;
	}

	public function setReceiverCountry($receiverCountry) {
		$this->receiverCountry = $receiverCountry;
		$this->queryParameters["ReceiverCountry"]=$receiverCountry;
	}

	public function getChargeType() {
		return $this->chargeType;
	}

	public function setChargeType($chargeType) {
		$this->chargeType = $chargeType;
		$this->queryParameters["ChargeType"]=$chargeType;
	}

	public function getReceiverZip() {
		return $this->receiverZip;
	}

	public function setReceiverZip($receiverZip) {
		$this->receiverZip = $receiverZip;
		$this->queryParameters["ReceiverZip"]=$receiverZip;
	}
	
}