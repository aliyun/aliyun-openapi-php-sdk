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

class ModifyLifecycleHookRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "ModifyLifecycleHook", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $defaultResult;

	private  $resourceOwnerAccount;

	private  $heartbeatTimeout;

	private  $lifecycleHookId;

	private  $scalingGroupId;

	private  $ownerAccount;

	private  $notificationMetadata;

	private  $ownerId;

	private  $lifecycleTransition;

	private  $lifecycleHookName;

	private  $notificationArn;

	public function getDefaultResult() {
		return $this->defaultResult;
	}

	public function setDefaultResult($defaultResult) {
		$this->defaultResult = $defaultResult;
		$this->queryParameters["DefaultResult"]=$defaultResult;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getHeartbeatTimeout() {
		return $this->heartbeatTimeout;
	}

	public function setHeartbeatTimeout($heartbeatTimeout) {
		$this->heartbeatTimeout = $heartbeatTimeout;
		$this->queryParameters["HeartbeatTimeout"]=$heartbeatTimeout;
	}

	public function getLifecycleHookId() {
		return $this->lifecycleHookId;
	}

	public function setLifecycleHookId($lifecycleHookId) {
		$this->lifecycleHookId = $lifecycleHookId;
		$this->queryParameters["LifecycleHookId"]=$lifecycleHookId;
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

	public function getNotificationMetadata() {
		return $this->notificationMetadata;
	}

	public function setNotificationMetadata($notificationMetadata) {
		$this->notificationMetadata = $notificationMetadata;
		$this->queryParameters["NotificationMetadata"]=$notificationMetadata;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getLifecycleTransition() {
		return $this->lifecycleTransition;
	}

	public function setLifecycleTransition($lifecycleTransition) {
		$this->lifecycleTransition = $lifecycleTransition;
		$this->queryParameters["LifecycleTransition"]=$lifecycleTransition;
	}

	public function getLifecycleHookName() {
		return $this->lifecycleHookName;
	}

	public function setLifecycleHookName($lifecycleHookName) {
		$this->lifecycleHookName = $lifecycleHookName;
		$this->queryParameters["LifecycleHookName"]=$lifecycleHookName;
	}

	public function getNotificationArn() {
		return $this->notificationArn;
	}

	public function setNotificationArn($notificationArn) {
		$this->notificationArn = $notificationArn;
		$this->queryParameters["NotificationArn"]=$notificationArn;
	}
	
}