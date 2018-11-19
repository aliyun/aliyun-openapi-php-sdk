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

class CreateUserQuotaRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("BssOpenApi", "2017-12-14", "CreateUserQuota");
		$this->setMethod("POST");
	}

	private  $uid;

	private  $amount;

	private  $outBizId;

	private  $currency;

	private  $bid;

	public function getUid() {
		return $this->uid;
	}

	public function setUid($uid) {
		$this->uid = $uid;
		$this->queryParameters["Uid"]=$uid;
	}

	public function getAmount() {
		return $this->amount;
	}

	public function setAmount($amount) {
		$this->amount = $amount;
		$this->queryParameters["Amount"]=$amount;
	}

	public function getOutBizId() {
		return $this->outBizId;
	}

	public function setOutBizId($outBizId) {
		$this->outBizId = $outBizId;
		$this->queryParameters["OutBizId"]=$outBizId;
	}

	public function getCurrency() {
		return $this->currency;
	}

	public function setCurrency($currency) {
		$this->currency = $currency;
		$this->queryParameters["Currency"]=$currency;
	}

	public function getBid() {
		return $this->bid;
	}

	public function setBid($bid) {
		$this->bid = $bid;
		$this->queryParameters["Bid"]=$bid;
	}
	
}