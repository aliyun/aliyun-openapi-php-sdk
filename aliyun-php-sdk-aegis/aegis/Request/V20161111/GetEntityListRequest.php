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
namespace aegis\Request\V20161111;

class GetEntityListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("aegis", "2016-11-11", "GetEntityList", "vipaegis", "openAPI");
		$this->setMethod("POST");
	}

	private  $groupId;

	private  $pageSize;

	private  $remark;

	private  $eventType;

	private  $currentPage;

	private  $regionNo;

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getRemark() {
		return $this->remark;
	}

	public function setRemark($remark) {
		$this->remark = $remark;
		$this->queryParameters["Remark"]=$remark;
	}

	public function getEventType() {
		return $this->eventType;
	}

	public function setEventType($eventType) {
		$this->eventType = $eventType;
		$this->queryParameters["EventType"]=$eventType;
	}

	public function getCurrentPage() {
		return $this->currentPage;
	}

	public function setCurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->queryParameters["CurrentPage"]=$currentPage;
	}

	public function getRegionNo() {
		return $this->regionNo;
	}

	public function setRegionNo($regionNo) {
		$this->regionNo = $regionNo;
		$this->queryParameters["RegionNo"]=$regionNo;
	}
	
}