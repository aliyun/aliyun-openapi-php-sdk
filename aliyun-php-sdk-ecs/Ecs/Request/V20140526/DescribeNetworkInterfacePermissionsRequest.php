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

class DescribeNetworkInterfacePermissionsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeNetworkInterfacePermissions", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $pageNumber;

	private  $pageSize;

	private  $NetworkInterfacePermissionIds;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $networkInterfaceId;

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

	public function getNetworkInterfacePermissionIds() {
		return $this->NetworkInterfacePermissionIds;
	}

	public function setNetworkInterfacePermissionIds($NetworkInterfacePermissionIds) {
		$this->NetworkInterfacePermissionIds = $NetworkInterfacePermissionIds;
		for ($i = 0; $i < count($NetworkInterfacePermissionIds); $i ++) {	
			$this->queryParameters["NetworkInterfacePermissionId.".($i+1)] = $NetworkInterfacePermissionIds[$i];
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

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getNetworkInterfaceId() {
		return $this->networkInterfaceId;
	}

	public function setNetworkInterfaceId($networkInterfaceId) {
		$this->networkInterfaceId = $networkInterfaceId;
		$this->queryParameters["NetworkInterfaceId"]=$networkInterfaceId;
	}
	
}