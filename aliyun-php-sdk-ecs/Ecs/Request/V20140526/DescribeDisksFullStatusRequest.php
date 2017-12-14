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

class DescribeDisksFullStatusRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeDisksFullStatus", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $EventIds;

	private  $resourceOwnerId;

	private  $pageNumber;

	private  $eventTimeStart;

	private  $pageSize;

	private  $DiskIds;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $eventTimeEnd;

	private  $healthStatus;

	private  $eventType;

	private  $status;

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

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getEventTimeStart() {
		return $this->eventTimeStart;
	}

	public function setEventTimeStart($eventTimeStart) {
		$this->eventTimeStart = $eventTimeStart;
		$this->queryParameters["EventTime.Start"]=$eventTimeStart;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getDiskIds() {
		return $this->DiskIds;
	}

	public function setDiskIds($DiskIds) {
		$this->DiskIds = $DiskIds;
		for ($i = 0; $i < count($DiskIds); $i ++) {	
			$this->queryParameters["DiskId.".($i+1)] = $DiskIds[$i];
		}
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

	public function getEventTimeEnd() {
		return $this->eventTimeEnd;
	}

	public function setEventTimeEnd($eventTimeEnd) {
		$this->eventTimeEnd = $eventTimeEnd;
		$this->queryParameters["EventTime.End"]=$eventTimeEnd;
	}

	public function getHealthStatus() {
		return $this->healthStatus;
	}

	public function setHealthStatus($healthStatus) {
		$this->healthStatus = $healthStatus;
		$this->queryParameters["HealthStatus"]=$healthStatus;
	}

	public function getEventType() {
		return $this->eventType;
	}

	public function setEventType($eventType) {
		$this->eventType = $eventType;
		$this->queryParameters["EventType"]=$eventType;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}