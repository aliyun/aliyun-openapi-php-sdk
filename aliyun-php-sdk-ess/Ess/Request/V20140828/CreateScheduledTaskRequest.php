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

class CreateScheduledTaskRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "CreateScheduledTask", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $launchTime;

	private  $scheduledAction;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $description;

	private  $ownerId;

	private  $recurrenceValue;

	private  $launchExpirationTime;

	private  $recurrenceEndTime;

	private  $scheduledTaskName;

	private  $taskEnabled;

	private  $recurrenceType;

	public function getLaunchTime() {
		return $this->launchTime;
	}

	public function setLaunchTime($launchTime) {
		$this->launchTime = $launchTime;
		$this->queryParameters["LaunchTime"]=$launchTime;
	}

	public function getScheduledAction() {
		return $this->scheduledAction;
	}

	public function setScheduledAction($scheduledAction) {
		$this->scheduledAction = $scheduledAction;
		$this->queryParameters["ScheduledAction"]=$scheduledAction;
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

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getRecurrenceValue() {
		return $this->recurrenceValue;
	}

	public function setRecurrenceValue($recurrenceValue) {
		$this->recurrenceValue = $recurrenceValue;
		$this->queryParameters["RecurrenceValue"]=$recurrenceValue;
	}

	public function getLaunchExpirationTime() {
		return $this->launchExpirationTime;
	}

	public function setLaunchExpirationTime($launchExpirationTime) {
		$this->launchExpirationTime = $launchExpirationTime;
		$this->queryParameters["LaunchExpirationTime"]=$launchExpirationTime;
	}

	public function getRecurrenceEndTime() {
		return $this->recurrenceEndTime;
	}

	public function setRecurrenceEndTime($recurrenceEndTime) {
		$this->recurrenceEndTime = $recurrenceEndTime;
		$this->queryParameters["RecurrenceEndTime"]=$recurrenceEndTime;
	}

	public function getScheduledTaskName() {
		return $this->scheduledTaskName;
	}

	public function setScheduledTaskName($scheduledTaskName) {
		$this->scheduledTaskName = $scheduledTaskName;
		$this->queryParameters["ScheduledTaskName"]=$scheduledTaskName;
	}

	public function getTaskEnabled() {
		return $this->taskEnabled;
	}

	public function setTaskEnabled($taskEnabled) {
		$this->taskEnabled = $taskEnabled;
		$this->queryParameters["TaskEnabled"]=$taskEnabled;
	}

	public function getRecurrenceType() {
		return $this->recurrenceType;
	}

	public function setRecurrenceType($recurrenceType) {
		$this->recurrenceType = $recurrenceType;
		$this->queryParameters["RecurrenceType"]=$recurrenceType;
	}
	
}