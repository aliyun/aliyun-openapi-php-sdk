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
namespace CCC\Request\V20170705;

class ListPredictiveJobStatusRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "ListPredictiveJobStatus", "ccc", "openAPI");
		$this->setMethod("POST");
	}

	private  $contactName;

	private  $instanceId;

	private  $timeAlignment;

	private  $jobGroupId;

	private  $phoneNumber;

	private  $pageSize;

	private  $endTime;

	private  $startTime;

	private  $pageNumber;

	public function getContactName() {
		return $this->contactName;
	}

	public function setContactName($contactName) {
		$this->contactName = $contactName;
		$this->queryParameters["ContactName"]=$contactName;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getTimeAlignment() {
		return $this->timeAlignment;
	}

	public function setTimeAlignment($timeAlignment) {
		$this->timeAlignment = $timeAlignment;
		$this->queryParameters["TimeAlignment"]=$timeAlignment;
	}

	public function getJobGroupId() {
		return $this->jobGroupId;
	}

	public function setJobGroupId($jobGroupId) {
		$this->jobGroupId = $jobGroupId;
		$this->queryParameters["JobGroupId"]=$jobGroupId;
	}

	public function getPhoneNumber() {
		return $this->phoneNumber;
	}

	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
		$this->queryParameters["PhoneNumber"]=$phoneNumber;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
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

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}
	
}