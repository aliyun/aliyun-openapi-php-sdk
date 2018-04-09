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

class TaskConfigListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "TaskConfigList", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $groupId;

	private  $pageSize;

	private  $taskName;

	private  $id;

	private  $pageNumber;

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

	public function getTaskName() {
		return $this->taskName;
	}

	public function setTaskName($taskName) {
		$this->taskName = $taskName;
		$this->queryParameters["TaskName"]=$taskName;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
		$this->queryParameters["Id"]=$id;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}
	
}