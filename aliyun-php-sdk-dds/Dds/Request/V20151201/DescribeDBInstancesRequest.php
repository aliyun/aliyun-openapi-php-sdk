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
namespace Dds\Request\V20151201;

class DescribeDBInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dds", "2015-12-01", "DescribeDBInstances", "dds", "openAPI");
		$this->setMethod("POST");
	}

	private  $expireTime;

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $pageNumber;

	private  $replicationFactor;

	private  $dBInstanceType;

	private  $dBInstanceClass;

	private  $expired;

	private  $securityToken;

	private  $pageSize;

	private  $zoneId;

	private  $dBInstanceId;

	private  $dBInstanceDescription;

	private  $dBInstanceStatus;

	public function getExpireTime() {
		return $this->expireTime;
	}

	public function setExpireTime($expireTime) {
		$this->expireTime = $expireTime;
		$this->queryParameters["ExpireTime"]=$expireTime;
	}

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

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getReplicationFactor() {
		return $this->replicationFactor;
	}

	public function setReplicationFactor($replicationFactor) {
		$this->replicationFactor = $replicationFactor;
		$this->queryParameters["ReplicationFactor"]=$replicationFactor;
	}

	public function getDBInstanceType() {
		return $this->dBInstanceType;
	}

	public function setDBInstanceType($dBInstanceType) {
		$this->dBInstanceType = $dBInstanceType;
		$this->queryParameters["DBInstanceType"]=$dBInstanceType;
	}

	public function getDBInstanceClass() {
		return $this->dBInstanceClass;
	}

	public function setDBInstanceClass($dBInstanceClass) {
		$this->dBInstanceClass = $dBInstanceClass;
		$this->queryParameters["DBInstanceClass"]=$dBInstanceClass;
	}

	public function getExpired() {
		return $this->expired;
	}

	public function setExpired($expired) {
		$this->expired = $expired;
		$this->queryParameters["Expired"]=$expired;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getDBInstanceDescription() {
		return $this->dBInstanceDescription;
	}

	public function setDBInstanceDescription($dBInstanceDescription) {
		$this->dBInstanceDescription = $dBInstanceDescription;
		$this->queryParameters["DBInstanceDescription"]=$dBInstanceDescription;
	}

	public function getDBInstanceStatus() {
		return $this->dBInstanceStatus;
	}

	public function setDBInstanceStatus($dBInstanceStatus) {
		$this->dBInstanceStatus = $dBInstanceStatus;
		$this->queryParameters["DBInstanceStatus"]=$dBInstanceStatus;
	}
	
}