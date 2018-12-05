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
namespace Ess\Request\V20140828;

class CreateAlarmRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "CreateAlarm", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $metricType;

	private  $period;

	private  $resourceOwnerAccount;

	private  $scalingGroupId;

	private  $groupId;

	private  $description;

	private  $AlarmActions;

	private  $threshold;

	private  $ownerId;

	private  $name;

	private  $evaluationCount;

	private  $metricName;

	private  $comparisonOperator;

	private  $Dimensions;

	private  $statistics;

	public function getMetricType() {
		return $this->metricType;
	}

	public function setMetricType($metricType) {
		$this->metricType = $metricType;
		$this->queryParameters["MetricType"]=$metricType;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getAlarmActions() {
		return $this->AlarmActions;
	}

	public function setAlarmActions($AlarmActions) {
		$this->AlarmActions = $AlarmActions;
		for ($i = 0; $i < count($AlarmActions); $i ++) {	
			$this->queryParameters["AlarmAction.".($i+1)] = $AlarmActions[$i];
		}
	}

	public function getThreshold() {
		return $this->threshold;
	}

	public function setThreshold($threshold) {
		$this->threshold = $threshold;
		$this->queryParameters["Threshold"]=$threshold;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getEvaluationCount() {
		return $this->evaluationCount;
	}

	public function setEvaluationCount($evaluationCount) {
		$this->evaluationCount = $evaluationCount;
		$this->queryParameters["EvaluationCount"]=$evaluationCount;
	}

	public function getMetricName() {
		return $this->metricName;
	}

	public function setMetricName($metricName) {
		$this->metricName = $metricName;
		$this->queryParameters["MetricName"]=$metricName;
	}

	public function getComparisonOperator() {
		return $this->comparisonOperator;
	}

	public function setComparisonOperator($comparisonOperator) {
		$this->comparisonOperator = $comparisonOperator;
		$this->queryParameters["ComparisonOperator"]=$comparisonOperator;
	}

	public function getDimensions() {
		return $this->Dimensions;
	}

	public function setDimensions($Dimensions) {
		$this->Dimensions = $Dimensions;
		for ($i = 0; $i < count($Dimensions); $i ++) {	
			$this->queryParameters['Dimension.' . ($i + 1) . '.DimensionValue'] = $Dimensions[$i]['DimensionValue'];
			$this->queryParameters['Dimension.' . ($i + 1) . '.DimensionKey'] = $Dimensions[$i]['DimensionKey'];

		}
	}

	public function getStatistics() {
		return $this->statistics;
	}

	public function setStatistics($statistics) {
		$this->statistics = $statistics;
		$this->queryParameters["Statistics"]=$statistics;
	}
	
}