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

class AssignUsersRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "AssignUsers", "ccc", "openAPI");
		$this->setMethod("POST");
	}

	private  $UserRamIds;

	private  $SkillLevels;

	private  $instanceId;

	private  $RoleIds;

	private  $SkillGroupIds;

	public function getUserRamIds() {
		return $this->UserRamIds;
	}

	public function setUserRamIds($UserRamIds) {
		$this->UserRamIds = $UserRamIds;
		for ($i = 0; $i < count($UserRamIds); $i ++) {	
			$this->queryParameters["UserRamId.".($i+1)] = $UserRamIds[$i];
		}
	}

	public function getSkillLevels() {
		return $this->SkillLevels;
	}

	public function setSkillLevels($SkillLevels) {
		$this->SkillLevels = $SkillLevels;
		for ($i = 0; $i < count($SkillLevels); $i ++) {	
			$this->queryParameters["SkillLevel.".($i+1)] = $SkillLevels[$i];
		}
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getRoleIds() {
		return $this->RoleIds;
	}

	public function setRoleIds($RoleIds) {
		$this->RoleIds = $RoleIds;
		for ($i = 0; $i < count($RoleIds); $i ++) {	
			$this->queryParameters["RoleId.".($i+1)] = $RoleIds[$i];
		}
	}

	public function getSkillGroupIds() {
		return $this->SkillGroupIds;
	}

	public function setSkillGroupIds($SkillGroupIds) {
		$this->SkillGroupIds = $SkillGroupIds;
		for ($i = 0; $i < count($SkillGroupIds); $i ++) {	
			$this->queryParameters["SkillGroupId.".($i+1)] = $SkillGroupIds[$i];
		}
	}
	
}