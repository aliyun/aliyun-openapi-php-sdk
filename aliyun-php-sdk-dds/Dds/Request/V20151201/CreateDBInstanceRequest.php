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

class CreateDBInstanceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dds", "2015-12-01", "CreateDBInstance", "dds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $dBInstanceStorage;

	private  $clientToken;

	private  $couponNo;

	private  $engineVersion;

	private  $networkType;

	private  $replicationFactor;

	private  $storageEngine;

	private  $securityToken;

	private  $engine;

	private  $dBInstanceDescription;

	private  $businessInfo;

	private  $period;

	private  $restoreTime;

	private  $resourceOwnerAccount;

	private  $srcDBInstanceId;

	private  $ownerAccount;

	private  $backupId;

	private  $ownerId;

	private  $dBInstanceClass;

	private  $securityIPList;

	private  $vSwitchId;

	private  $accountPassword;

	private  $autoRenew;

	private  $vpcId;

	private  $zoneId;

	private  $chargeType;

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

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getCouponNo() {
		return $this->couponNo;
	}

	public function setCouponNo($couponNo) {
		$this->couponNo = $couponNo;
		$this->queryParameters["CouponNo"]=$couponNo;
	}

	public function getEngineVersion() {
		return $this->engineVersion;
	}

	public function setEngineVersion($engineVersion) {
		$this->engineVersion = $engineVersion;
		$this->queryParameters["EngineVersion"]=$engineVersion;
	}

	public function getNetworkType() {
		return $this->networkType;
	}

	public function setNetworkType($networkType) {
		$this->networkType = $networkType;
		$this->queryParameters["NetworkType"]=$networkType;
	}

	public function getReplicationFactor() {
		return $this->replicationFactor;
	}

	public function setReplicationFactor($replicationFactor) {
		$this->replicationFactor = $replicationFactor;
		$this->queryParameters["ReplicationFactor"]=$replicationFactor;
	}

	public function getStorageEngine() {
		return $this->storageEngine;
	}

	public function setStorageEngine($storageEngine) {
		$this->storageEngine = $storageEngine;
		$this->queryParameters["StorageEngine"]=$storageEngine;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getEngine() {
		return $this->engine;
	}

	public function setEngine($engine) {
		$this->engine = $engine;
		$this->queryParameters["Engine"]=$engine;
	}

	public function getDBInstanceDescription() {
		return $this->dBInstanceDescription;
	}

	public function setDBInstanceDescription($dBInstanceDescription) {
		$this->dBInstanceDescription = $dBInstanceDescription;
		$this->queryParameters["DBInstanceDescription"]=$dBInstanceDescription;
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

	public function getRestoreTime() {
		return $this->restoreTime;
	}

	public function setRestoreTime($restoreTime) {
		$this->restoreTime = $restoreTime;
		$this->queryParameters["RestoreTime"]=$restoreTime;
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

	public function getDBInstanceClass() {
		return $this->dBInstanceClass;
	}

	public function setDBInstanceClass($dBInstanceClass) {
		$this->dBInstanceClass = $dBInstanceClass;
		$this->queryParameters["DBInstanceClass"]=$dBInstanceClass;
	}

	public function getSecurityIPList() {
		return $this->securityIPList;
	}

	public function setSecurityIPList($securityIPList) {
		$this->securityIPList = $securityIPList;
		$this->queryParameters["SecurityIPList"]=$securityIPList;
	}

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getAccountPassword() {
		return $this->accountPassword;
	}

	public function setAccountPassword($accountPassword) {
		$this->accountPassword = $accountPassword;
		$this->queryParameters["AccountPassword"]=$accountPassword;
	}

	public function getAutoRenew() {
		return $this->autoRenew;
	}

	public function setAutoRenew($autoRenew) {
		$this->autoRenew = $autoRenew;
		$this->queryParameters["AutoRenew"]=$autoRenew;
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
	
}