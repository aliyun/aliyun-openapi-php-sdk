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

class PreCheckBeforeImportDataRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "PreCheckBeforeImportData");
	}

	private  $ownerId;

	private  $resourceOwnerAccount;

	private  $resourceOwnerId;

	private  $clientToken;

	private  $dBInstanceId;

	private  $sourceDatabaseIp;

	private  $sourceDatabasePort;

	private  $sourceDatabaseUserName;

	private  $sourceDatabasePassword;

	private  $importDataType;

	private  $sourceDatabaseDBNames;

	private  $ownerAccount;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getSourceDatabaseIp() {
		return $this->sourceDatabaseIp;
	}

	public function setSourceDatabaseIp($sourceDatabaseIp) {
		$this->sourceDatabaseIp = $sourceDatabaseIp;
		$this->queryParameters["SourceDatabaseIp"]=$sourceDatabaseIp;
	}

	public function getSourceDatabasePort() {
		return $this->sourceDatabasePort;
	}

	public function setSourceDatabasePort($sourceDatabasePort) {
		$this->sourceDatabasePort = $sourceDatabasePort;
		$this->queryParameters["SourceDatabasePort"]=$sourceDatabasePort;
	}

	public function getSourceDatabaseUserName() {
		return $this->sourceDatabaseUserName;
	}

	public function setSourceDatabaseUserName($sourceDatabaseUserName) {
		$this->sourceDatabaseUserName = $sourceDatabaseUserName;
		$this->queryParameters["SourceDatabaseUserName"]=$sourceDatabaseUserName;
	}

	public function getSourceDatabasePassword() {
		return $this->sourceDatabasePassword;
	}

	public function setSourceDatabasePassword($sourceDatabasePassword) {
		$this->sourceDatabasePassword = $sourceDatabasePassword;
		$this->queryParameters["SourceDatabasePassword"]=$sourceDatabasePassword;
	}

	public function getImportDataType() {
		return $this->importDataType;
	}

	public function setImportDataType($importDataType) {
		$this->importDataType = $importDataType;
		$this->queryParameters["ImportDataType"]=$importDataType;
	}

	public function getSourceDatabaseDBNames() {
		return $this->sourceDatabaseDBNames;
	}

	public function setSourceDatabaseDBNames($sourceDatabaseDBNames) {
		$this->sourceDatabaseDBNames = $sourceDatabaseDBNames;
		$this->queryParameters["SourceDatabaseDBNames"]=$sourceDatabaseDBNames;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}
	
}