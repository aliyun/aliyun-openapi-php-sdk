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

	private  $address;

	private  $ispCity;

	private  $options;

	private  $taskName;

	private  $interval;

	private  $alertRule;

	private  $taskId;

	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->queryParameters["Address"]=$address;
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

	public function getTaskName() {
		return $this->taskName;
	}

	public function setTaskName($taskName) {
		$this->taskName = $taskName;
		$this->queryParameters["TaskName"]=$taskName;
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