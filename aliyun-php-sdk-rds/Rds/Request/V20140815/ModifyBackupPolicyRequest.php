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

class ModifyBackupPolicyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "ModifyBackupPolicy", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $preferredBackupTime;

	private  $preferredBackupPeriod;

	private  $backupRetentionPeriod;

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $dBInstanceId;

	private  $backupLog;

	private  $ownerId;

	private  $logBackupRetentionPeriod;

	public function getPreferredBackupTime() {
		return $this->preferredBackupTime;
	}

	public function setPreferredBackupTime($preferredBackupTime) {
		$this->preferredBackupTime = $preferredBackupTime;
		$this->queryParameters["PreferredBackupTime"]=$preferredBackupTime;
	}

	public function getPreferredBackupPeriod() {
		return $this->preferredBackupPeriod;
	}

	public function setPreferredBackupPeriod($preferredBackupPeriod) {
		$this->preferredBackupPeriod = $preferredBackupPeriod;
		$this->queryParameters["PreferredBackupPeriod"]=$preferredBackupPeriod;
	}

	public function getBackupRetentionPeriod() {
		return $this->backupRetentionPeriod;
	}

	public function setBackupRetentionPeriod($backupRetentionPeriod) {
		$this->backupRetentionPeriod = $backupRetentionPeriod;
		$this->queryParameters["BackupRetentionPeriod"]=$backupRetentionPeriod;
	}

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

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getBackupLog() {
		return $this->backupLog;
	}

	public function setBackupLog($backupLog) {
		$this->backupLog = $backupLog;
		$this->queryParameters["BackupLog"]=$backupLog;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getLogBackupRetentionPeriod() {
		return $this->logBackupRetentionPeriod;
	}

	public function setLogBackupRetentionPeriod($logBackupRetentionPeriod) {
		$this->logBackupRetentionPeriod = $logBackupRetentionPeriod;
		$this->queryParameters["LogBackupRetentionPeriod"]=$logBackupRetentionPeriod;
	}
	
}