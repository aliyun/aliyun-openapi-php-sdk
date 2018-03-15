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

class DescribeBackupsForSecurityRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "DescribeBackupsForSecurity", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $targetAliBid;

	private  $backupId;

	private  $ownerAccount;

	private  $endTime;

	private  $startTime;

	private  $ownerId;

	private  $pageNumber;

	private  $backupStatus;

	private  $backupLocation;

	private  $targetAliUid;

	private  $pageSize;

	private  $dBInstanceId;

	private  $backupMode;

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

	public function getTargetAliBid() {
		return $this->targetAliBid;
	}

	public function setTargetAliBid($targetAliBid) {
		$this->targetAliBid = $targetAliBid;
		$this->queryParameters["TargetAliBid"]=$targetAliBid;
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

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getBackupStatus() {
		return $this->backupStatus;
	}

	public function setBackupStatus($backupStatus) {
		$this->backupStatus = $backupStatus;
		$this->queryParameters["BackupStatus"]=$backupStatus;
	}

	public function getBackupLocation() {
		return $this->backupLocation;
	}

	public function setBackupLocation($backupLocation) {
		$this->backupLocation = $backupLocation;
		$this->queryParameters["BackupLocation"]=$backupLocation;
	}

	public function getTargetAliUid() {
		return $this->targetAliUid;
	}

	public function setTargetAliUid($targetAliUid) {
		$this->targetAliUid = $targetAliUid;
		$this->queryParameters["TargetAliUid"]=$targetAliUid;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
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
	
}