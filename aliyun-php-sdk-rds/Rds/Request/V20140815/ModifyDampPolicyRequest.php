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
namespace Rds\Request\V20140815;

class ModifyDampPolicyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "ModifyDampPolicy", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $timeRules;

	private  $actionRules;

	private  $securityToken;

	private  $handlers;

	private  $dBInstanceId;

	private  $policyName;

	private  $sourceRules;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTimeRules() {
		return $this->timeRules;
	}

	public function setTimeRules($timeRules) {
		$this->timeRules = $timeRules;
		$this->queryParameters["TimeRules"]=$timeRules;
	}

	public function getActionRules() {
		return $this->actionRules;
	}

	public function setActionRules($actionRules) {
		$this->actionRules = $actionRules;
		$this->queryParameters["ActionRules"]=$actionRules;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getHandlers() {
		return $this->handlers;
	}

	public function setHandlers($handlers) {
		$this->handlers = $handlers;
		$this->queryParameters["Handlers"]=$handlers;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getPolicyName() {
		return $this->policyName;
	}

	public function setPolicyName($policyName) {
		$this->policyName = $policyName;
		$this->queryParameters["PolicyName"]=$policyName;
	}

	public function getSourceRules() {
		return $this->sourceRules;
	}

	public function setSourceRules($sourceRules) {
		$this->sourceRules = $sourceRules;
		$this->queryParameters["SourceRules"]=$sourceRules;
	}
	
}