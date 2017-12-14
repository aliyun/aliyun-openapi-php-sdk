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
namespace Ecs\Request\V20140526;

class DescribeInstanceHistoryEventsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeInstanceHistoryEvents", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $EventIds;

	private  $resourceOwnerId;

	private  $eventCycleStatus;

	private  $pageNumber;

	private  $pageSize;

	private  $eventPublishTimeEnd;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $notBeforeStart;

	private  $ownerId;

	private  $eventPublishTimeStart;

	private  $instanceId;

	private  $notBeforeEnd;

	private  $eventType;

	public function getEventIds() {
		return $this->EventIds;
	}

	public function setEventIds($EventIds) {
		$this->EventIds = $EventIds;
		for ($i = 0; $i < count($EventIds); $i ++) {	
			$this->queryParameters["EventId.".($i+1)] = $EventIds[$i];
		}
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getEventCycleStatus() {
		return $this->eventCycleStatus;
	}

	public function setEventCycleStatus($eventCycleStatus) {
		$this->eventCycleStatus = $eventCycleStatus;
		$this->queryParameters["EventCycleStatus"]=$eventCycleStatus;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getEventPublishTimeEnd() {
		return $this->eventPublishTimeEnd;
	}

	public function setEventPublishTimeEnd($eventPublishTimeEnd) {
		$this->eventPublishTimeEnd = $eventPublishTimeEnd;
		$this->queryParameters["EventPublishTime.End"]=$eventPublishTimeEnd;
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

	public function getNotBeforeStart() {
		return $this->notBeforeStart;
	}

	public function setNotBeforeStart($notBeforeStart) {
		$this->notBeforeStart = $notBeforeStart;
		$this->queryParameters["NotBefore.Start"]=$notBeforeStart;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getEventPublishTimeStart() {
		return $this->eventPublishTimeStart;
	}

	public function setEventPublishTimeStart($eventPublishTimeStart) {
		$this->eventPublishTimeStart = $eventPublishTimeStart;
		$this->queryParameters["EventPublishTime.Start"]=$eventPublishTimeStart;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getNotBeforeEnd() {
		return $this->notBeforeEnd;
	}

	public function setNotBeforeEnd($notBeforeEnd) {
		$this->notBeforeEnd = $notBeforeEnd;
		$this->queryParameters["NotBefore.End"]=$notBeforeEnd;
	}

	public function getEventType() {
		return $this->eventType;
	}

	public function setEventType($eventType) {
		$this->eventType = $eventType;
		$this->queryParameters["EventType"]=$eventType;
	}
	
}