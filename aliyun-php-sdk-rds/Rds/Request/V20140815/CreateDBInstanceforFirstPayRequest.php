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

class CreateDBInstanceforFirstPayRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "CreateDBInstanceforFirstPay");
	}

	private  $uid;

	private  $bid;

	private  $uidLoginEmail;

	private  $bidLoginEmail;

	private  $engine;

	private  $engineVersion;

	private  $dBInstanceClass;

	private  $dBInstanceStorage;

	private  $dBInstanceNetType;

	private  $characterSetName;

	private  $dBInstanceRemarks;

	private  $clientToken;

	private  $ownerAccount;

	public function getuid() {
		return $this->uid;
	}

	public function setuid($uid) {
		$this->uid = $uid;
		$this->queryParameters["uid"]=$uid;
	}

	public function getbid() {
		return $this->bid;
	}

	public function setbid($bid) {
		$this->bid = $bid;
		$this->queryParameters["bid"]=$bid;
	}

	public function getuidLoginEmail() {
		return $this->uidLoginEmail;
	}

	public function setuidLoginEmail($uidLoginEmail) {
		$this->uidLoginEmail = $uidLoginEmail;
		$this->queryParameters["uidLoginEmail"]=$uidLoginEmail;
	}

	public function getbidLoginEmail() {
		return $this->bidLoginEmail;
	}

	public function setbidLoginEmail($bidLoginEmail) {
		$this->bidLoginEmail = $bidLoginEmail;
		$this->queryParameters["bidLoginEmail"]=$bidLoginEmail;
	}

	public function getEngine() {
		return $this->engine;
	}

	public function setEngine($engine) {
		$this->engine = $engine;
		$this->queryParameters["Engine"]=$engine;
	}

	public function getEngineVersion() {
		return $this->engineVersion;
	}

	public function setEngineVersion($engineVersion) {
		$this->engineVersion = $engineVersion;
		$this->queryParameters["EngineVersion"]=$engineVersion;
	}

	public function getDBInstanceClass() {
		return $this->dBInstanceClass;
	}

	public function setDBInstanceClass($dBInstanceClass) {
		$this->dBInstanceClass = $dBInstanceClass;
		$this->queryParameters["DBInstanceClass"]=$dBInstanceClass;
	}

	public function getDBInstanceStorage() {
		return $this->dBInstanceStorage;
	}

	public function setDBInstanceStorage($dBInstanceStorage) {
		$this->dBInstanceStorage = $dBInstanceStorage;
		$this->queryParameters["DBInstanceStorage"]=$dBInstanceStorage;
	}

	public function getDBInstanceNetType() {
		return $this->dBInstanceNetType;
	}

	public function setDBInstanceNetType($dBInstanceNetType) {
		$this->dBInstanceNetType = $dBInstanceNetType;
		$this->queryParameters["DBInstanceNetType"]=$dBInstanceNetType;
	}

	public function getCharacterSetName() {
		return $this->characterSetName;
	}

	public function setCharacterSetName($characterSetName) {
		$this->characterSetName = $characterSetName;
		$this->queryParameters["CharacterSetName"]=$characterSetName;
	}

	public function getDBInstanceRemarks() {
		return $this->dBInstanceRemarks;
	}

	public function setDBInstanceRemarks($dBInstanceRemarks) {
		$this->dBInstanceRemarks = $dBInstanceRemarks;
		$this->queryParameters["DBInstanceRemarks"]=$dBInstanceRemarks;
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
	
}