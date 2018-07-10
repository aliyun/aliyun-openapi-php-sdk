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

class ModifySurveyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "ModifySurvey", "ccc", "openAPI");
		$this->setMethod("POST");
	}

	private  $surveyId;

	private  $instanceId;

	private  $role;

	private  $round;

	private  $flowJson;

	private  $name;

	private  $globalQuestions;

	private  $description;

	private  $corpora;

	private  $speechOptimizationParam;

	private  $scenarioId;

	private  $flowId;

	public function getSurveyId() {
		return $this->surveyId;
	}

	public function setSurveyId($surveyId) {
		$this->surveyId = $surveyId;
		$this->queryParameters["SurveyId"]=$surveyId;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getRole() {
		return $this->role;
	}

	public function setRole($role) {
		$this->role = $role;
		$this->queryParameters["Role"]=$role;
	}

	public function getRound() {
		return $this->round;
	}

	public function setRound($round) {
		$this->round = $round;
		$this->queryParameters["Round"]=$round;
	}

	public function getFlowJson() {
		return $this->flowJson;
	}

	public function setFlowJson($flowJson) {
		$this->flowJson = $flowJson;
		$this->queryParameters["FlowJson"]=$flowJson;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getGlobalQuestions() {
		return $this->globalQuestions;
	}

	public function setGlobalQuestions($globalQuestions) {
		$this->globalQuestions = $globalQuestions;
		$this->queryParameters["GlobalQuestions"]=$globalQuestions;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getCorpora() {
		return $this->corpora;
	}

	public function setCorpora($corpora) {
		$this->corpora = $corpora;
		$this->queryParameters["Corpora"]=$corpora;
	}

	public function getSpeechOptimizationParam() {
		return $this->speechOptimizationParam;
	}

	public function setSpeechOptimizationParam($speechOptimizationParam) {
		$this->speechOptimizationParam = $speechOptimizationParam;
		$this->queryParameters["SpeechOptimizationParam"]=$speechOptimizationParam;
	}

	public function getScenarioId() {
		return $this->scenarioId;
	}

	public function setScenarioId($scenarioId) {
		$this->scenarioId = $scenarioId;
		$this->queryParameters["ScenarioId"]=$scenarioId;
	}

	public function getFlowId() {
		return $this->flowId;
	}

	public function setFlowId($flowId) {
		$this->flowId = $flowId;
		$this->queryParameters["FlowId"]=$flowId;
	}
	
}