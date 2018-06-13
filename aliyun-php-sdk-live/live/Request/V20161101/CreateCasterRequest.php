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
namespace live\Request\V20161101;

class CreateCasterRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "CreateCaster", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $casterTemplate;

	private  $expireTime;

	private  $normType;

	private  $casterName;

	private  $clientToken;

	private  $chargeType;

	private  $ownerId;

	private  $purchaseTime;

	public function getCasterTemplate() {
		return $this->casterTemplate;
	}

	public function setCasterTemplate($casterTemplate) {
		$this->casterTemplate = $casterTemplate;
		$this->queryParameters["CasterTemplate"]=$casterTemplate;
	}

	public function getExpireTime() {
		return $this->expireTime;
	}

	public function setExpireTime($expireTime) {
		$this->expireTime = $expireTime;
		$this->queryParameters["ExpireTime"]=$expireTime;
	}

	public function getNormType() {
		return $this->normType;
	}

	public function setNormType($normType) {
		$this->normType = $normType;
		$this->queryParameters["NormType"]=$normType;
	}

	public function getCasterName() {
		return $this->casterName;
	}

	public function setCasterName($casterName) {
		$this->casterName = $casterName;
		$this->queryParameters["CasterName"]=$casterName;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getChargeType() {
		return $this->chargeType;
	}

	public function setChargeType($chargeType) {
		$this->chargeType = $chargeType;
		$this->queryParameters["ChargeType"]=$chargeType;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPurchaseTime() {
		return $this->purchaseTime;
	}

	public function setPurchaseTime($purchaseTime) {
		$this->purchaseTime = $purchaseTime;
		$this->queryParameters["PurchaseTime"]=$purchaseTime;
	}
	
}