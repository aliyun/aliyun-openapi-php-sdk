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

class CreateForwardEntryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Vpc", "2016-04-28", "CreateForwardEntry", "vpc", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ipProtocol;

	private  $internalPort;

	private  $ownerAccount;

	private  $forwardTableId;

	private  $ownerId;

	private  $externalIp;

	private  $externalPort;

	private  $internalIp;

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

	public function getIpProtocol() {
		return $this->ipProtocol;
	}

	public function setIpProtocol($ipProtocol) {
		$this->ipProtocol = $ipProtocol;
		$this->queryParameters["IpProtocol"]=$ipProtocol;
	}

	public function getInternalPort() {
		return $this->internalPort;
	}

	public function setInternalPort($internalPort) {
		$this->internalPort = $internalPort;
		$this->queryParameters["InternalPort"]=$internalPort;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getForwardTableId() {
		return $this->forwardTableId;
	}

	public function setForwardTableId($forwardTableId) {
		$this->forwardTableId = $forwardTableId;
		$this->queryParameters["ForwardTableId"]=$forwardTableId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getExternalIp() {
		return $this->externalIp;
	}

	public function setExternalIp($externalIp) {
		$this->externalIp = $externalIp;
		$this->queryParameters["ExternalIp"]=$externalIp;
	}

	public function getExternalPort() {
		return $this->externalPort;
	}

	public function setExternalPort($externalPort) {
		$this->externalPort = $externalPort;
		$this->queryParameters["ExternalPort"]=$externalPort;
	}

	public function getInternalIp() {
		return $this->internalIp;
	}

	public function setInternalIp($internalIp) {
		$this->internalIp = $internalIp;
		$this->queryParameters["InternalIp"]=$internalIp;
	}
	
}