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
namespace vod\Request\V20170321;

class RegisterMediaRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("vod", "2017-03-21", "RegisterMedia", "vod", "openAPI");
		$this->setMethod("POST");
	}

	private  $userData;

	private  $resourceOwnerId;

	private  $templateGroupId;

	private  $resourceOwnerAccount;

	private  $ownerId;

	private  $registerMetadatas;

	private  $workFlowId;

	public function getUserData() {
		return $this->userData;
	}

	public function setUserData($userData) {
		$this->userData = $userData;
		$this->queryParameters["UserData"]=$userData;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getTemplateGroupId() {
		return $this->templateGroupId;
	}

	public function setTemplateGroupId($templateGroupId) {
		$this->templateGroupId = $templateGroupId;
		$this->queryParameters["TemplateGroupId"]=$templateGroupId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getRegisterMetadatas() {
		return $this->registerMetadatas;
	}

	public function setRegisterMetadatas($registerMetadatas) {
		$this->registerMetadatas = $registerMetadatas;
		$this->queryParameters["RegisterMetadatas"]=$registerMetadatas;
	}

	public function getWorkFlowId() {
		return $this->workFlowId;
	}

	public function setWorkFlowId($workFlowId) {
		$this->workFlowId = $workFlowId;
		$this->queryParameters["WorkFlowId"]=$workFlowId;
	}
	
}