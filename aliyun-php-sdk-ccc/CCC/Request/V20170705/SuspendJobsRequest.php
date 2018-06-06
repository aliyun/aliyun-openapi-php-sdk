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
namespace CCC\Request\V20170705;

class SuspendJobsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "SuspendJobs", "ccc", "openAPI");
		$this->setMethod("POST");
	}

	private  $all;

	private  $JobIds;

	private  $instanceId;

	private  $JobReferenceIds;

	private  $groupId;

	private  $scenarioId;

	public function getAll() {
		return $this->all;
	}

	public function setAll($all) {
		$this->all = $all;
		$this->queryParameters["All"]=$all;
	}

	public function getJobIds() {
		return $this->JobIds;
	}

	public function setJobIds($JobIds) {
		$this->JobIds = $JobIds;
		for ($i = 0; $i < count($JobIds); $i ++) {	
			$this->queryParameters["JobId.".($i+1)] = $JobIds[$i];
		}
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getJobReferenceIds() {
		return $this->JobReferenceIds;
	}

	public function setJobReferenceIds($JobReferenceIds) {
		$this->JobReferenceIds = $JobReferenceIds;
		for ($i = 0; $i < count($JobReferenceIds); $i ++) {	
			$this->queryParameters["JobReferenceId.".($i+1)] = $JobReferenceIds[$i];
		}
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getScenarioId() {
		return $this->scenarioId;
	}

	public function setScenarioId($scenarioId) {
		$this->scenarioId = $scenarioId;
		$this->queryParameters["ScenarioId"]=$scenarioId;
	}
	
}