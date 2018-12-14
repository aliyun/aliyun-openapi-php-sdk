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
namespace Rds\Request\V20140815;

class AllocateReadWriteSplittingConnectionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "AllocateReadWriteSplittingConnection", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $connectionStringPrefix;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $weight;

	private  $ownerId;

	private  $iPType;

	private  $port;

	private  $distributionType;

	private  $dBInstanceId;

	private  $maxDelayTime;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getConnectionStringPrefix() {
		return $this->connectionStringPrefix;
	}

	public function setConnectionStringPrefix($connectionStringPrefix) {
		$this->connectionStringPrefix = $connectionStringPrefix;
		$this->queryParameters["ConnectionStringPrefix"]=$connectionStringPrefix;
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

	public function getWeight() {
		return $this->weight;
	}

	public function setWeight($weight) {
		$this->weight = $weight;
		$this->queryParameters["Weight"]=$weight;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getIPType() {
		return $this->iPType;
	}

	public function setIPType($iPType) {
		$this->iPType = $iPType;
		$this->queryParameters["IPType"]=$iPType;
	}

	public function getPort() {
		return $this->port;
	}

	public function setPort($port) {
		$this->port = $port;
		$this->queryParameters["Port"]=$port;
	}

	public function getDistributionType() {
		return $this->distributionType;
	}

	public function setDistributionType($distributionType) {
		$this->distributionType = $distributionType;
		$this->queryParameters["DistributionType"]=$distributionType;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getMaxDelayTime() {
		return $this->maxDelayTime;
	}

	public function setMaxDelayTime($maxDelayTime) {
		$this->maxDelayTime = $maxDelayTime;
		$this->queryParameters["MaxDelayTime"]=$maxDelayTime;
	}
	
}