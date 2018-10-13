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
namespace Iot\Request\V20180120;

class CreateDeviceGroupRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Iot", "2018-01-20", "CreateDeviceGroup");
		$this->setMethod("POST");
	}

	private  $groupDesc;

	private  $superGroupId;

	private  $groupName;

	public function getGroupDesc() {
		return $this->groupDesc;
	}

	public function setGroupDesc($groupDesc) {
		$this->groupDesc = $groupDesc;
		$this->queryParameters["GroupDesc"]=$groupDesc;
	}

	public function getSuperGroupId() {
		return $this->superGroupId;
	}

	public function setSuperGroupId($superGroupId) {
		$this->superGroupId = $superGroupId;
		$this->queryParameters["SuperGroupId"]=$superGroupId;
	}

	public function getGroupName() {
		return $this->groupName;
	}

	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->queryParameters["GroupName"]=$groupName;
	}
	
}