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

class UnicomOrderConfirmRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Smartag", "2018-03-13", "UnicomOrderConfirm", "smartag", "openAPI");
		$this->setMethod("POST");
	}

	private  $tmsCode;

	private  $resourceOwnerId;

	private  $OrderItems;

	private  $ownerUserId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $orderPostFee;

	private  $ownerId;

	private  $tmsOrderCode;

	private  $tradeId;

	public function getTmsCode() {
		return $this->tmsCode;
	}

	public function setTmsCode($tmsCode) {
		$this->tmsCode = $tmsCode;
		$this->queryParameters["TmsCode"]=$tmsCode;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getOrderItems() {
		return $this->OrderItems;
	}

	public function setOrderItems($OrderItems) {
		$this->OrderItems = $OrderItems;
		for ($i = 0; $i < count($OrderItems); $i ++) {	
			$this->queryParameters['OrderItem.' . ($i + 1) . '.ScItemName'] = $OrderItems[$i]['ScItemName'];
			$this->queryParameters['OrderItem.' . ($i + 1) . '.ItemAmount'] = $OrderItems[$i]['ItemAmount'];
			for ($j = 0; $j < count($OrderItems[$i]['SnLists']); $j ++) {
				$this->queryParameters['OrderItem.' . ($i + 1) . '.SnList.' . ($j + 1)] = $OrderItems[$i]['SnLists'][$j];
			}
			$this->queryParameters['OrderItem.' . ($i + 1) . '.OrderItemId'] = $OrderItems[$i]['OrderItemId'];
			$this->queryParameters['OrderItem.' . ($i + 1) . '.ScItemCode'] = $OrderItems[$i]['ScItemCode'];
			$this->queryParameters['OrderItem.' . ($i + 1) . '.ItemQuantity'] = $OrderItems[$i]['ItemQuantity'];
			$this->queryParameters['OrderItem.' . ($i + 1) . '.TradeId'] = $OrderItems[$i]['TradeId'];
			$this->queryParameters['OrderItem.' . ($i + 1) . '.TradeItemId'] = $OrderItems[$i]['TradeItemId'];

		}
	}

	public function getOwnerUserId() {
		return $this->ownerUserId;
	}

	public function setOwnerUserId($ownerUserId) {
		$this->ownerUserId = $ownerUserId;
		$this->queryParameters["OwnerUserId"]=$ownerUserId;
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

	public function getOrderPostFee() {
		return $this->orderPostFee;
	}

	public function setOrderPostFee($orderPostFee) {
		$this->orderPostFee = $orderPostFee;
		$this->queryParameters["OrderPostFee"]=$orderPostFee;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTmsOrderCode() {
		return $this->tmsOrderCode;
	}

	public function setTmsOrderCode($tmsOrderCode) {
		$this->tmsOrderCode = $tmsOrderCode;
		$this->queryParameters["TmsOrderCode"]=$tmsOrderCode;
	}

	public function getTradeId() {
		return $this->tradeId;
	}

	public function setTradeId($tradeId) {
		$this->tradeId = $tradeId;
		$this->queryParameters["TradeId"]=$tradeId;
	}
	
}