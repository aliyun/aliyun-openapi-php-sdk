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

class ModifyDBInstanceHAConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "ModifyDBInstanceHAConfig", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $syncMode;

	private  $dbInstanceId;

	private  $ownerId;

	private  $hAMode;

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

	public function getSyncMode() {
		return $this->syncMode;
	}

	public function setSyncMode($syncMode) {
		$this->syncMode = $syncMode;
		$this->queryParameters["SyncMode"]=$syncMode;
	}

	public function getDbInstanceId() {
		return $this->dbInstanceId;
	}

	public function setDbInstanceId($dbInstanceId) {
		$this->dbInstanceId = $dbInstanceId;
		$this->queryParameters["DbInstanceId"]=$dbInstanceId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getHAMode() {
		return $this->hAMode;
	}

	public function setHAMode($hAMode) {
		$this->hAMode = $hAMode;
		$this->queryParameters["HAMode"]=$hAMode;
	}
	
}