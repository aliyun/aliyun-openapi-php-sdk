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

class ModifyTaskRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "ModifyTask", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $reportProject;

	private  $taskType;

	private  $address;

	private  $alertName;

	private  $ip;

	private  $agentGroup;

	private  $taskName;

	private  $endTime;

	private  $taskState;

	private  $clientIds;

	private  $alertInfo;

	private  $agentType;

	private  $ispCity;

	private  $options;

	private  $interval;

	private  $alertRule;

	private  $taskId;

	public function getReportProject() {
		return $this->reportProject;
	}

	public function setReportProject($reportProject) {
		$this->reportProject = $reportProject;
		$this->queryParameters["ReportProject"]=$reportProject;
	}

	public function getTaskType() {
		return $this->taskType;
	}

	public function setTaskType($taskType) {
		$this->taskType = $taskType;
		$this->queryParameters["TaskType"]=$taskType;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->queryParameters["Address"]=$address;
	}

	public function getAlertName() {
		return $this->alertName;
	}

	public function setAlertName($alertName) {
		$this->alertName = $alertName;
		$this->queryParameters["AlertName"]=$alertName;
	}

	public function getIp() {
		return $this->ip;
	}

	public function setIp($ip) {
		$this->ip = $ip;
		$this->queryParameters["Ip"]=$ip;
	}

	public function getAgentGroup() {
		return $this->agentGroup;
	}

	public function setAgentGroup($agentGroup) {
		$this->agentGroup = $agentGroup;
		$this->queryParameters["AgentGroup"]=$agentGroup;
	}

	public function getTaskName() {
		return $this->taskName;
	}

	public function setTaskName($taskName) {
		$this->taskName = $taskName;
		$this->queryParameters["TaskName"]=$taskName;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getTaskState() {
		return $this->taskState;
	}

	public function setTaskState($taskState) {
		$this->taskState = $taskState;
		$this->queryParameters["TaskState"]=$taskState;
	}

	public function getClientIds() {
		return $this->clientIds;
	}

	public function setClientIds($clientIds) {
		$this->clientIds = $clientIds;
		$this->queryParameters["ClientIds"]=$clientIds;
	}

	public function getAlertInfo() {
		return $this->alertInfo;
	}

	public function setAlertInfo($alertInfo) {
		$this->alertInfo = $alertInfo;
		$this->queryParameters["AlertInfo"]=$alertInfo;
	}

	public function getAgentType() {
		return $this->agentType;
	}

	public function setAgentType($agentType) {
		$this->agentType = $agentType;
		$this->queryParameters["AgentType"]=$agentType;
	}

	public function getIspCity() {
		return $this->ispCity;
	}

	public function setIspCity($ispCity) {
		$this->ispCity = $ispCity;
		$this->queryParameters["IspCity"]=$ispCity;
	}

	public function getOptions() {
		return $this->options;
	}

	public function setOptions($options) {
		$this->options = $options;
		$this->queryParameters["Options"]=$options;
	}

	public function getInterval() {
		return $this->interval;
	}

	public function setInterval($interval) {
		$this->interval = $interval;
		$this->queryParameters["Interval"]=$interval;
	}

	public function getAlertRule() {
		return $this->alertRule;
	}

	public function setAlertRule($alertRule) {
		$this->alertRule = $alertRule;
		$this->queryParameters["AlertRule"]=$alertRule;
	}

	public function getTaskId() {
		return $this->taskId;
	}

	public function setTaskId($taskId) {
		$this->taskId = $taskId;
		$this->queryParameters["TaskId"]=$taskId;
	}
	
}