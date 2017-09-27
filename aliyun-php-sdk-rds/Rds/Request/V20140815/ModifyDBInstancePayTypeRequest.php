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
namespace Rds\Request\V20140815;

class ModifyDBInstancePayTypeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "ModifyDBInstancePayType", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $period;

	private  $agentId;

	private  $autoPay;

	private  $resourceOwnerAccount;

	private  $clientToken;

	private  $resource;

	private  $ownerAccount;

	private  $ownerId;

	private  $usedTime;

	private  $dBInstanceId;

	private  $payType;

	private  $businessInfo;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getAgentId() {
		return $this->agentId;
	}

	public function setAgentId($agentId) {
		$this->agentId = $agentId;
		$this->queryParameters["AgentId"]=$agentId;
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

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getResource() {
		return $this->resource;
	}

	public function setResource($resource) {
		$this->resource = $resource;
		$this->queryParameters["Resource"]=$resource;
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

	public function getUsedTime() {
		return $this->usedTime;
	}

	public function setUsedTime($usedTime) {
		$this->usedTime = $usedTime;
		$this->queryParameters["UsedTime"]=$usedTime;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getPayType() {
		return $this->payType;
	}

	public function setPayType($payType) {
		$this->payType = $payType;
		$this->queryParameters["PayType"]=$payType;
	}

	public function getBusinessInfo() {
		return $this->businessInfo;
	}

	public function setBusinessInfo($businessInfo) {
		$this->businessInfo = $businessInfo;
		$this->queryParameters["BusinessInfo"]=$businessInfo;
	}
	
}