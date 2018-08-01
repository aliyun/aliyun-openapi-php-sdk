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

class PutMetricAlarmRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "PutMetricAlarm", "cms", "openAPI");
	}

	private  $period;

	private  $webhook;

	private  $contactGroups;

	private  $level;

	private  $subject;

	private  $alertName;

	private  $groupId;

	private  $description;

	private  $resources;

	private  $threshold;

	private  $effectiveInterval;

	private  $groupName;

	private  $filter;

	private  $noEffectiveInterval;

	private  $displayName;

	private  $namespace;

	private  $evaluationCount;

	private  $silenceTime;

	private  $interval;

	private  $metricName;

	private  $deepDive;

	private  $comparisonOperator;

	private  $dimensions;

	private  $statistics;

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getWebhook() {
		return $this->webhook;
	}

	public function setWebhook($webhook) {
		$this->webhook = $webhook;
		$this->queryParameters["Webhook"]=$webhook;
	}

	public function getContactGroups() {
		return $this->contactGroups;
	}

	public function setContactGroups($contactGroups) {
		$this->contactGroups = $contactGroups;
		$this->queryParameters["ContactGroups"]=$contactGroups;
	}

	public function getLevel() {
		return $this->level;
	}

	public function setLevel($level) {
		$this->level = $level;
		$this->queryParameters["Level"]=$level;
	}

	public function getSubject() {
		return $this->subject;
	}

	public function setSubject($subject) {
		$this->subject = $subject;
		$this->queryParameters["Subject"]=$subject;
	}

	public function getAlertName() {
		return $this->alertName;
	}

	public function setAlertName($alertName) {
		$this->alertName = $alertName;
		$this->queryParameters["AlertName"]=$alertName;
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

	public function getResources() {
		return $this->resources;
	}

	public function setResources($resources) {
		$this->resources = $resources;
		$this->queryParameters["Resources"]=$resources;
	}

	public function getThreshold() {
		return $this->threshold;
	}

	public function setThreshold($threshold) {
		$this->threshold = $threshold;
		$this->queryParameters["Threshold"]=$threshold;
	}

	public function getEffectiveInterval() {
		return $this->effectiveInterval;
	}

	public function setEffectiveInterval($effectiveInterval) {
		$this->effectiveInterval = $effectiveInterval;
		$this->queryParameters["EffectiveInterval"]=$effectiveInterval;
	}

	public function getGroupName() {
		return $this->groupName;
	}

	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->queryParameters["GroupName"]=$groupName;
	}

	public function getFilter() {
		return $this->filter;
	}

	public function setFilter($filter) {
		$this->filter = $filter;
		$this->queryParameters["Filter"]=$filter;
	}

	public function getNoEffectiveInterval() {
		return $this->noEffectiveInterval;
	}

	public function setNoEffectiveInterval($noEffectiveInterval) {
		$this->noEffectiveInterval = $noEffectiveInterval;
		$this->queryParameters["NoEffectiveInterval"]=$noEffectiveInterval;
	}

	public function getDisplayName() {
		return $this->displayName;
	}

	public function setDisplayName($displayName) {
		$this->displayName = $displayName;
		$this->queryParameters["DisplayName"]=$displayName;
	}

	public function getNamespace() {
		return $this->namespace;
	}

	public function setNamespace($namespace) {
		$this->namespace = $namespace;
		$this->queryParameters["Namespace"]=$namespace;
	}

	public function getEvaluationCount() {
		return $this->evaluationCount;
	}

	public function setEvaluationCount($evaluationCount) {
		$this->evaluationCount = $evaluationCount;
		$this->queryParameters["EvaluationCount"]=$evaluationCount;
	}

	public function getSilenceTime() {
		return $this->silenceTime;
	}

	public function setSilenceTime($silenceTime) {
		$this->silenceTime = $silenceTime;
		$this->queryParameters["SilenceTime"]=$silenceTime;
	}

	public function getInterval() {
		return $this->interval;
	}

	public function setInterval($interval) {
		$this->interval = $interval;
		$this->queryParameters["Interval"]=$interval;
	}

	public function getMetricName() {
		return $this->metricName;
	}

	public function setMetricName($metricName) {
		$this->metricName = $metricName;
		$this->queryParameters["MetricName"]=$metricName;
	}

	public function getDeepDive() {
		return $this->deepDive;
	}

	public function setDeepDive($deepDive) {
		$this->deepDive = $deepDive;
		$this->queryParameters["DeepDive"]=$deepDive;
	}

	public function getComparisonOperator() {
		return $this->comparisonOperator;
	}

	public function setComparisonOperator($comparisonOperator) {
		$this->comparisonOperator = $comparisonOperator;
		$this->queryParameters["ComparisonOperator"]=$comparisonOperator;
	}

	public function getDimensions() {
		return $this->dimensions;
	}

	public function setDimensions($dimensions) {
		$this->dimensions = $dimensions;
		$this->queryParameters["Dimensions"]=$dimensions;
	}

	public function getStatistics() {
		return $this->statistics;
	}

	public function setStatistics($statistics) {
		$this->statistics = $statistics;
		$this->queryParameters["Statistics"]=$statistics;
	}
	
}