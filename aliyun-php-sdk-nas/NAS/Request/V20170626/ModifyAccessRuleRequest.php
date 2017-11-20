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
namespace NAS\Request\V20170626;

class ModifyAccessRuleRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("NAS", "2017-06-26", "ModifyAccessRule", "nas", "openAPI");
		$this->setMethod("POST");
	}

	private  $rWAccessType;

	private  $sourceCidrIp;

	private  $userAccessType;

	private  $priority;

	private  $accessGroupName;

	private  $accessRuleId;

	public function getRWAccessType() {
		return $this->rWAccessType;
	}

	public function setRWAccessType($rWAccessType) {
		$this->rWAccessType = $rWAccessType;
		$this->queryParameters["RWAccessType"]=$rWAccessType;
	}

	public function getSourceCidrIp() {
		return $this->sourceCidrIp;
	}

	public function setSourceCidrIp($sourceCidrIp) {
		$this->sourceCidrIp = $sourceCidrIp;
		$this->queryParameters["SourceCidrIp"]=$sourceCidrIp;
	}

	public function getUserAccessType() {
		return $this->userAccessType;
	}

	public function setUserAccessType($userAccessType) {
		$this->userAccessType = $userAccessType;
		$this->queryParameters["UserAccessType"]=$userAccessType;
	}

	public function getPriority() {
		return $this->priority;
	}

	public function setPriority($priority) {
		$this->priority = $priority;
		$this->queryParameters["Priority"]=$priority;
	}

	public function getAccessGroupName() {
		return $this->accessGroupName;
	}

	public function setAccessGroupName($accessGroupName) {
		$this->accessGroupName = $accessGroupName;
		$this->queryParameters["AccessGroupName"]=$accessGroupName;
	}

	public function getAccessRuleId() {
		return $this->accessRuleId;
	}

	public function setAccessRuleId($accessRuleId) {
		$this->accessRuleId = $accessRuleId;
		$this->queryParameters["AccessRuleId"]=$accessRuleId;
	}
	
}