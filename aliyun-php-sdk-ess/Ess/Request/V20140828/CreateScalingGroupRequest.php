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

class CreateScalingGroupRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "CreateScalingGroup", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $multiAZPolicy;

	private  $dBInstanceIds;

	private  $loadBalancerIds;

	private  $healthCheckType;

	private  $resourceOwnerAccount;

	private  $scalingGroupName;

	private  $VSwitchIds;

	private  $ownerAccount;

	private  $minSize;

	private  $ownerId;

	private  $vSwitchId;

	private  $maxSize;

	private  $LifecycleHooks;

	private  $defaultCooldown;

	private  $removalPolicy1;

	private  $removalPolicy2;

	public function getMultiAZPolicy() {
		return $this->multiAZPolicy;
	}

	public function setMultiAZPolicy($multiAZPolicy) {
		$this->multiAZPolicy = $multiAZPolicy;
		$this->queryParameters["MultiAZPolicy"]=$multiAZPolicy;
	}

	public function getDBInstanceIds() {
		return $this->dBInstanceIds;
	}

	public function setDBInstanceIds($dBInstanceIds) {
		$this->dBInstanceIds = $dBInstanceIds;
		$this->queryParameters["DBInstanceIds"]=$dBInstanceIds;
	}

	public function getLoadBalancerIds() {
		return $this->loadBalancerIds;
	}

	public function setLoadBalancerIds($loadBalancerIds) {
		$this->loadBalancerIds = $loadBalancerIds;
		$this->queryParameters["LoadBalancerIds"]=$loadBalancerIds;
	}

	public function getHealthCheckType() {
		return $this->healthCheckType;
	}

	public function setHealthCheckType($healthCheckType) {
		$this->healthCheckType = $healthCheckType;
		$this->queryParameters["HealthCheckType"]=$healthCheckType;
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

	public function getVSwitchIds() {
		return $this->VSwitchIds;
	}

	public function setVSwitchIds($VSwitchIds) {
		$this->VSwitchIds = $VSwitchIds;
		for ($i = 0; $i < count($VSwitchIds); $i ++) {
			$this->queryParameters["VSwitchIds.".($i+1)] = $VSwitchIds[$i];
		}
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
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

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getMaxSize() {
		return $this->maxSize;
	}

	public function setMaxSize($maxSize) {
		$this->maxSize = $maxSize;
		$this->queryParameters["MaxSize"]=$maxSize;
	}

	public function getLifecycleHooks() {
		return $this->LifecycleHooks;
	}

	public function setLifecycleHooks($LifecycleHooks) {
		$this->LifecycleHooks = $LifecycleHooks;
		for ($i = 0; $i < count($LifecycleHooks); $i ++) {	
			$this->queryParameters['LifecycleHook.' . ($i + 1) . '.DefaultResult'] = $LifecycleHooks[$i]['DefaultResult'];
			$this->queryParameters['LifecycleHook.' . ($i + 1) . '.LifecycleHookName'] = $LifecycleHooks[$i]['LifecycleHookName'];
			$this->queryParameters['LifecycleHook.' . ($i + 1) . '.HeartbeatTimeout'] = $LifecycleHooks[$i]['HeartbeatTimeout'];
			$this->queryParameters['LifecycleHook.' . ($i + 1) . '.NotificationArn'] = $LifecycleHooks[$i]['NotificationArn'];
			$this->queryParameters['LifecycleHook.' . ($i + 1) . '.NotificationMetadata'] = $LifecycleHooks[$i]['NotificationMetadata'];
			$this->queryParameters['LifecycleHook.' . ($i + 1) . '.LifecycleTransition'] = $LifecycleHooks[$i]['LifecycleTransition'];

		}
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