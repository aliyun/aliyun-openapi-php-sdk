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
namespace Drds\Request\V20171016;

class CreateDrdsAccountRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Drds", "2017-10-16", "CreateDrdsAccount");
		$this->setMethod("POST");
	}

	private  $password;

	private  $dbName;

	private  $drdsInstanceId;

	private  $userName;

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
		$this->queryParameters["Password"]=$password;
	}

	public function getDbName() {
		return $this->dbName;
	}

	public function setDbName($dbName) {
		$this->dbName = $dbName;
		$this->queryParameters["DbName"]=$dbName;
	}

	public function getDrdsInstanceId() {
		return $this->drdsInstanceId;
	}

	public function setDrdsInstanceId($drdsInstanceId) {
		$this->drdsInstanceId = $drdsInstanceId;
		$this->queryParameters["DrdsInstanceId"]=$drdsInstanceId;
	}

	public function getUserName() {
		return $this->userName;
	}

	public function setUserName($userName) {
		$this->userName = $userName;
		$this->queryParameters["UserName"]=$userName;
	}
	
}