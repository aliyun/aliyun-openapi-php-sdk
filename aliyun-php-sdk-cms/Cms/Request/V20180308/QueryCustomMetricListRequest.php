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

class QueryCustomMetricListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "QueryCustomMetricList", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $size;

	private  $groupId;

	private  $page;

	private  $metricName;

	private  $dimension;

	private  $md5;

	public function getSize() {
		return $this->size;
	}

	public function setSize($size) {
		$this->size = $size;
		$this->queryParameters["Size"]=$size;
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
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

	public function getDimension() {
		return $this->dimension;
	}

	public function setDimension($dimension) {
		$this->dimension = $dimension;
		$this->queryParameters["Dimension"]=$dimension;
	}

	public function getMd5() {
		return $this->md5;
	}

	public function setMd5($md5) {
		$this->md5 = $md5;
		$this->queryParameters["Md5"]=$md5;
	}
	
}