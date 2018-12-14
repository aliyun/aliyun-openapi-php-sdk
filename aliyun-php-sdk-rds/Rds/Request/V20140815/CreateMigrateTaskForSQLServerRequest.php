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

class CreateMigrateTaskForSQLServerRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "CreateMigrateTaskForSQLServer", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $taskType;

	private  $dBName;

	private  $resourceOwnerAccount;

	private  $isOnlineDB;

	private  $dBInstanceId;

	private  $ownerId;

	private  $oSSUrls;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getTaskType() {
		return $this->taskType;
	}

	public function setTaskType($taskType) {
		$this->taskType = $taskType;
		$this->queryParameters["TaskType"]=$taskType;
	}

	public function getDBName() {
		return $this->dBName;
	}

	public function setDBName($dBName) {
		$this->dBName = $dBName;
		$this->queryParameters["DBName"]=$dBName;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getIsOnlineDB() {
		return $this->isOnlineDB;
	}

	public function setIsOnlineDB($isOnlineDB) {
		$this->isOnlineDB = $isOnlineDB;
		$this->queryParameters["IsOnlineDB"]=$isOnlineDB;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getOSSUrls() {
		return $this->oSSUrls;
	}

	public function setOSSUrls($oSSUrls) {
		$this->oSSUrls = $oSSUrls;
		$this->queryParameters["OSSUrls"]=$oSSUrls;
	}
	
}