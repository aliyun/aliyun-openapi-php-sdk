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

class CreateResourcePackageRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("BssOpenApi", "2017-12-14", "CreateResourcePackage");
		$this->setMethod("POST");
	}

	private  $duration;

	private  $productCode;

	private  $specification;

	private  $ownerId;

	private  $packageType;

	private  $effectiveDate;

	private  $pricingCycle;

	public function getDuration() {
		return $this->duration;
	}

	public function setDuration($duration) {
		$this->duration = $duration;
		$this->queryParameters["Duration"]=$duration;
	}

	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->queryParameters["ProductCode"]=$productCode;
	}

	public function getSpecification() {
		return $this->specification;
	}

	public function setSpecification($specification) {
		$this->specification = $specification;
		$this->queryParameters["Specification"]=$specification;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPackageType() {
		return $this->packageType;
	}

	public function setPackageType($packageType) {
		$this->packageType = $packageType;
		$this->queryParameters["PackageType"]=$packageType;
	}

	public function getEffectiveDate() {
		return $this->effectiveDate;
	}

	public function setEffectiveDate($effectiveDate) {
		$this->effectiveDate = $effectiveDate;
		$this->queryParameters["EffectiveDate"]=$effectiveDate;
	}

	public function getPricingCycle() {
		return $this->pricingCycle;
	}

	public function setPricingCycle($pricingCycle) {
		$this->pricingCycle = $pricingCycle;
		$this->queryParameters["PricingCycle"]=$pricingCycle;
	}
	
}