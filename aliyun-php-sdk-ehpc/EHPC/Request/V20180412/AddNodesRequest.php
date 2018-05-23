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
namespace EHPC\Request\V20180412;

class AddNodesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "AddNodes", "ehs", "openAPI");
	}

	private  $autoRenewPeriod;

	private  $period;

	private  $imageId;

	private  $count;

	private  $clusterId;

	private  $computeSpotStrategy;

	private  $imageOwnerAlias;

	private  $periodUnit;

	private  $autoRenew;

	private  $ecsChargeType;

	private  $computeSpotPriceLimit;

	public function getAutoRenewPeriod() {
		return $this->autoRenewPeriod;
	}

	public function setAutoRenewPeriod($autoRenewPeriod) {
		$this->autoRenewPeriod = $autoRenewPeriod;
		$this->queryParameters["AutoRenewPeriod"]=$autoRenewPeriod;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getCount() {
		return $this->count;
	}

	public function setCount($count) {
		$this->count = $count;
		$this->queryParameters["Count"]=$count;
	}

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->queryParameters["ClusterId"]=$clusterId;
	}

	public function getComputeSpotStrategy() {
		return $this->computeSpotStrategy;
	}

	public function setComputeSpotStrategy($computeSpotStrategy) {
		$this->computeSpotStrategy = $computeSpotStrategy;
		$this->queryParameters["ComputeSpotStrategy"]=$computeSpotStrategy;
	}

	public function getImageOwnerAlias() {
		return $this->imageOwnerAlias;
	}

	public function setImageOwnerAlias($imageOwnerAlias) {
		$this->imageOwnerAlias = $imageOwnerAlias;
		$this->queryParameters["ImageOwnerAlias"]=$imageOwnerAlias;
	}

	public function getPeriodUnit() {
		return $this->periodUnit;
	}

	public function setPeriodUnit($periodUnit) {
		$this->periodUnit = $periodUnit;
		$this->queryParameters["PeriodUnit"]=$periodUnit;
	}

	public function getAutoRenew() {
		return $this->autoRenew;
	}

	public function setAutoRenew($autoRenew) {
		$this->autoRenew = $autoRenew;
		$this->queryParameters["AutoRenew"]=$autoRenew;
	}

	public function getEcsChargeType() {
		return $this->ecsChargeType;
	}

	public function setEcsChargeType($ecsChargeType) {
		$this->ecsChargeType = $ecsChargeType;
		$this->queryParameters["EcsChargeType"]=$ecsChargeType;
	}

	public function getComputeSpotPriceLimit() {
		return $this->computeSpotPriceLimit;
	}

	public function setComputeSpotPriceLimit($computeSpotPriceLimit) {
		$this->computeSpotPriceLimit = $computeSpotPriceLimit;
		$this->queryParameters["ComputeSpotPriceLimit"]=$computeSpotPriceLimit;
	}
	
}