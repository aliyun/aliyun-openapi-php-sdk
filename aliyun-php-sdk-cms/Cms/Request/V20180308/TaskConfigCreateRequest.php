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
namespace Cms\Request\V20180308;

class TaskConfigCreateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "TaskConfigCreate", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $InstanceLists;

	private  $jsonData;

	private  $taskType;

	private  $taskScope;

	private  $alertConfig;

	private  $groupId;

	private  $taskName;

	private  $groupName;

	public function getInstanceLists() {
		return $this->InstanceLists;
	}

	public function setInstanceLists($InstanceLists) {
		$this->InstanceLists = $InstanceLists;
		for ($i = 0; $i < count($InstanceLists); $i ++) {	
			$this->queryParameters["InstanceList.".($i+1)] = $InstanceLists[$i];
		}
	}

	public function getJsonData() {
		return $this->jsonData;
	}

	public function setJsonData($jsonData) {
		$this->jsonData = $jsonData;
		$this->queryParameters["JsonData"]=$jsonData;
	}

	public function getTaskType() {
		return $this->taskType;
	}

	public function setTaskType($taskType) {
		$this->taskType = $taskType;
		$this->queryParameters["TaskType"]=$taskType;
	}

	public function getTaskScope() {
		return $this->taskScope;
	}

	public function setTaskScope($taskScope) {
		$this->taskScope = $taskScope;
		$this->queryParameters["TaskScope"]=$taskScope;
	}

	public function getAlertConfig() {
		return $this->alertConfig;
	}

	public function setAlertConfig($alertConfig) {
		$this->alertConfig = $alertConfig;
		$this->queryParameters["AlertConfig"]=$alertConfig;
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getTaskName() {
		return $this->taskName;
	}

	public function setTaskName($taskName) {
		$this->taskName = $taskName;
		$this->queryParameters["TaskName"]=$taskName;
	}

	public function getGroupName() {
		return $this->groupName;
	}

	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->queryParameters["GroupName"]=$groupName;
	}
	
}