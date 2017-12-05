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

class ModifyAutoSnapshotPolicyExRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ModifyAutoSnapshotPolicyEx", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $autoSnapshotPolicyId;

	private  $timePoints;

	private  $retentionDays;

	private  $ownerId;

	private  $repeatWeekdays;

	private  $autoSnapshotPolicyName;

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

	public function getautoSnapshotPolicyId() {
		return $this->autoSnapshotPolicyId;
	}

	public function setautoSnapshotPolicyId($autoSnapshotPolicyId) {
		$this->autoSnapshotPolicyId = $autoSnapshotPolicyId;
		$this->queryParameters["autoSnapshotPolicyId"]=$autoSnapshotPolicyId;
	}

	public function gettimePoints() {
		return $this->timePoints;
	}

	public function settimePoints($timePoints) {
		$this->timePoints = $timePoints;
		$this->queryParameters["timePoints"]=$timePoints;
	}

	public function getretentionDays() {
		return $this->retentionDays;
	}

	public function setretentionDays($retentionDays) {
		$this->retentionDays = $retentionDays;
		$this->queryParameters["retentionDays"]=$retentionDays;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getrepeatWeekdays() {
		return $this->repeatWeekdays;
	}

	public function setrepeatWeekdays($repeatWeekdays) {
		$this->repeatWeekdays = $repeatWeekdays;
		$this->queryParameters["repeatWeekdays"]=$repeatWeekdays;
	}

	public function getautoSnapshotPolicyName() {
		return $this->autoSnapshotPolicyName;
	}

	public function setautoSnapshotPolicyName($autoSnapshotPolicyName) {
		$this->autoSnapshotPolicyName = $autoSnapshotPolicyName;
		$this->queryParameters["autoSnapshotPolicyName"]=$autoSnapshotPolicyName;
	}
	
}