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

class DescribeLaunchTemplateVersionsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeLaunchTemplateVersions", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $launchTemplateName;

	private  $maxVersion;

	private  $resourceOwnerId;

	private  $defaultVersion;

	private  $minVersion;

	private  $pageNumber;

	private  $pageSize;

	private  $launchTemplateId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $LaunchTemplateVersions;

	private  $detailFlag;

	public function getLaunchTemplateName() {
		return $this->launchTemplateName;
	}

	public function setLaunchTemplateName($launchTemplateName) {
		$this->launchTemplateName = $launchTemplateName;
		$this->queryParameters["LaunchTemplateName"]=$launchTemplateName;
	}

	public function getMaxVersion() {
		return $this->maxVersion;
	}

	public function setMaxVersion($maxVersion) {
		$this->maxVersion = $maxVersion;
		$this->queryParameters["MaxVersion"]=$maxVersion;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getDefaultVersion() {
		return $this->defaultVersion;
	}

	public function setDefaultVersion($defaultVersion) {
		$this->defaultVersion = $defaultVersion;
		$this->queryParameters["DefaultVersion"]=$defaultVersion;
	}

	public function getMinVersion() {
		return $this->minVersion;
	}

	public function setMinVersion($minVersion) {
		$this->minVersion = $minVersion;
		$this->queryParameters["MinVersion"]=$minVersion;
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

	public function getLaunchTemplateVersions() {
		return $this->LaunchTemplateVersions;
	}

	public function setLaunchTemplateVersions($LaunchTemplateVersions) {
		$this->LaunchTemplateVersions = $LaunchTemplateVersions;
		for ($i = 0; $i < count($LaunchTemplateVersions); $i ++) {	
			$this->queryParameters["LaunchTemplateVersion.".($i+1)] = $LaunchTemplateVersions[$i];
		}
	}

	public function getDetailFlag() {
		return $this->detailFlag;
	}

	public function setDetailFlag($detailFlag) {
		$this->detailFlag = $detailFlag;
		$this->queryParameters["DetailFlag"]=$detailFlag;
	}
	
}