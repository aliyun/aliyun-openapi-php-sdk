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

class StartSqlLogDetailArchiveRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "StartSqlLogDetailArchive", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $sqlType;

	private  $resourceOwnerId;

	private  $minConsume;

	private  $resourceOwnerAccount;

	private  $columns;

	private  $ownerAccount;

	private  $queryKeyword;

	private  $minScanRows;

	private  $endTime;

	private  $startTime;

	private  $ownerId;

	private  $maxConsume;

	private  $threadID;

	private  $hostAddress;

	private  $dBName;

	private  $accountName;

	private  $securityToken;

	private  $dBInstanceId;

	private  $maxScanRows;

	private  $state;

	private  $tableName;

	public function getSqlType() {
		return $this->sqlType;
	}

	public function setSqlType($sqlType) {
		$this->sqlType = $sqlType;
		$this->queryParameters["SqlType"]=$sqlType;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getMinConsume() {
		return $this->minConsume;
	}

	public function setMinConsume($minConsume) {
		$this->minConsume = $minConsume;
		$this->queryParameters["MinConsume"]=$minConsume;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getColumns() {
		return $this->columns;
	}

	public function setColumns($columns) {
		$this->columns = $columns;
		$this->queryParameters["Columns"]=$columns;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getQueryKeyword() {
		return $this->queryKeyword;
	}

	public function setQueryKeyword($queryKeyword) {
		$this->queryKeyword = $queryKeyword;
		$this->queryParameters["QueryKeyword"]=$queryKeyword;
	}

	public function getMinScanRows() {
		return $this->minScanRows;
	}

	public function setMinScanRows($minScanRows) {
		$this->minScanRows = $minScanRows;
		$this->queryParameters["MinScanRows"]=$minScanRows;
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

	public function getMaxConsume() {
		return $this->maxConsume;
	}

	public function setMaxConsume($maxConsume) {
		$this->maxConsume = $maxConsume;
		$this->queryParameters["MaxConsume"]=$maxConsume;
	}

	public function getThreadID() {
		return $this->threadID;
	}

	public function setThreadID($threadID) {
		$this->threadID = $threadID;
		$this->queryParameters["ThreadID"]=$threadID;
	}

	public function getHostAddress() {
		return $this->hostAddress;
	}

	public function setHostAddress($hostAddress) {
		$this->hostAddress = $hostAddress;
		$this->queryParameters["HostAddress"]=$hostAddress;
	}

	public function getDBName() {
		return $this->dBName;
	}

	public function setDBName($dBName) {
		$this->dBName = $dBName;
		$this->queryParameters["DBName"]=$dBName;
	}

	public function getAccountName() {
		return $this->accountName;
	}

	public function setAccountName($accountName) {
		$this->accountName = $accountName;
		$this->queryParameters["AccountName"]=$accountName;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getMaxScanRows() {
		return $this->maxScanRows;
	}

	public function setMaxScanRows($maxScanRows) {
		$this->maxScanRows = $maxScanRows;
		$this->queryParameters["MaxScanRows"]=$maxScanRows;
	}

	public function getState() {
		return $this->state;
	}

	public function setState($state) {
		$this->state = $state;
		$this->queryParameters["State"]=$state;
	}

	public function getTableName() {
		return $this->tableName;
	}

	public function setTableName($tableName) {
		$this->tableName = $tableName;
		$this->queryParameters["TableName"]=$tableName;
	}
	
}