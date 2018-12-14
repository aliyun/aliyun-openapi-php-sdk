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

	private  $preferredBackupPeriod;

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $localLogRetentionHours;

	private  $ownerAccount;

	private  $logBackupFrequency;

	private  $backupLog;

	private  $localLogRetentionSpace;

	private  $ownerId;

	private  $duplication;

	private  $preferredBackupTime;

	private  $backupRetentionPeriod;

	private  $duplicationContent;

	private  $highSpaceUsageProtection;

	private  $dBInstanceId;

	private  $duplicationLocation;

	private  $logBackupRetentionPeriod;

	private  $enableBackupLog;

	private  $backupPolicyMode;

	public function getPreferredBackupPeriod() {
		return $this->preferredBackupPeriod;
	}

	public function setPreferredBackupPeriod($preferredBackupPeriod) {
		$this->preferredBackupPeriod = $preferredBackupPeriod;
		$this->queryParameters["PreferredBackupPeriod"]=$preferredBackupPeriod;
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

	public function getLocalLogRetentionHours() {
		return $this->localLogRetentionHours;
	}

	public function setLocalLogRetentionHours($localLogRetentionHours) {
		$this->localLogRetentionHours = $localLogRetentionHours;
		$this->queryParameters["LocalLogRetentionHours"]=$localLogRetentionHours;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getLogBackupFrequency() {
		return $this->logBackupFrequency;
	}

	public function setLogBackupFrequency($logBackupFrequency) {
		$this->logBackupFrequency = $logBackupFrequency;
		$this->queryParameters["LogBackupFrequency"]=$logBackupFrequency;
	}

	public function getBackupLog() {
		return $this->backupLog;
	}

	public function setBackupLog($backupLog) {
		$this->backupLog = $backupLog;
		$this->queryParameters["BackupLog"]=$backupLog;
	}

	public function getLocalLogRetentionSpace() {
		return $this->localLogRetentionSpace;
	}

	public function setLocalLogRetentionSpace($localLogRetentionSpace) {
		$this->localLogRetentionSpace = $localLogRetentionSpace;
		$this->queryParameters["LocalLogRetentionSpace"]=$localLogRetentionSpace;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getDuplication() {
		return $this->duplication;
	}

	public function setDuplication($duplication) {
		$this->duplication = $duplication;
		$this->queryParameters["Duplication"]=$duplication;
	}

	public function getPreferredBackupTime() {
		return $this->preferredBackupTime;
	}

	public function setPreferredBackupTime($preferredBackupTime) {
		$this->preferredBackupTime = $preferredBackupTime;
		$this->queryParameters["PreferredBackupTime"]=$preferredBackupTime;
	}

	public function getBackupRetentionPeriod() {
		return $this->backupRetentionPeriod;
	}

	public function setBackupRetentionPeriod($backupRetentionPeriod) {
		$this->backupRetentionPeriod = $backupRetentionPeriod;
		$this->queryParameters["BackupRetentionPeriod"]=$backupRetentionPeriod;
	}

	public function getDuplicationContent() {
		return $this->duplicationContent;
	}

	public function setDuplicationContent($duplicationContent) {
		$this->duplicationContent = $duplicationContent;
		$this->queryParameters["DuplicationContent"]=$duplicationContent;
	}

	public function getHighSpaceUsageProtection() {
		return $this->highSpaceUsageProtection;
	}

	public function setHighSpaceUsageProtection($highSpaceUsageProtection) {
		$this->highSpaceUsageProtection = $highSpaceUsageProtection;
		$this->queryParameters["HighSpaceUsageProtection"]=$highSpaceUsageProtection;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getDuplicationLocation() {
		return $this->duplicationLocation;
	}

	public function setDuplicationLocation($duplicationLocation) {
		$this->duplicationLocation = $duplicationLocation;
		$this->queryParameters["DuplicationLocation"]=$duplicationLocation;
	}

	public function getLogBackupRetentionPeriod() {
		return $this->logBackupRetentionPeriod;
	}

	public function setLogBackupRetentionPeriod($logBackupRetentionPeriod) {
		$this->logBackupRetentionPeriod = $logBackupRetentionPeriod;
		$this->queryParameters["LogBackupRetentionPeriod"]=$logBackupRetentionPeriod;
	}

	public function getEnableBackupLog() {
		return $this->enableBackupLog;
	}

	public function setEnableBackupLog($enableBackupLog) {
		$this->enableBackupLog = $enableBackupLog;
		$this->queryParameters["EnableBackupLog"]=$enableBackupLog;
	}

	public function getBackupPolicyMode() {
		return $this->backupPolicyMode;
	}

	public function setBackupPolicyMode($backupPolicyMode) {
		$this->backupPolicyMode = $backupPolicyMode;
		$this->queryParameters["BackupPolicyMode"]=$backupPolicyMode;
	}
	
}