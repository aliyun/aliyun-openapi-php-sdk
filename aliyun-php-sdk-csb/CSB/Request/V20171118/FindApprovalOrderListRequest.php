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
namespace CSB\Request\V20171118;

class FindApprovalOrderListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CSB", "2017-11-18", "FindApprovalOrderList", "CSB", "openAPI");
		$this->setProtocol("https");
	}

	private  $projectName;

	private  $alias;

	private  $serviceName;

	private  $pageNum;

	private  $serviceId;

	private  $onlyPending;

	public function getProjectName() {
		return $this->projectName;
	}

	public function setProjectName($projectName) {
		$this->projectName = $projectName;
		$this->queryParameters["ProjectName"]=$projectName;
	}

	public function getAlias() {
		return $this->alias;
	}

	public function setAlias($alias) {
		$this->alias = $alias;
		$this->queryParameters["Alias"]=$alias;
	}

	public function getServiceName() {
		return $this->serviceName;
	}

	public function setServiceName($serviceName) {
		$this->serviceName = $serviceName;
		$this->queryParameters["ServiceName"]=$serviceName;
	}

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}

	public function getServiceId() {
		return $this->serviceId;
	}

	public function setServiceId($serviceId) {
		$this->serviceId = $serviceId;
		$this->queryParameters["ServiceId"]=$serviceId;
	}

	public function getOnlyPending() {
		return $this->onlyPending;
	}

	public function setOnlyPending($onlyPending) {
		$this->onlyPending = $onlyPending;
		$this->queryParameters["OnlyPending"]=$onlyPending;
	}
	
}