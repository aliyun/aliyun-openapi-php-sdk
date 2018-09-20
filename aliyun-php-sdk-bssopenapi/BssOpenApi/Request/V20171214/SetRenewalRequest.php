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

class SetRenewalRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("BssOpenApi", "2017-12-14", "SetRenewal");
		$this->setMethod("POST");
	}

	private  $productCode;

	private  $instanceIDs;

	private  $subscriptionType;

	private  $renewalStatus;

	private  $renewalPeriodUnit;

	private  $renewalPeriod;

	private  $ownerId;

	private  $productType;

	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->queryParameters["ProductCode"]=$productCode;
	}

	public function getInstanceIDs() {
		return $this->instanceIDs;
	}

	public function setInstanceIDs($instanceIDs) {
		$this->instanceIDs = $instanceIDs;
		$this->queryParameters["InstanceIDs"]=$instanceIDs;
	}

	public function getSubscriptionType() {
		return $this->subscriptionType;
	}

	public function setSubscriptionType($subscriptionType) {
		$this->subscriptionType = $subscriptionType;
		$this->queryParameters["SubscriptionType"]=$subscriptionType;
	}

	public function getRenewalStatus() {
		return $this->renewalStatus;
	}

	public function setRenewalStatus($renewalStatus) {
		$this->renewalStatus = $renewalStatus;
		$this->queryParameters["RenewalStatus"]=$renewalStatus;
	}

	public function getRenewalPeriodUnit() {
		return $this->renewalPeriodUnit;
	}

	public function setRenewalPeriodUnit($renewalPeriodUnit) {
		$this->renewalPeriodUnit = $renewalPeriodUnit;
		$this->queryParameters["RenewalPeriodUnit"]=$renewalPeriodUnit;
	}

	public function getRenewalPeriod() {
		return $this->renewalPeriod;
	}

	public function setRenewalPeriod($renewalPeriod) {
		$this->renewalPeriod = $renewalPeriod;
		$this->queryParameters["RenewalPeriod"]=$renewalPeriod;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getProductType() {
		return $this->productType;
	}

	public function setProductType($productType) {
		$this->productType = $productType;
		$this->queryParameters["ProductType"]=$productType;
	}
	
}