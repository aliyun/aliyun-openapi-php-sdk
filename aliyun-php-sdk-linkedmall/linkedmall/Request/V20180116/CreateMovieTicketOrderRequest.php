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
namespace linkedmall\Request\V20180116;

class CreateMovieTicketOrderRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("linkedmall", "2018-01-16", "CreateMovieTicketOrder", "linkedmall", "openAPI");
	}

	private  $bizId;

	private  $bizUid;

	private  $outTradeId;

	private  $lockSeatAppKey;

	private  $extJson;

	public function getBizId() {
		return $this->bizId;
	}

	public function setBizId($bizId) {
		$this->bizId = $bizId;
		$this->queryParameters["BizId"]=$bizId;
	}

	public function getBizUid() {
		return $this->bizUid;
	}

	public function setBizUid($bizUid) {
		$this->bizUid = $bizUid;
		$this->queryParameters["BizUid"]=$bizUid;
	}

	public function getOutTradeId() {
		return $this->outTradeId;
	}

	public function setOutTradeId($outTradeId) {
		$this->outTradeId = $outTradeId;
		$this->queryParameters["OutTradeId"]=$outTradeId;
	}

	public function getLockSeatAppKey() {
		return $this->lockSeatAppKey;
	}

	public function setLockSeatAppKey($lockSeatAppKey) {
		$this->lockSeatAppKey = $lockSeatAppKey;
		$this->queryParameters["LockSeatAppKey"]=$lockSeatAppKey;
	}

	public function getExtJson() {
		return $this->extJson;
	}

	public function setExtJson($extJson) {
		$this->extJson = $extJson;
		$this->queryParameters["ExtJson"]=$extJson;
	}
	
}