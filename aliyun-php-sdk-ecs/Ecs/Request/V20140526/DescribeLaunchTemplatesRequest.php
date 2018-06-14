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

	private  $templateTag1Value;

	private  $LaunchTemplateNames;

	private  $resourceOwnerId;

	private  $templateTag4Key;

	private  $pageNumber;

	private  $templateTag3Key;

	private  $templateTag5Value;

	private  $pageSize;

	private  $templateTag3Value;

	private  $templateTag2Key;

	private  $LaunchTemplateIds;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $templateResourceGroupId;

	private  $templateTag2Value;

	private  $ownerId;

	private  $templateTag4Value;

	private  $templateTag5Key;

	private  $templateTag1Key;

	public function getTemplateTag1Value() {
		return $this->templateTag1Value;
	}

	public function setTemplateTag1Value($templateTag1Value) {
		$this->templateTag1Value = $templateTag1Value;
		$this->queryParameters["TemplateTag.1.Value"]=$templateTag1Value;
	}

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

	public function getTemplateTag4Key() {
		return $this->templateTag4Key;
	}

	public function setTemplateTag4Key($templateTag4Key) {
		$this->templateTag4Key = $templateTag4Key;
		$this->queryParameters["TemplateTag.4.Key"]=$templateTag4Key;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getTemplateTag3Key() {
		return $this->templateTag3Key;
	}

	public function setTemplateTag3Key($templateTag3Key) {
		$this->templateTag3Key = $templateTag3Key;
		$this->queryParameters["TemplateTag.3.Key"]=$templateTag3Key;
	}

	public function getTemplateTag5Value() {
		return $this->templateTag5Value;
	}

	public function setTemplateTag5Value($templateTag5Value) {
		$this->templateTag5Value = $templateTag5Value;
		$this->queryParameters["TemplateTag.5.Value"]=$templateTag5Value;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getTemplateTag3Value() {
		return $this->templateTag3Value;
	}

	public function setTemplateTag3Value($templateTag3Value) {
		$this->templateTag3Value = $templateTag3Value;
		$this->queryParameters["TemplateTag.3.Value"]=$templateTag3Value;
	}

	public function getTemplateTag2Key() {
		return $this->templateTag2Key;
	}

	public function setTemplateTag2Key($templateTag2Key) {
		$this->templateTag2Key = $templateTag2Key;
		$this->queryParameters["TemplateTag.2.Key"]=$templateTag2Key;
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

	public function getTemplateTag2Value() {
		return $this->templateTag2Value;
	}

	public function setTemplateTag2Value($templateTag2Value) {
		$this->templateTag2Value = $templateTag2Value;
		$this->queryParameters["TemplateTag.2.Value"]=$templateTag2Value;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTemplateTag4Value() {
		return $this->templateTag4Value;
	}

	public function setTemplateTag4Value($templateTag4Value) {
		$this->templateTag4Value = $templateTag4Value;
		$this->queryParameters["TemplateTag.4.Value"]=$templateTag4Value;
	}

	public function getTemplateTag5Key() {
		return $this->templateTag5Key;
	}

	public function setTemplateTag5Key($templateTag5Key) {
		$this->templateTag5Key = $templateTag5Key;
		$this->queryParameters["TemplateTag.5.Key"]=$templateTag5Key;
	}

	public function getTemplateTag1Key() {
		return $this->templateTag1Key;
	}

	public function setTemplateTag1Key($templateTag1Key) {
		$this->templateTag1Key = $templateTag1Key;
		$this->queryParameters["TemplateTag.1.Key"]=$templateTag1Key;
	}
	
}