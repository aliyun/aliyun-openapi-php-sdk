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
namespace Dds\Request\V20151201;

class ModifyDBInstanceSpecRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dds", "2015-12-01", "ModifyDBInstanceSpec", "dds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $dBInstanceStorage;

	private  $autoPay;

	private  $fromApp;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $couponNo;

	private  $ownerId;

	private  $dBInstanceClass;

	private  $securityToken;

	private  $effectiveTime;

	private  $dBInstanceId;

	private  $businessInfo;

	private  $orderType;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getDBInstanceStorage() {
		return $this->dBInstanceStorage;
	}

	public function setDBInstanceStorage($dBInstanceStorage) {
		$this->dBInstanceStorage = $dBInstanceStorage;
		$this->queryParameters["DBInstanceStorage"]=$dBInstanceStorage;
	}

	public function getAutoPay() {
		return $this->autoPay;
	}

	public function setAutoPay($autoPay) {
		$this->autoPay = $autoPay;
		$this->queryParameters["AutoPay"]=$autoPay;
	}

	public function getFromApp() {
		return $this->fromApp;
	}

	public function setFromApp($fromApp) {
		$this->fromApp = $fromApp;
		$this->queryParameters["FromApp"]=$fromApp;
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

	public function getCouponNo() {
		return $this->couponNo;
	}

	public function setCouponNo($couponNo) {
		$this->couponNo = $couponNo;
		$this->queryParameters["CouponNo"]=$couponNo;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getDBInstanceClass() {
		return $this->dBInstanceClass;
	}

	public function setDBInstanceClass($dBInstanceClass) {
		$this->dBInstanceClass = $dBInstanceClass;
		$this->queryParameters["DBInstanceClass"]=$dBInstanceClass;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getEffectiveTime() {
		return $this->effectiveTime;
	}

	public function setEffectiveTime($effectiveTime) {
		$this->effectiveTime = $effectiveTime;
		$this->queryParameters["EffectiveTime"]=$effectiveTime;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getBusinessInfo() {
		return $this->businessInfo;
	}

	public function setBusinessInfo($businessInfo) {
		$this->businessInfo = $businessInfo;
		$this->queryParameters["BusinessInfo"]=$businessInfo;
	}

	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->queryParameters["OrderType"]=$orderType;
	}
	
}