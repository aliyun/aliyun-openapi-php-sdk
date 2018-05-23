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
namespace Drds\Request\V20171016;

class CreateDrdsInstanceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Drds", "2017-10-16", "CreateDrdsInstance");
		$this->setMethod("POST");
	}

	private  $quantity;

	private  $description;

	private  $specification;

	private  $type;

	private  $vswitchId;

	private  $isHa;

	private  $instanceSeries;

	private  $vpcId;

	private  $zoneId;

	private  $payType;

	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->queryParameters["Quantity"]=$quantity;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getSpecification() {
		return $this->specification;
	}

	public function setSpecification($specification) {
		$this->specification = $specification;
		$this->queryParameters["Specification"]=$specification;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getVswitchId() {
		return $this->vswitchId;
	}

	public function setVswitchId($vswitchId) {
		$this->vswitchId = $vswitchId;
		$this->queryParameters["VswitchId"]=$vswitchId;
	}

	public function getisHa() {
		return $this->isHa;
	}

	public function setisHa($isHa) {
		$this->isHa = $isHa;
		$this->queryParameters["isHa"]=$isHa;
	}

	public function getinstanceSeries() {
		return $this->instanceSeries;
	}

	public function setinstanceSeries($instanceSeries) {
		$this->instanceSeries = $instanceSeries;
		$this->queryParameters["instanceSeries"]=$instanceSeries;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getPayType() {
		return $this->payType;
	}

	public function setPayType($payType) {
		$this->payType = $payType;
		$this->queryParameters["PayType"]=$payType;
	}
	
}