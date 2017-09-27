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
namespace Rds\Request\V20140815;

class DescribeDBInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "DescribeDBInstances", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $connectionMode;

	private  $tag4value;

	private  $resourceOwnerId;

	private  $tag2key;

	private  $clientToken;

	private  $searchKey;

	private  $tag3key;

	private  $pageNumber;

	private  $tag1value;

	private  $engine;

	private  $pageSize;

	private  $dBInstanceStatus;

	private  $dBInstanceId;

	private  $tag3value;

	private  $proxyId;

	private  $tag5key;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $tag5value;

	private  $dBInstanceType;

	private  $tags;

	private  $vSwitchId;

	private  $tag1key;

	private  $vpcId;

	private  $tag2value;

	private  $tag4key;

	private  $instanceNetworkType;

	public function getConnectionMode() {
		return $this->connectionMode;
	}

	public function setConnectionMode($connectionMode) {
		$this->connectionMode = $connectionMode;
		$this->queryParameters["ConnectionMode"]=$connectionMode;
	}

	public function getTag4value() {
		return $this->tag4value;
	}

	public function setTag4value($tag4value) {
		$this->tag4value = $tag4value;
		$this->queryParameters["Tag.4.value"]=$tag4value;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getTag2key() {
		return $this->tag2key;
	}

	public function setTag2key($tag2key) {
		$this->tag2key = $tag2key;
		$this->queryParameters["Tag.2.key"]=$tag2key;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getSearchKey() {
		return $this->searchKey;
	}

	public function setSearchKey($searchKey) {
		$this->searchKey = $searchKey;
		$this->queryParameters["SearchKey"]=$searchKey;
	}

	public function getTag3key() {
		return $this->tag3key;
	}

	public function setTag3key($tag3key) {
		$this->tag3key = $tag3key;
		$this->queryParameters["Tag.3.key"]=$tag3key;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getTag1value() {
		return $this->tag1value;
	}

	public function setTag1value($tag1value) {
		$this->tag1value = $tag1value;
		$this->queryParameters["Tag.1.value"]=$tag1value;
	}

	public function getEngine() {
		return $this->engine;
	}

	public function setEngine($engine) {
		$this->engine = $engine;
		$this->queryParameters["Engine"]=$engine;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getDBInstanceStatus() {
		return $this->dBInstanceStatus;
	}

	public function setDBInstanceStatus($dBInstanceStatus) {
		$this->dBInstanceStatus = $dBInstanceStatus;
		$this->queryParameters["DBInstanceStatus"]=$dBInstanceStatus;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getTag3value() {
		return $this->tag3value;
	}

	public function setTag3value($tag3value) {
		$this->tag3value = $tag3value;
		$this->queryParameters["Tag.3.value"]=$tag3value;
	}

	public function getproxyId() {
		return $this->proxyId;
	}

	public function setproxyId($proxyId) {
		$this->proxyId = $proxyId;
		$this->queryParameters["proxyId"]=$proxyId;
	}

	public function getTag5key() {
		return $this->tag5key;
	}

	public function setTag5key($tag5key) {
		$this->tag5key = $tag5key;
		$this->queryParameters["Tag.5.key"]=$tag5key;
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

	public function getTag5value() {
		return $this->tag5value;
	}

	public function setTag5value($tag5value) {
		$this->tag5value = $tag5value;
		$this->queryParameters["Tag.5.value"]=$tag5value;
	}

	public function getDBInstanceType() {
		return $this->dBInstanceType;
	}

	public function setDBInstanceType($dBInstanceType) {
		$this->dBInstanceType = $dBInstanceType;
		$this->queryParameters["DBInstanceType"]=$dBInstanceType;
	}

	public function getTags() {
		return $this->tags;
	}

	public function setTags($tags) {
		$this->tags = $tags;
		$this->queryParameters["Tags"]=$tags;
	}

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getTag1key() {
		return $this->tag1key;
	}

	public function setTag1key($tag1key) {
		$this->tag1key = $tag1key;
		$this->queryParameters["Tag.1.key"]=$tag1key;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getTag2value() {
		return $this->tag2value;
	}

	public function setTag2value($tag2value) {
		$this->tag2value = $tag2value;
		$this->queryParameters["Tag.2.value"]=$tag2value;
	}

	public function getTag4key() {
		return $this->tag4key;
	}

	public function setTag4key($tag4key) {
		$this->tag4key = $tag4key;
		$this->queryParameters["Tag.4.key"]=$tag4key;
	}

	public function getInstanceNetworkType() {
		return $this->instanceNetworkType;
	}

	public function setInstanceNetworkType($instanceNetworkType) {
		$this->instanceNetworkType = $instanceNetworkType;
		$this->queryParameters["InstanceNetworkType"]=$instanceNetworkType;
	}
	
}