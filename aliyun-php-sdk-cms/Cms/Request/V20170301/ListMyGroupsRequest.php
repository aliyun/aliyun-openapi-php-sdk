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

class ListMyGroupsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "ListMyGroups", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $selectContactGroups;

	private  $instanceId;

	private  $pageSize;

	private  $keyword;

	private  $type;

	private  $groupName;

	private  $pageNumber;

	private  $bindUrls;

	public function getSelectContactGroups() {
		return $this->selectContactGroups;
	}

	public function setSelectContactGroups($selectContactGroups) {
		$this->selectContactGroups = $selectContactGroups;
		$this->queryParameters["SelectContactGroups"]=$selectContactGroups;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getKeyword() {
		return $this->keyword;
	}

	public function setKeyword($keyword) {
		$this->keyword = $keyword;
		$this->queryParameters["Keyword"]=$keyword;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getGroupName() {
		return $this->groupName;
	}

	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->queryParameters["GroupName"]=$groupName;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getBindUrls() {
		return $this->bindUrls;
	}

	public function setBindUrls($bindUrls) {
		$this->bindUrls = $bindUrls;
		$this->queryParameters["BindUrls"]=$bindUrls;
	}
	
}