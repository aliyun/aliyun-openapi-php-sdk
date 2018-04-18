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

class CreateSkillGroupRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "CreateSkillGroup", "ccc", "openAPI");
		$this->setMethod("POST");
	}

	private  $SkillLevels;

	private  $instanceId;

	private  $OutboundPhoneNumberIds;

	private  $name;

	private  $description;

	private  $UserIds;

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

	public function getOutboundPhoneNumberIds() {
		return $this->OutboundPhoneNumberIds;
	}

	public function setOutboundPhoneNumberIds($OutboundPhoneNumberIds) {
		$this->OutboundPhoneNumberIds = $OutboundPhoneNumberIds;
		for ($i = 0; $i < count($OutboundPhoneNumberIds); $i ++) {	
			$this->queryParameters["OutboundPhoneNumberId.".($i+1)] = $OutboundPhoneNumberIds[$i];
		}
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getUserIds() {
		return $this->UserIds;
	}

	public function setUserIds($UserIds) {
		$this->UserIds = $UserIds;
		for ($i = 0; $i < count($UserIds); $i ++) {	
			$this->queryParameters["UserId.".($i+1)] = $UserIds[$i];
		}
	}
	
}