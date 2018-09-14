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

class ModifyDedicatedHostAttributeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ModifyDedicatedHostAttribute", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $description;

	private  $actionOnMaintenance;

	private  $dedicatedHostName;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $dedicatedHostId;

	private  $ownerId;

	private  $networkAttributesSlbUdpTimeout;

	private  $networkAttributesUdpTimeout;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getActionOnMaintenance() {
		return $this->actionOnMaintenance;
	}

	public function setActionOnMaintenance($actionOnMaintenance) {
		$this->actionOnMaintenance = $actionOnMaintenance;
		$this->queryParameters["ActionOnMaintenance"]=$actionOnMaintenance;
	}

	public function getDedicatedHostName() {
		return $this->dedicatedHostName;
	}

	public function setDedicatedHostName($dedicatedHostName) {
		$this->dedicatedHostName = $dedicatedHostName;
		$this->queryParameters["DedicatedHostName"]=$dedicatedHostName;
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

	public function getDedicatedHostId() {
		return $this->dedicatedHostId;
	}

	public function setDedicatedHostId($dedicatedHostId) {
		$this->dedicatedHostId = $dedicatedHostId;
		$this->queryParameters["DedicatedHostId"]=$dedicatedHostId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getNetworkAttributesSlbUdpTimeout() {
		return $this->networkAttributesSlbUdpTimeout;
	}

	public function setNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout) {
		$this->networkAttributesSlbUdpTimeout = $networkAttributesSlbUdpTimeout;
		$this->queryParameters["NetworkAttributes.SlbUdpTimeout"]=$networkAttributesSlbUdpTimeout;
	}

	public function getNetworkAttributesUdpTimeout() {
		return $this->networkAttributesUdpTimeout;
	}

	public function setNetworkAttributesUdpTimeout($networkAttributesUdpTimeout) {
		$this->networkAttributesUdpTimeout = $networkAttributesUdpTimeout;
		$this->queryParameters["NetworkAttributes.UdpTimeout"]=$networkAttributesUdpTimeout;
	}
	
}