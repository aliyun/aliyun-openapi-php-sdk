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
namespace R_kvstore\Request\V20150101;

class SetSnapshotSettingsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("R-kvstore", "2015-01-01", "SetSnapshotSettings", "redisa", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $endHour;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $dayList;

	private  $ownerId;

	private  $instanceId;

	private  $retentionDay;

	private  $maxManualSnapshots;

	private  $maxAutoSnapshots;

	private  $beginHour;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getEndHour() {
		return $this->endHour;
	}

	public function setEndHour($endHour) {
		$this->endHour = $endHour;
		$this->domainParameters["EndHour"]=$endHour;
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

	public function getDayList() {
		return $this->dayList;
	}

	public function setDayList($dayList) {
		$this->dayList = $dayList;
		$this->domainParameters["DayList"]=$dayList;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->domainParameters["InstanceId"]=$instanceId;
	}

	public function getRetentionDay() {
		return $this->retentionDay;
	}

	public function setRetentionDay($retentionDay) {
		$this->retentionDay = $retentionDay;
		$this->domainParameters["RetentionDay"]=$retentionDay;
	}

	public function getMaxManualSnapshots() {
		return $this->maxManualSnapshots;
	}

	public function setMaxManualSnapshots($maxManualSnapshots) {
		$this->maxManualSnapshots = $maxManualSnapshots;
		$this->domainParameters["MaxManualSnapshots"]=$maxManualSnapshots;
	}

	public function getMaxAutoSnapshots() {
		return $this->maxAutoSnapshots;
	}

	public function setMaxAutoSnapshots($maxAutoSnapshots) {
		$this->maxAutoSnapshots = $maxAutoSnapshots;
		$this->domainParameters["MaxAutoSnapshots"]=$maxAutoSnapshots;
	}

	public function getBeginHour() {
		return $this->beginHour;
	}

	public function setBeginHour($beginHour) {
		$this->beginHour = $beginHour;
		$this->domainParameters["BeginHour"]=$beginHour;
	}
	
}