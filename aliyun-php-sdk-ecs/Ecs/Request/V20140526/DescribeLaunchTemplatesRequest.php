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

class DescribeLaunchTemplatesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeLaunchTemplates", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $LaunchTemplateNames;

	private  $resourceOwnerId;

	private  $pageNumber;

	private  $pageSize;

	private  $TemplateTags;

	private  $LaunchTemplateIds;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $templateResourceGroupId;

	private  $ownerId;

	public function getLaunchTemplateNames() {
		return $this->LaunchTemplateNames;
	}

	public function setLaunchTemplateNames($LaunchTemplateNames) {
		$this->LaunchTemplateNames = $LaunchTemplateNames;
		for ($i = 0; $i < count($LaunchTemplateNames); $i ++) {	
			$this->queryParameters["LaunchTemplateName.".($i+1)] = $LaunchTemplateNames[$i];
		}
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getTemplateTags() {
		return $this->TemplateTags;
	}

	public function setTemplateTags($TemplateTags) {
		$this->TemplateTags = $TemplateTags;
		for ($i = 0; $i < count($TemplateTags); $i ++) {	
			$this->queryParameters['TemplateTag.' . ($i + 1) . '.Key'] = $TemplateTags[$i]['Key'];
			$this->queryParameters['TemplateTag.' . ($i + 1) . '.Value'] = $TemplateTags[$i]['Value'];

		}
	}

	public function getLaunchTemplateIds() {
		return $this->LaunchTemplateIds;
	}

	public function setLaunchTemplateIds($LaunchTemplateIds) {
		$this->LaunchTemplateIds = $LaunchTemplateIds;
		for ($i = 0; $i < count($LaunchTemplateIds); $i ++) {	
			$this->queryParameters["LaunchTemplateId.".($i+1)] = $LaunchTemplateIds[$i];
		}
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

	public function getTemplateResourceGroupId() {
		return $this->templateResourceGroupId;
	}

	public function setTemplateResourceGroupId($templateResourceGroupId) {
		$this->templateResourceGroupId = $templateResourceGroupId;
		$this->queryParameters["TemplateResourceGroupId"]=$templateResourceGroupId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}