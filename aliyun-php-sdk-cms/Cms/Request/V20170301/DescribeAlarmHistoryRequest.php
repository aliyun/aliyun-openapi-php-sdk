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
namespace Cms\Request\V20170301;

class DescribeAlarmHistoryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "DescribeAlarmHistory", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $alertName;

	private  $groupId;

	private  $endTime;

	private  $ruleName;

	private  $startTime;

	private  $ascending;

	private  $onlyCount;

	private  $namespace;

	private  $pageSize;

	private  $state;

	private  $page;

	private  $metricName;

	private  $status;

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

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getRuleName() {
		return $this->ruleName;
	}

	public function setRuleName($ruleName) {
		$this->ruleName = $ruleName;
		$this->queryParameters["RuleName"]=$ruleName;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getAscending() {
		return $this->ascending;
	}

	public function setAscending($ascending) {
		$this->ascending = $ascending;
		$this->queryParameters["Ascending"]=$ascending;
	}

	public function getOnlyCount() {
		return $this->onlyCount;
	}

	public function setOnlyCount($onlyCount) {
		$this->onlyCount = $onlyCount;
		$this->queryParameters["OnlyCount"]=$onlyCount;
	}

	public function getNamespace() {
		return $this->namespace;
	}

	public function setNamespace($namespace) {
		$this->namespace = $namespace;
		$this->queryParameters["Namespace"]=$namespace;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getState() {
		return $this->state;
	}

	public function setState($state) {
		$this->state = $state;
		$this->queryParameters["State"]=$state;
	}

	public function getPage() {
		return $this->page;
	}

	public function setPage($page) {
		$this->page = $page;
		$this->queryParameters["Page"]=$page;
	}

	public function getMetricName() {
		return $this->metricName;
	}

	public function setMetricName($metricName) {
		$this->metricName = $metricName;
		$this->queryParameters["MetricName"]=$metricName;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}