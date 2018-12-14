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

class ModifyDBInstanceNetworkTypeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "ModifyDBInstanceNetworkType", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $vSwitchId;

	private  $privateIpAddress;

	private  $retainClassic;

	private  $classicExpiredDays;

	private  $vPCId;

	private  $dBInstanceId;

	private  $readWriteSplittingPrivateIpAddress;

	private  $instanceNetworkType;

	private  $readWriteSplittingClassicExpiredDays;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
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

	public function getRetainClassic() {
		return $this->retainClassic;
	}

	public function setRetainClassic($retainClassic) {
		$this->retainClassic = $retainClassic;
		$this->queryParameters["RetainClassic"]=$retainClassic;
	}

	public function getClassicExpiredDays() {
		return $this->classicExpiredDays;
	}

	public function setClassicExpiredDays($classicExpiredDays) {
		$this->classicExpiredDays = $classicExpiredDays;
		$this->queryParameters["ClassicExpiredDays"]=$classicExpiredDays;
	}

	public function getVPCId() {
		return $this->vPCId;
	}

	public function setVPCId($vPCId) {
		$this->vPCId = $vPCId;
		$this->queryParameters["VPCId"]=$vPCId;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getReadWriteSplittingPrivateIpAddress() {
		return $this->readWriteSplittingPrivateIpAddress;
	}

	public function setReadWriteSplittingPrivateIpAddress($readWriteSplittingPrivateIpAddress) {
		$this->readWriteSplittingPrivateIpAddress = $readWriteSplittingPrivateIpAddress;
		$this->queryParameters["ReadWriteSplittingPrivateIpAddress"]=$readWriteSplittingPrivateIpAddress;
	}

	public function getInstanceNetworkType() {
		return $this->instanceNetworkType;
	}

	public function setInstanceNetworkType($instanceNetworkType) {
		$this->instanceNetworkType = $instanceNetworkType;
		$this->queryParameters["InstanceNetworkType"]=$instanceNetworkType;
	}

	public function getReadWriteSplittingClassicExpiredDays() {
		return $this->readWriteSplittingClassicExpiredDays;
	}

	public function setReadWriteSplittingClassicExpiredDays($readWriteSplittingClassicExpiredDays) {
		$this->readWriteSplittingClassicExpiredDays = $readWriteSplittingClassicExpiredDays;
		$this->queryParameters["ReadWriteSplittingClassicExpiredDays"]=$readWriteSplittingClassicExpiredDays;
	}
	
}