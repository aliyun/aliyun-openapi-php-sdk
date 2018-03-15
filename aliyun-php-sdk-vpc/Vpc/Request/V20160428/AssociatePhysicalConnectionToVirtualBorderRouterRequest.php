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
namespace Vpc\Request\V20160428;

class AssociatePhysicalConnectionToVirtualBorderRouterRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Vpc", "2016-04-28", "AssociatePhysicalConnectionToVirtualBorderRouter", "vpc", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $circuitCode;

	private  $vlanId;

	private  $resourceOwnerAccount;

	private  $clientToken;

	private  $ownerAccount;

	private  $vbrId;

	private  $ownerId;

	private  $peerGatewayIp;

	private  $peeringSubnetMask;

	private  $physicalConnectionId;

	private  $localGatewayIp;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getCircuitCode() {
		return $this->circuitCode;
	}

	public function setCircuitCode($circuitCode) {
		$this->circuitCode = $circuitCode;
		$this->queryParameters["CircuitCode"]=$circuitCode;
	}

	public function getVlanId() {
		return $this->vlanId;
	}

	public function setVlanId($vlanId) {
		$this->vlanId = $vlanId;
		$this->queryParameters["VlanId"]=$vlanId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getVbrId() {
		return $this->vbrId;
	}

	public function setVbrId($vbrId) {
		$this->vbrId = $vbrId;
		$this->queryParameters["VbrId"]=$vbrId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPeerGatewayIp() {
		return $this->peerGatewayIp;
	}

	public function setPeerGatewayIp($peerGatewayIp) {
		$this->peerGatewayIp = $peerGatewayIp;
		$this->queryParameters["PeerGatewayIp"]=$peerGatewayIp;
	}

	public function getPeeringSubnetMask() {
		return $this->peeringSubnetMask;
	}

	public function setPeeringSubnetMask($peeringSubnetMask) {
		$this->peeringSubnetMask = $peeringSubnetMask;
		$this->queryParameters["PeeringSubnetMask"]=$peeringSubnetMask;
	}

	public function getPhysicalConnectionId() {
		return $this->physicalConnectionId;
	}

	public function setPhysicalConnectionId($physicalConnectionId) {
		$this->physicalConnectionId = $physicalConnectionId;
		$this->queryParameters["PhysicalConnectionId"]=$physicalConnectionId;
	}

	public function getLocalGatewayIp() {
		return $this->localGatewayIp;
	}

	public function setLocalGatewayIp($localGatewayIp) {
		$this->localGatewayIp = $localGatewayIp;
		$this->queryParameters["LocalGatewayIp"]=$localGatewayIp;
	}
	
}