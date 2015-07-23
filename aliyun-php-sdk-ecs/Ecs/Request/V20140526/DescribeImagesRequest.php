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

class DescribeImagesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeImages");
	}

	private  $ownerId;

	private  $resourceOwnerAccount;

	private  $resourceOwnerId;

	private  $status;

	private  $imageId;

	private  $snapshotId;

	private  $imageName;

	private  $imageOwnerAlias;

	private  $pageNumber;

	private  $pageSize;

	private  $ownerAccount;

	private  $filter1Key;

	private  $filter2Key;

	private  $filter1Value;

	private  $filter2Value;

	private  $usage;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getSnapshotId() {
		return $this->snapshotId;
	}

	public function setSnapshotId($snapshotId) {
		$this->snapshotId = $snapshotId;
		$this->queryParameters["SnapshotId"]=$snapshotId;
	}

	public function getImageName() {
		return $this->imageName;
	}

	public function setImageName($imageName) {
		$this->imageName = $imageName;
		$this->queryParameters["ImageName"]=$imageName;
	}

	public function getImageOwnerAlias() {
		return $this->imageOwnerAlias;
	}

	public function setImageOwnerAlias($imageOwnerAlias) {
		$this->imageOwnerAlias = $imageOwnerAlias;
		$this->queryParameters["ImageOwnerAlias"]=$imageOwnerAlias;
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

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getFilter1Key() {
		return $this->filter1Key;
	}

	public function setFilter1Key($filter1Key) {
		$this->filter1Key = $filter1Key;
		$this->queryParameters["Filter1Key"]=$filter1Key;
	}

	public function getFilter2Key() {
		return $this->filter2Key;
	}

	public function setFilter2Key($filter2Key) {
		$this->filter2Key = $filter2Key;
		$this->queryParameters["Filter2Key"]=$filter2Key;
	}

	public function getFilter1Value() {
		return $this->filter1Value;
	}

	public function setFilter1Value($filter1Value) {
		$this->filter1Value = $filter1Value;
		$this->queryParameters["Filter1Value"]=$filter1Value;
	}

	public function getFilter2Value() {
		return $this->filter2Value;
	}

	public function setFilter2Value($filter2Value) {
		$this->filter2Value = $filter2Value;
		$this->queryParameters["Filter2Value"]=$filter2Value;
	}

	public function getUsage() {
		return $this->usage;
	}

	public function setUsage($usage) {
		$this->usage = $usage;
		$this->queryParameters["Usage"]=$usage;
	}
	
}