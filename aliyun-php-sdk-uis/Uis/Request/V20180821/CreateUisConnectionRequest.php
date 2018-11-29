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
namespace Uis\Request\V20180821;

class CreateUisConnectionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Uis", "2018-08-21", "CreateUisConnection", "uis", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $uisNodeId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $name;

	private  $description;

	private  $uisProtocol;

	private  $sslConfig;

	private  $ownerId;

	private  $greConfig;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getUisNodeId() {
		return $this->uisNodeId;
	}

	public function setUisNodeId($uisNodeId) {
		$this->uisNodeId = $uisNodeId;
		$this->queryParameters["UisNodeId"]=$uisNodeId;
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

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getUisProtocol() {
		return $this->uisProtocol;
	}

	public function setUisProtocol($uisProtocol) {
		$this->uisProtocol = $uisProtocol;
		$this->queryParameters["UisProtocol"]=$uisProtocol;
	}

	public function getSslConfig() {
		return $this->sslConfig;
	}

	public function setSslConfig($sslConfig) {
		$this->sslConfig = $sslConfig;
		$this->queryParameters["SslConfig"]=$sslConfig;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getGreConfig() {
		return $this->greConfig;
	}

	public function setGreConfig($greConfig) {
		$this->greConfig = $greConfig;
		$this->queryParameters["GreConfig"]=$greConfig;
	}
	
}