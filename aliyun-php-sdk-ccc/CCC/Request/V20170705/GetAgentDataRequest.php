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

class GetAgentDataRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "GetAgentData", "ccc", "openAPI");
		$this->setMethod("POST");
	}

	private  $instanceId;

	private  $startDay;

	private  $endDay;

	private  $pageSize;

	private  $userId;

	private  $pageNumber;

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getStartDay() {
		return $this->startDay;
	}

	public function setStartDay($startDay) {
		$this->startDay = $startDay;
		$this->queryParameters["StartDay"]=$startDay;
	}

	public function getEndDay() {
		return $this->endDay;
	}

	public function setEndDay($endDay) {
		$this->endDay = $endDay;
		$this->queryParameters["EndDay"]=$endDay;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getUserId() {
		return $this->userId;
	}

	public function setUserId($userId) {
		$this->userId = $userId;
		$this->queryParameters["UserId"]=$userId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}
	
}