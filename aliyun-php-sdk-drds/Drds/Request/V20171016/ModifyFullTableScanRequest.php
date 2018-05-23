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

class ModifyFullTableScanRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Drds", "2017-10-16", "ModifyFullTableScan");
		$this->setMethod("POST");
	}

	private  $dbName;

	private  $tableNames;

	private  $drdsInstanceId;

	private  $fullTableScan;

	public function getDbName() {
		return $this->dbName;
	}

	public function setDbName($dbName) {
		$this->dbName = $dbName;
		$this->queryParameters["DbName"]=$dbName;
	}

	public function getTableNames() {
		return $this->tableNames;
	}

	public function setTableNames($tableNames) {
		$this->tableNames = $tableNames;
		$this->queryParameters["TableNames"]=$tableNames;
	}

	public function getDrdsInstanceId() {
		return $this->drdsInstanceId;
	}

	public function setDrdsInstanceId($drdsInstanceId) {
		$this->drdsInstanceId = $drdsInstanceId;
		$this->queryParameters["DrdsInstanceId"]=$drdsInstanceId;
	}

	public function getFullTableScan() {
		return $this->fullTableScan;
	}

	public function setFullTableScan($fullTableScan) {
		$this->fullTableScan = $fullTableScan;
		$this->queryParameters["FullTableScan"]=$fullTableScan;
	}
	
}