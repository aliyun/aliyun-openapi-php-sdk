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

class QueryMetricTopRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "QueryMetricTop", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $period;

	private  $metric;

	private  $length;

	private  $project;

	private  $endTime;

	private  $orderby;

	private  $express;

	private  $startTime;

	private  $dimensions;

	private  $orderDesc;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getMetric() {
		return $this->metric;
	}

	public function setMetric($metric) {
		$this->metric = $metric;
		$this->queryParameters["Metric"]=$metric;
	}

	public function getLength() {
		return $this->length;
	}

	public function setLength($length) {
		$this->length = $length;
		$this->queryParameters["Length"]=$length;
	}

	public function getProject() {
		return $this->project;
	}

	public function setProject($project) {
		$this->project = $project;
		$this->queryParameters["Project"]=$project;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getOrderby() {
		return $this->orderby;
	}

	public function setOrderby($orderby) {
		$this->orderby = $orderby;
		$this->queryParameters["Orderby"]=$orderby;
	}

	public function getExpress() {
		return $this->express;
	}

	public function setExpress($express) {
		$this->express = $express;
		$this->queryParameters["Express"]=$express;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getDimensions() {
		return $this->dimensions;
	}

	public function setDimensions($dimensions) {
		$this->dimensions = $dimensions;
		$this->queryParameters["Dimensions"]=$dimensions;
	}

	public function getOrderDesc() {
		return $this->orderDesc;
	}

	public function setOrderDesc($orderDesc) {
		$this->orderDesc = $orderDesc;
		$this->queryParameters["OrderDesc"]=$orderDesc;
	}
	
}