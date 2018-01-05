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

class CreateNotifyPolicyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "CreateNotifyPolicy", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $policyType;

	private  $alertName;

	private  $endTime;

	private  $startTime;

	private  $dimensions;

	public function getPolicyType() {
		return $this->policyType;
	}

	public function setPolicyType($policyType) {
		$this->policyType = $policyType;
		$this->queryParameters["PolicyType"]=$policyType;
	}

	public function getAlertName() {
		return $this->alertName;
	}

	public function setAlertName($alertName) {
		$this->alertName = $alertName;
		$this->queryParameters["AlertName"]=$alertName;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
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
	
}