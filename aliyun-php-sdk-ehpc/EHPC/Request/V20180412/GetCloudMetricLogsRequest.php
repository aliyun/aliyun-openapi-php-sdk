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
namespace EHPC\Request\V20180412;

class GetCloudMetricLogsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "GetCloudMetricLogs", "ehs", "openAPI");
	}

	private  $aggregationType;

	private  $filter;

	private  $metricCategories;

	private  $metricScope;

	private  $from;

	private  $clusterId;

	private  $to;

	private  $aggregationInterval;

	private  $reverse;

	public function getAggregationType() {
		return $this->aggregationType;
	}

	public function setAggregationType($aggregationType) {
		$this->aggregationType = $aggregationType;
		$this->queryParameters["AggregationType"]=$aggregationType;
	}

	public function getFilter() {
		return $this->filter;
	}

	public function setFilter($filter) {
		$this->filter = $filter;
		$this->queryParameters["Filter"]=$filter;
	}

	public function getMetricCategories() {
		return $this->metricCategories;
	}

	public function setMetricCategories($metricCategories) {
		$this->metricCategories = $metricCategories;
		$this->queryParameters["MetricCategories"]=$metricCategories;
	}

	public function getMetricScope() {
		return $this->metricScope;
	}

	public function setMetricScope($metricScope) {
		$this->metricScope = $metricScope;
		$this->queryParameters["MetricScope"]=$metricScope;
	}

	public function getFrom() {
		return $this->from;
	}

	public function setFrom($from) {
		$this->from = $from;
		$this->queryParameters["From"]=$from;
	}

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->queryParameters["ClusterId"]=$clusterId;
	}

	public function getTo() {
		return $this->to;
	}

	public function setTo($to) {
		$this->to = $to;
		$this->queryParameters["To"]=$to;
	}

	public function getAggregationInterval() {
		return $this->aggregationInterval;
	}

	public function setAggregationInterval($aggregationInterval) {
		$this->aggregationInterval = $aggregationInterval;
		$this->queryParameters["AggregationInterval"]=$aggregationInterval;
	}

	public function getReverse() {
		return $this->reverse;
	}

	public function setReverse($reverse) {
		$this->reverse = $reverse;
		$this->queryParameters["Reverse"]=$reverse;
	}
	
}