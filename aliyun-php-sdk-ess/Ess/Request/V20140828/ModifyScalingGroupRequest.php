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
namespace Ess\Request\V20140828;

class ModifyScalingGroupRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "ModifyScalingGroup", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $scalingGroupName;

	private  $scalingGroupId;

	private  $ownerAccount;

	private  $activeScalingConfigurationId;

	private  $minSize;

	private  $ownerId;

	private  $maxSize;

	private  $defaultCooldown;

	private  $removalPolicy1;

	private  $removalPolicy2;

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

	public function getScalingGroupName() {
		return $this->scalingGroupName;
	}

	public function setScalingGroupName($scalingGroupName) {
		$this->scalingGroupName = $scalingGroupName;
		$this->queryParameters["ScalingGroupName"]=$scalingGroupName;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getActiveScalingConfigurationId() {
		return $this->activeScalingConfigurationId;
	}

	public function setActiveScalingConfigurationId($activeScalingConfigurationId) {
		$this->activeScalingConfigurationId = $activeScalingConfigurationId;
		$this->queryParameters["ActiveScalingConfigurationId"]=$activeScalingConfigurationId;
	}

	public function getMinSize() {
		return $this->minSize;
	}

	public function setMinSize($minSize) {
		$this->minSize = $minSize;
		$this->queryParameters["MinSize"]=$minSize;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getMaxSize() {
		return $this->maxSize;
	}

	public function setMaxSize($maxSize) {
		$this->maxSize = $maxSize;
		$this->queryParameters["MaxSize"]=$maxSize;
	}

	public function getDefaultCooldown() {
		return $this->defaultCooldown;
	}

	public function setDefaultCooldown($defaultCooldown) {
		$this->defaultCooldown = $defaultCooldown;
		$this->queryParameters["DefaultCooldown"]=$defaultCooldown;
	}

	public function getRemovalPolicy1() {
		return $this->removalPolicy1;
	}

	public function setRemovalPolicy1($removalPolicy1) {
		$this->removalPolicy1 = $removalPolicy1;
		$this->queryParameters["RemovalPolicy.1"]=$removalPolicy1;
	}

	public function getRemovalPolicy2() {
		return $this->removalPolicy2;
	}

	public function setRemovalPolicy2($removalPolicy2) {
		$this->removalPolicy2 = $removalPolicy2;
		$this->queryParameters["RemovalPolicy.2"]=$removalPolicy2;
	}
	
}