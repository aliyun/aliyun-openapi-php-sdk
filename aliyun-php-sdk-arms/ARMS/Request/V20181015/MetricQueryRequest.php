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
namespace ARMS\Request\V20181015;

class MetricQueryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("ARMS", "2018-10-15", "MetricQuery");
		$this->setMethod("POST");
	}

	private  $iintervalInSec;

	private  $Measuress;

	private  $metric;

	private  $securityToken;

	private  $limit;

	private  $endTime;

	private  $orderBy;

	private  $startTime;

	private  $Filterss;

	private  $Dimensionss;

	private  $order;

	public function getIintervalInSec() {
		return $this->iintervalInSec;
	}

	public function setIintervalInSec($iintervalInSec) {
		$this->iintervalInSec = $iintervalInSec;
		$this->queryParameters["IintervalInSec"]=$iintervalInSec;
	}

	public function getMeasuress() {
		return $this->Measuress;
	}

	public function setMeasuress($Measuress) {
		$this->Measuress = $Measuress;
		for ($i = 0; $i < count($Measuress); $i ++) {	
			$this->queryParameters["Measures.".($i+1)] = $Measuress[$i];
		}
	}

	public function getMetric() {
		return $this->metric;
	}

	public function setMetric($metric) {
		$this->metric = $metric;
		$this->queryParameters["Metric"]=$metric;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getLimit() {
		return $this->limit;
	}

	public function setLimit($limit) {
		$this->limit = $limit;
		$this->queryParameters["Limit"]=$limit;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getOrderBy() {
		return $this->orderBy;
	}

	public function setOrderBy($orderBy) {
		$this->orderBy = $orderBy;
		$this->queryParameters["OrderBy"]=$orderBy;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getFilterss() {
		return $this->Filterss;
	}

	public function setFilterss($Filterss) {
		$this->Filterss = $Filterss;
		for ($i = 0; $i < count($Filterss); $i ++) {	
			$this->queryParameters['Filters.' . ($i + 1) . '.Value'] = $Filterss[$i]['Value'];
			$this->queryParameters['Filters.' . ($i + 1) . '.Key'] = $Filterss[$i]['Key'];

		}
	}

	public function getDimensionss() {
		return $this->Dimensionss;
	}

	public function setDimensionss($Dimensionss) {
		$this->Dimensionss = $Dimensionss;
		for ($i = 0; $i < count($Dimensionss); $i ++) {	
			$this->queryParameters["Dimensions.".($i+1)] = $Dimensionss[$i];
		}
	}

	public function getOrder() {
		return $this->order;
	}

	public function setOrder($order) {
		$this->order = $order;
		$this->queryParameters["Order"]=$order;
	}
	
}