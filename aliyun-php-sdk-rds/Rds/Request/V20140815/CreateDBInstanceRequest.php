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

class CreateDBInstanceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "CreateDBInstance", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $connectionMode;

	private  $resourceOwnerId;

	private  $dBInstanceStorage;

	private  $systemDBCharset;

	private  $clientToken;

	private  $engineVersion;

	private  $resourceGroupId;

	private  $engine;

	private  $dBInstanceDescription;

	private  $dBInstanceStorageType;

	private  $businessInfo;

	private  $dBInstanceNetType;

	private  $period;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $usedTime;

	private  $dBInstanceClass;

	private  $securityIPList;

	private  $vSwitchId;

	private  $privateIpAddress;

	private  $vPCId;

	private  $tunnelId;

	private  $zoneId;

	private  $payType;

	private  $instanceNetworkType;

	public function getConnectionMode() {
		return $this->connectionMode;
	}

	public function setConnectionMode($connectionMode) {
		$this->connectionMode = $connectionMode;
		$this->queryParameters["ConnectionMode"]=$connectionMode;
	}

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

	public function getSystemDBCharset() {
		return $this->systemDBCharset;
	}

	public function setSystemDBCharset($systemDBCharset) {
		$this->systemDBCharset = $systemDBCharset;
		$this->queryParameters["SystemDBCharset"]=$systemDBCharset;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getEngineVersion() {
		return $this->engineVersion;
	}

	public function setEngineVersion($engineVersion) {
		$this->engineVersion = $engineVersion;
		$this->queryParameters["EngineVersion"]=$engineVersion;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
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

	public function getDBInstanceStorageType() {
		return $this->dBInstanceStorageType;
	}

	public function setDBInstanceStorageType($dBInstanceStorageType) {
		$this->dBInstanceStorageType = $dBInstanceStorageType;
		$this->queryParameters["DBInstanceStorageType"]=$dBInstanceStorageType;
	}

	public function getBusinessInfo() {
		return $this->businessInfo;
	}

	public function setBusinessInfo($businessInfo) {
		$this->businessInfo = $businessInfo;
		$this->queryParameters["BusinessInfo"]=$businessInfo;
	}

	public function getDBInstanceNetType() {
		return $this->dBInstanceNetType;
	}

	public function setDBInstanceNetType($dBInstanceNetType) {
		$this->dBInstanceNetType = $dBInstanceNetType;
		$this->queryParameters["DBInstanceNetType"]=$dBInstanceNetType;
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

	public function getPrivateIpAddress() {
		return $this->privateIpAddress;
	}

	public function setPrivateIpAddress($privateIpAddress) {
		$this->privateIpAddress = $privateIpAddress;
		$this->queryParameters["PrivateIpAddress"]=$privateIpAddress;
	}

	public function getVPCId() {
		return $this->vPCId;
	}

	public function setVPCId($vPCId) {
		$this->vPCId = $vPCId;
		$this->queryParameters["VPCId"]=$vPCId;
	}

	public function getTunnelId() {
		return $this->tunnelId;
	}

	public function setTunnelId($tunnelId) {
		$this->tunnelId = $tunnelId;
		$this->queryParameters["TunnelId"]=$tunnelId;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getPayType() {
		return $this->payType;
	}

	public function setPayType($payType) {
		$this->payType = $payType;
		$this->queryParameters["PayType"]=$payType;
	}

	public function getInstanceNetworkType() {
		return $this->instanceNetworkType;
	}

	public function setInstanceNetworkType($instanceNetworkType) {
		$this->instanceNetworkType = $instanceNetworkType;
		$this->queryParameters["InstanceNetworkType"]=$instanceNetworkType;
	}
	
}