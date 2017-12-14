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

class QueryMetricLastRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "QueryMetricLast", "cms", "openAPI");
	}

	private  $cursor;

	private  $callby_cms_owner;

	private  $resourceOwnerId;

	private  $period;

	private  $length;

	private  $project;

	private  $endTime;

	private  $express;

	private  $startTime;

	private  $metric;

	private  $page;

	private  $dimensions;

	public function getCursor() {
		return $this->cursor;
	}

	public function setCursor($cursor) {
		$this->cursor = $cursor;
		$this->queryParameters["Cursor"]=$cursor;
	}

	public function getcallby_cms_owner() {
		return $this->callby_cms_owner;
	}

	public function setcallby_cms_owner($callby_cms_owner) {
		$this->callby_cms_owner = $callby_cms_owner;
		$this->queryParameters["callby_cms_owner"]=$callby_cms_owner;
	}

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

	public function getMetric() {
		return $this->metric;
	}

	public function setMetric($metric) {
		$this->metric = $metric;
		$this->queryParameters["Metric"]=$metric;
	}

	public function getPage() {
		return $this->page;
	}

	public function setPage($page) {
		$this->page = $page;
		$this->queryParameters["Page"]=$page;
	}

	public function getDimensions() {
		return $this->dimensions;
	}

	public function setDimensions($dimensions) {
		$this->dimensions = $dimensions;
		$this->queryParameters["Dimensions"]=$dimensions;
	}
	
}