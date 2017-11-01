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

class CheckAutoSnapshotPolicyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "CheckAutoSnapshotPolicy", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $dataDiskPolicyEnabled;

	private  $resourceOwnerId;

	private  $dataDiskPolicyRetentionDays;

	private  $resourceOwnerAccount;

	private  $systemDiskPolicyRetentionLastWeek;

	private  $ownerAccount;

	private  $systemDiskPolicyTimePeriod;

	private  $ownerId;

	private  $dataDiskPolicyRetentionLastWeek;

	private  $systemDiskPolicyRetentionDays;

	private  $dataDiskPolicyTimePeriod;

	private  $systemDiskPolicyEnabled;

	public function getDataDiskPolicyEnabled() {
		return $this->dataDiskPolicyEnabled;
	}

	public function setDataDiskPolicyEnabled($dataDiskPolicyEnabled) {
		$this->dataDiskPolicyEnabled = $dataDiskPolicyEnabled;
		$this->queryParameters["DataDiskPolicyEnabled"]=$dataDiskPolicyEnabled;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getDataDiskPolicyRetentionDays() {
		return $this->dataDiskPolicyRetentionDays;
	}

	public function setDataDiskPolicyRetentionDays($dataDiskPolicyRetentionDays) {
		$this->dataDiskPolicyRetentionDays = $dataDiskPolicyRetentionDays;
		$this->queryParameters["DataDiskPolicyRetentionDays"]=$dataDiskPolicyRetentionDays;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getSystemDiskPolicyRetentionLastWeek() {
		return $this->systemDiskPolicyRetentionLastWeek;
	}

	public function setSystemDiskPolicyRetentionLastWeek($systemDiskPolicyRetentionLastWeek) {
		$this->systemDiskPolicyRetentionLastWeek = $systemDiskPolicyRetentionLastWeek;
		$this->queryParameters["SystemDiskPolicyRetentionLastWeek"]=$systemDiskPolicyRetentionLastWeek;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getSystemDiskPolicyTimePeriod() {
		return $this->systemDiskPolicyTimePeriod;
	}

	public function setSystemDiskPolicyTimePeriod($systemDiskPolicyTimePeriod) {
		$this->systemDiskPolicyTimePeriod = $systemDiskPolicyTimePeriod;
		$this->queryParameters["SystemDiskPolicyTimePeriod"]=$systemDiskPolicyTimePeriod;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getDataDiskPolicyRetentionLastWeek() {
		return $this->dataDiskPolicyRetentionLastWeek;
	}

	public function setDataDiskPolicyRetentionLastWeek($dataDiskPolicyRetentionLastWeek) {
		$this->dataDiskPolicyRetentionLastWeek = $dataDiskPolicyRetentionLastWeek;
		$this->queryParameters["DataDiskPolicyRetentionLastWeek"]=$dataDiskPolicyRetentionLastWeek;
	}

	public function getSystemDiskPolicyRetentionDays() {
		return $this->systemDiskPolicyRetentionDays;
	}

	public function setSystemDiskPolicyRetentionDays($systemDiskPolicyRetentionDays) {
		$this->systemDiskPolicyRetentionDays = $systemDiskPolicyRetentionDays;
		$this->queryParameters["SystemDiskPolicyRetentionDays"]=$systemDiskPolicyRetentionDays;
	}

	public function getDataDiskPolicyTimePeriod() {
		return $this->dataDiskPolicyTimePeriod;
	}

	public function setDataDiskPolicyTimePeriod($dataDiskPolicyTimePeriod) {
		$this->dataDiskPolicyTimePeriod = $dataDiskPolicyTimePeriod;
		$this->queryParameters["DataDiskPolicyTimePeriod"]=$dataDiskPolicyTimePeriod;
	}

	public function getSystemDiskPolicyEnabled() {
		return $this->systemDiskPolicyEnabled;
	}

	public function setSystemDiskPolicyEnabled($systemDiskPolicyEnabled) {
		$this->systemDiskPolicyEnabled = $systemDiskPolicyEnabled;
		$this->queryParameters["SystemDiskPolicyEnabled"]=$systemDiskPolicyEnabled;
	}
	
}