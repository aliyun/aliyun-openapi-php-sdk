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

class GetMyGroupsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "GetMyGroups", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $selectContactGroups;

	private  $instanceId;

	private  $groupId;

	private  $type;

	private  $groupName;

	private  $bindUrl;

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

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
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

	public function getBindUrl() {
		return $this->bindUrl;
	}

	public function setBindUrl($bindUrl) {
		$this->bindUrl = $bindUrl;
		$this->queryParameters["BindUrl"]=$bindUrl;
	}
	
}