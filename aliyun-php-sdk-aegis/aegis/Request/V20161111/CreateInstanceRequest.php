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
namespace aegis\Request\V20161111;

class CreateInstanceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("aegis", "2016-11-11", "CreateInstance", "vipaegis", "openAPI");
		$this->setMethod("POST");
	}

	private  $duration;

	private  $isAutoRenew;

	private  $clientToken;

	private  $vmNumber;

	private  $ownerId;

	private  $versionCode;

	private  $pricingCycle;

	private  $autoRenewDuration;

	public function getDuration() {
		return $this->duration;
	}

	public function setDuration($duration) {
		$this->duration = $duration;
		$this->queryParameters["Duration"]=$duration;
	}

	public function getIsAutoRenew() {
		return $this->isAutoRenew;
	}

	public function setIsAutoRenew($isAutoRenew) {
		$this->isAutoRenew = $isAutoRenew;
		$this->queryParameters["IsAutoRenew"]=$isAutoRenew;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getVmNumber() {
		return $this->vmNumber;
	}

	public function setVmNumber($vmNumber) {
		$this->vmNumber = $vmNumber;
		$this->queryParameters["VmNumber"]=$vmNumber;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getVersionCode() {
		return $this->versionCode;
	}

	public function setVersionCode($versionCode) {
		$this->versionCode = $versionCode;
		$this->queryParameters["VersionCode"]=$versionCode;
	}

	public function getPricingCycle() {
		return $this->pricingCycle;
	}

	public function setPricingCycle($pricingCycle) {
		$this->pricingCycle = $pricingCycle;
		$this->queryParameters["PricingCycle"]=$pricingCycle;
	}

	public function getAutoRenewDuration() {
		return $this->autoRenewDuration;
	}

	public function setAutoRenewDuration($autoRenewDuration) {
		$this->autoRenewDuration = $autoRenewDuration;
		$this->queryParameters["AutoRenewDuration"]=$autoRenewDuration;
	}
	
}