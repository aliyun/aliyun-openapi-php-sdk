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
namespace BssOpenApi\Request\V20171214;

class QueryAvailableInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("BssOpenApi", "2017-12-14", "QueryAvailableInstances");
		$this->setMethod("POST");
	}

	private  $productCode;

	private  $subscriptionType;

	private  $ownerId;

	private  $pageNum;

	private  $endTimeStart;

	private  $productType;

	private  $createTimeEnd;

	private  $instanceIDs;

	private  $endTimeEnd;

	private  $pageSize;

	private  $createTimeStart;

	private  $region;

	private  $renewStatus;

	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->queryParameters["ProductCode"]=$productCode;
	}

	public function getSubscriptionType() {
		return $this->subscriptionType;
	}

	public function setSubscriptionType($subscriptionType) {
		$this->subscriptionType = $subscriptionType;
		$this->queryParameters["SubscriptionType"]=$subscriptionType;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}

	public function getEndTimeStart() {
		return $this->endTimeStart;
	}

	public function setEndTimeStart($endTimeStart) {
		$this->endTimeStart = $endTimeStart;
		$this->queryParameters["EndTimeStart"]=$endTimeStart;
	}

	public function getProductType() {
		return $this->productType;
	}

	public function setProductType($productType) {
		$this->productType = $productType;
		$this->queryParameters["ProductType"]=$productType;
	}

	public function getCreateTimeEnd() {
		return $this->createTimeEnd;
	}

	public function setCreateTimeEnd($createTimeEnd) {
		$this->createTimeEnd = $createTimeEnd;
		$this->queryParameters["CreateTimeEnd"]=$createTimeEnd;
	}

	public function getInstanceIDs() {
		return $this->instanceIDs;
	}

	public function setInstanceIDs($instanceIDs) {
		$this->instanceIDs = $instanceIDs;
		$this->queryParameters["InstanceIDs"]=$instanceIDs;
	}

	public function getEndTimeEnd() {
		return $this->endTimeEnd;
	}

	public function setEndTimeEnd($endTimeEnd) {
		$this->endTimeEnd = $endTimeEnd;
		$this->queryParameters["EndTimeEnd"]=$endTimeEnd;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getCreateTimeStart() {
		return $this->createTimeStart;
	}

	public function setCreateTimeStart($createTimeStart) {
		$this->createTimeStart = $createTimeStart;
		$this->queryParameters["CreateTimeStart"]=$createTimeStart;
	}

	public function getRegion() {
		return $this->region;
	}

	public function setRegion($region) {
		$this->region = $region;
		$this->queryParameters["Region"]=$region;
	}

	public function getRenewStatus() {
		return $this->renewStatus;
	}

	public function setRenewStatus($renewStatus) {
		$this->renewStatus = $renewStatus;
		$this->queryParameters["RenewStatus"]=$renewStatus;
	}
	
}