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

class UpdateMyGroupsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "UpdateMyGroups", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $contactGroups;

	private  $groupId;

	private  $serviceId;

	private  $type;

	private  $groupName;

	private  $bindUrls;

	public function getContactGroups() {
		return $this->contactGroups;
	}

	public function setContactGroups($contactGroups) {
		$this->contactGroups = $contactGroups;
		$this->queryParameters["ContactGroups"]=$contactGroups;
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getServiceId() {
		return $this->serviceId;
	}

	public function setServiceId($serviceId) {
		$this->serviceId = $serviceId;
		$this->queryParameters["ServiceId"]=$serviceId;
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

	public function getBindUrls() {
		return $this->bindUrls;
	}

	public function setBindUrls($bindUrls) {
		$this->bindUrls = $bindUrls;
		$this->queryParameters["BindUrls"]=$bindUrls;
	}
	
}