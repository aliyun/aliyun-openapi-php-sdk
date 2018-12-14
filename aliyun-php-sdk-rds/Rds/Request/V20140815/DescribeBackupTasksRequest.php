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

class DescribeBackupTasksRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "DescribeBackupTasks", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $backupJobId;

	private  $resourceOwnerId;

	private  $flag;

	private  $resourceOwnerAccount;

	private  $clientToken;

	private  $ownerAccount;

	private  $dBInstanceId;

	private  $backupMode;

	private  $ownerId;

	private  $backupJobStatus;

	public function getBackupJobId() {
		return $this->backupJobId;
	}

	public function setBackupJobId($backupJobId) {
		$this->backupJobId = $backupJobId;
		$this->queryParameters["BackupJobId"]=$backupJobId;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getFlag() {
		return $this->flag;
	}

	public function setFlag($flag) {
		$this->flag = $flag;
		$this->queryParameters["Flag"]=$flag;
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

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getBackupMode() {
		return $this->backupMode;
	}

	public function setBackupMode($backupMode) {
		$this->backupMode = $backupMode;
		$this->queryParameters["BackupMode"]=$backupMode;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getBackupJobStatus() {
		return $this->backupJobStatus;
	}

	public function setBackupJobStatus($backupJobStatus) {
		$this->backupJobStatus = $backupJobStatus;
		$this->queryParameters["BackupJobStatus"]=$backupJobStatus;
	}
	
}