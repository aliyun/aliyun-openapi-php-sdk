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
namespace R_kvstore\Request\V20150101;

class CreateInstanceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("R-kvstore", "2015-01-01", "CreateInstance", "redisa", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $nodeType;

	private  $couponNo;

	private  $networkType;

	private  $engineVersion;

	private  $instanceClass;

	private  $capacity;

	private  $password;

	private  $securityToken;

	private  $instanceType;

	private  $businessInfo;

	private  $period;

	private  $resourceOwnerAccount;

	private  $srcDBInstanceId;

	private  $ownerAccount;

	private  $backupId;

	private  $ownerId;

	private  $token;

	private  $vSwitchId;

	private  $instanceName;

	private  $vpcId;

	private  $zoneId;

	private  $chargeType;

	private  $config;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getNodeType() {
		return $this->nodeType;
	}

	public function setNodeType($nodeType) {
		$this->nodeType = $nodeType;
		$this->queryParameters["NodeType"]=$nodeType;
	}

	public function getCouponNo() {
		return $this->couponNo;
	}

	public function setCouponNo($couponNo) {
		$this->couponNo = $couponNo;
		$this->queryParameters["CouponNo"]=$couponNo;
	}

	public function getNetworkType() {
		return $this->networkType;
	}

	public function setNetworkType($networkType) {
		$this->networkType = $networkType;
		$this->queryParameters["NetworkType"]=$networkType;
	}

	public function getEngineVersion() {
		return $this->engineVersion;
	}

	public function setEngineVersion($engineVersion) {
		$this->engineVersion = $engineVersion;
		$this->queryParameters["EngineVersion"]=$engineVersion;
	}

	public function getInstanceClass() {
		return $this->instanceClass;
	}

	public function setInstanceClass($instanceClass) {
		$this->instanceClass = $instanceClass;
		$this->queryParameters["InstanceClass"]=$instanceClass;
	}

	public function getCapacity() {
		return $this->capacity;
	}

	public function setCapacity($capacity) {
		$this->capacity = $capacity;
		$this->queryParameters["Capacity"]=$capacity;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
		$this->queryParameters["Password"]=$password;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getInstanceType() {
		return $this->instanceType;
	}

	public function setInstanceType($instanceType) {
		$this->instanceType = $instanceType;
		$this->queryParameters["InstanceType"]=$instanceType;
	}

	public function getBusinessInfo() {
		return $this->businessInfo;
	}

	public function setBusinessInfo($businessInfo) {
		$this->businessInfo = $businessInfo;
		$this->queryParameters["BusinessInfo"]=$businessInfo;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getSrcDBInstanceId() {
		return $this->srcDBInstanceId;
	}

	public function setSrcDBInstanceId($srcDBInstanceId) {
		$this->srcDBInstanceId = $srcDBInstanceId;
		$this->queryParameters["SrcDBInstanceId"]=$srcDBInstanceId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getBackupId() {
		return $this->backupId;
	}

	public function setBackupId($backupId) {
		$this->backupId = $backupId;
		$this->queryParameters["BackupId"]=$backupId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getToken() {
		return $this->token;
	}

	public function setToken($token) {
		$this->token = $token;
		$this->queryParameters["Token"]=$token;
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

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
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

	public function getConfig() {
		return $this->config;
	}

	public function setConfig($config) {
		$this->config = $config;
		$this->queryParameters["Config"]=$config;
	}
	
}