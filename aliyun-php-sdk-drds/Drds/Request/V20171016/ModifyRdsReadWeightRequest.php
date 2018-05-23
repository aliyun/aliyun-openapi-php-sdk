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

class ModifyRdsReadWeightRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Drds", "2017-10-16", "ModifyRdsReadWeight");
		$this->setMethod("POST");
	}

	private  $instanceNames;

	private  $dbName;

	private  $weights;

	private  $drdsInstanceId;

	public function getInstanceNames() {
		return $this->instanceNames;
	}

	public function setInstanceNames($instanceNames) {
		$this->instanceNames = $instanceNames;
		$this->queryParameters["InstanceNames"]=$instanceNames;
	}

	public function getDbName() {
		return $this->dbName;
	}

	public function setDbName($dbName) {
		$this->dbName = $dbName;
		$this->queryParameters["DbName"]=$dbName;
	}

	public function getWeights() {
		return $this->weights;
	}

	public function setWeights($weights) {
		$this->weights = $weights;
		$this->queryParameters["Weights"]=$weights;
	}

	public function getDrdsInstanceId() {
		return $this->drdsInstanceId;
	}

	public function setDrdsInstanceId($drdsInstanceId) {
		$this->drdsInstanceId = $drdsInstanceId;
		$this->queryParameters["DrdsInstanceId"]=$drdsInstanceId;
	}
	
}