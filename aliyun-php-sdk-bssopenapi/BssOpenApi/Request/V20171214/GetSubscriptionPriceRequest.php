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

class GetSubscriptionPriceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("BssOpenApi", "2017-12-14", "GetSubscriptionPrice");
		$this->setMethod("POST");
	}

	private  $servicePeriodQuantity;

	private  $productCode;

	private  $instanceId;

	private  $quantity;

	private  $servicePeriodUnit;

	private  $subscriptionType;

	private  $ModuleLists;

	private  $ownerId;

	private  $region;

	private  $productType;

	private  $orderType;

	public function getServicePeriodQuantity() {
		return $this->servicePeriodQuantity;
	}

	public function setServicePeriodQuantity($servicePeriodQuantity) {
		$this->servicePeriodQuantity = $servicePeriodQuantity;
		$this->queryParameters["ServicePeriodQuantity"]=$servicePeriodQuantity;
	}

	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->queryParameters["ProductCode"]=$productCode;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->queryParameters["Quantity"]=$quantity;
	}

	public function getServicePeriodUnit() {
		return $this->servicePeriodUnit;
	}

	public function setServicePeriodUnit($servicePeriodUnit) {
		$this->servicePeriodUnit = $servicePeriodUnit;
		$this->queryParameters["ServicePeriodUnit"]=$servicePeriodUnit;
	}

	public function getSubscriptionType() {
		return $this->subscriptionType;
	}

	public function setSubscriptionType($subscriptionType) {
		$this->subscriptionType = $subscriptionType;
		$this->queryParameters["SubscriptionType"]=$subscriptionType;
	}

	public function getModuleLists() {
		return $this->ModuleLists;
	}

	public function setModuleLists($ModuleLists) {
		$this->ModuleLists = $ModuleLists;
		for ($i = 0; $i < count($ModuleLists); $i ++) {	
			$this->queryParameters['ModuleList.' . ($i + 1) . '.ModuleCode'] = $ModuleLists[$i]['ModuleCode'];
			$this->queryParameters['ModuleList.' . ($i + 1) . '.ModuleStatus'] = $ModuleLists[$i]['ModuleStatus'];
			$this->queryParameters['ModuleList.' . ($i + 1) . '.Tag'] = $ModuleLists[$i]['Tag'];
			$this->queryParameters['ModuleList.' . ($i + 1) . '.Config'] = $ModuleLists[$i]['Config'];

		}
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getRegion() {
		return $this->region;
	}

	public function setRegion($region) {
		$this->region = $region;
		$this->queryParameters["Region"]=$region;
	}

	public function getProductType() {
		return $this->productType;
	}

	public function setProductType($productType) {
		$this->productType = $productType;
		$this->queryParameters["ProductType"]=$productType;
	}

	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->queryParameters["OrderType"]=$orderType;
	}
	
}