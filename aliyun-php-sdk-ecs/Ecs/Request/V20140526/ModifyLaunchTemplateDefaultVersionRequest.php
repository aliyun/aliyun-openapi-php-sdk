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

class ModifyLaunchTemplateDefaultVersionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ModifyLaunchTemplateDefaultVersion", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $launchTemplateName;

	private  $resourceOwnerId;

	private  $launchTemplateId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $defaultVersionNumber;

	public function getLaunchTemplateName() {
		return $this->launchTemplateName;
	}

	public function setLaunchTemplateName($launchTemplateName) {
		$this->launchTemplateName = $launchTemplateName;
		$this->queryParameters["LaunchTemplateName"]=$launchTemplateName;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getLaunchTemplateId() {
		return $this->launchTemplateId;
	}

	public function setLaunchTemplateId($launchTemplateId) {
		$this->launchTemplateId = $launchTemplateId;
		$this->queryParameters["LaunchTemplateId"]=$launchTemplateId;
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

	public function getDefaultVersionNumber() {
		return $this->defaultVersionNumber;
	}

	public function setDefaultVersionNumber($defaultVersionNumber) {
		$this->defaultVersionNumber = $defaultVersionNumber;
		$this->queryParameters["DefaultVersionNumber"]=$defaultVersionNumber;
	}
	
}