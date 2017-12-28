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

class FindApproveServiceListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CSB", "2017-11-18", "FindApproveServiceList", "CSB", "openAPI");
		$this->setProtocol("https");
	}

	private  $projectName;

	private  $approveLevel;

	private  $showDelService;

	private  $csbId;

	private  $alias;

	private  $serviceName;

	public function getprojectName() {
		return $this->projectName;
	}

	public function setprojectName($projectName) {
		$this->projectName = $projectName;
		$this->queryParameters["projectName"]=$projectName;
	}

	public function getapproveLevel() {
		return $this->approveLevel;
	}

	public function setapproveLevel($approveLevel) {
		$this->approveLevel = $approveLevel;
		$this->queryParameters["approveLevel"]=$approveLevel;
	}

	public function getshowDelService() {
		return $this->showDelService;
	}

	public function setshowDelService($showDelService) {
		$this->showDelService = $showDelService;
		$this->queryParameters["showDelService"]=$showDelService;
	}

	public function getcsbId() {
		return $this->csbId;
	}

	public function setcsbId($csbId) {
		$this->csbId = $csbId;
		$this->queryParameters["csbId"]=$csbId;
	}

	public function getalias() {
		return $this->alias;
	}

	public function setalias($alias) {
		$this->alias = $alias;
		$this->queryParameters["alias"]=$alias;
	}

	public function getserviceName() {
		return $this->serviceName;
	}

	public function setserviceName($serviceName) {
		$this->serviceName = $serviceName;
		$this->queryParameters["serviceName"]=$serviceName;
	}
	
}