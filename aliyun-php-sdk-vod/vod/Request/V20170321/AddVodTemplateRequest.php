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

class AddVodTemplateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("vod", "2017-03-21", "AddVodTemplate");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $templateConfig;

	private  $templateType;

	private  $name;

	private  $ownerId;

	private  $subTemplateType;

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

	public function getTemplateConfig() {
		return $this->templateConfig;
	}

	public function setTemplateConfig($templateConfig) {
		$this->templateConfig = $templateConfig;
		$this->queryParameters["TemplateConfig"]=$templateConfig;
	}

	public function getTemplateType() {
		return $this->templateType;
	}

	public function setTemplateType($templateType) {
		$this->templateType = $templateType;
		$this->queryParameters["TemplateType"]=$templateType;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getSubTemplateType() {
		return $this->subTemplateType;
	}

	public function setSubTemplateType($subTemplateType) {
		$this->subTemplateType = $subTemplateType;
		$this->queryParameters["SubTemplateType"]=$subTemplateType;
	}
	
}