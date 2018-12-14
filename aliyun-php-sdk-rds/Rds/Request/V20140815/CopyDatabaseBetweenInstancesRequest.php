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

class CopyDatabaseBetweenInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "CopyDatabaseBetweenInstances", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $restoreTime;

	private  $resourceOwnerAccount;

	private  $clientToken;

	private  $backupId;

	private  $ownerAccount;

	private  $ownerId;

	private  $syncUserPrivilege;

	private  $dbNames;

	private  $resourceGroupId;

	private  $targetDBInstanceId;

	private  $dBInstanceId;

	private  $payType;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
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

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getBackupId() {
		return $this->backupId;
	}

	public function setBackupId($backupId) {
		$this->backupId = $backupId;
		$this->queryParameters["BackupId"]=$backupId;
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

	public function getSyncUserPrivilege() {
		return $this->syncUserPrivilege;
	}

	public function setSyncUserPrivilege($syncUserPrivilege) {
		$this->syncUserPrivilege = $syncUserPrivilege;
		$this->queryParameters["SyncUserPrivilege"]=$syncUserPrivilege;
	}

	public function getDbNames() {
		return $this->dbNames;
	}

	public function setDbNames($dbNames) {
		$this->dbNames = $dbNames;
		$this->queryParameters["DbNames"]=$dbNames;
	}

	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId = $resourceGroupId;
		$this->queryParameters["ResourceGroupId"]=$resourceGroupId;
	}

	public function getTargetDBInstanceId() {
		return $this->targetDBInstanceId;
	}

	public function setTargetDBInstanceId($targetDBInstanceId) {
		$this->targetDBInstanceId = $targetDBInstanceId;
		$this->queryParameters["TargetDBInstanceId"]=$targetDBInstanceId;
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
	
}