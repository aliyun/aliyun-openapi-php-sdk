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

class ModifyPhysicalConnectionAttributeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ModifyPhysicalConnectionAttribute", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $redundantPhysicalConnectionId;

	private  $peerLocation;

	private  $resourceOwnerId;

	private  $portType;

	private  $circuitCode;

	private  $bandwidth;

	private  $clientToken;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $description;

	private  $ownerId;

	private  $lineOperator;

	private  $physicalConnectionId;

	private  $name;

	private  $userCidr;

	public function getRedundantPhysicalConnectionId() {
		return $this->redundantPhysicalConnectionId;
	}

	public function setRedundantPhysicalConnectionId($redundantPhysicalConnectionId) {
		$this->redundantPhysicalConnectionId = $redundantPhysicalConnectionId;
		$this->queryParameters["RedundantPhysicalConnectionId"]=$redundantPhysicalConnectionId;
	}

	public function getPeerLocation() {
		return $this->peerLocation;
	}

	public function setPeerLocation($peerLocation) {
		$this->peerLocation = $peerLocation;
		$this->queryParameters["PeerLocation"]=$peerLocation;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getPortType() {
		return $this->portType;
	}

	public function setPortType($portType) {
		$this->portType = $portType;
		$this->queryParameters["PortType"]=$portType;
	}

	public function getCircuitCode() {
		return $this->circuitCode;
	}

	public function setCircuitCode($circuitCode) {
		$this->circuitCode = $circuitCode;
		$this->queryParameters["CircuitCode"]=$circuitCode;
	}

	public function getbandwidth() {
		return $this->bandwidth;
	}

	public function setbandwidth($bandwidth) {
		$this->bandwidth = $bandwidth;
		$this->queryParameters["bandwidth"]=$bandwidth;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
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

	public function getLineOperator() {
		return $this->lineOperator;
	}

	public function setLineOperator($lineOperator) {
		$this->lineOperator = $lineOperator;
		$this->queryParameters["LineOperator"]=$lineOperator;
	}

	public function getPhysicalConnectionId() {
		return $this->physicalConnectionId;
	}

	public function setPhysicalConnectionId($physicalConnectionId) {
		$this->physicalConnectionId = $physicalConnectionId;
		$this->queryParameters["PhysicalConnectionId"]=$physicalConnectionId;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getUserCidr() {
		return $this->userCidr;
	}

	public function setUserCidr($userCidr) {
		$this->userCidr = $userCidr;
		$this->queryParameters["UserCidr"]=$userCidr;
	}
	
}