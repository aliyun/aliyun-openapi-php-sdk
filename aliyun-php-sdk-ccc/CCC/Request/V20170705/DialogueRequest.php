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

class DialogueRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "Dialogue", "ccc", "openAPI");
		$this->setMethod("POST");
	}

	private  $callId;

	private  $callingNumber;

	private  $instanceId;

	private  $calledNumber;

	private  $actionParams;

	private  $callType;

	private  $scenarioId;

	private  $taskId;

	private  $utterance;

	public function getCallId() {
		return $this->callId;
	}

	public function setCallId($callId) {
		$this->callId = $callId;
		$this->queryParameters["CallId"]=$callId;
	}

	public function getCallingNumber() {
		return $this->callingNumber;
	}

	public function setCallingNumber($callingNumber) {
		$this->callingNumber = $callingNumber;
		$this->queryParameters["CallingNumber"]=$callingNumber;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getCalledNumber() {
		return $this->calledNumber;
	}

	public function setCalledNumber($calledNumber) {
		$this->calledNumber = $calledNumber;
		$this->queryParameters["CalledNumber"]=$calledNumber;
	}

	public function getActionParams() {
		return $this->actionParams;
	}

	public function setActionParams($actionParams) {
		$this->actionParams = $actionParams;
		$this->queryParameters["ActionParams"]=$actionParams;
	}

	public function getCallType() {
		return $this->callType;
	}

	public function setCallType($callType) {
		$this->callType = $callType;
		$this->queryParameters["CallType"]=$callType;
	}

	public function getScenarioId() {
		return $this->scenarioId;
	}

	public function setScenarioId($scenarioId) {
		$this->scenarioId = $scenarioId;
		$this->queryParameters["ScenarioId"]=$scenarioId;
	}

	public function getTaskId() {
		return $this->taskId;
	}

	public function setTaskId($taskId) {
		$this->taskId = $taskId;
		$this->queryParameters["TaskId"]=$taskId;
	}

	public function getUtterance() {
		return $this->utterance;
	}

	public function setUtterance($utterance) {
		$this->utterance = $utterance;
		$this->queryParameters["Utterance"]=$utterance;
	}
	
}