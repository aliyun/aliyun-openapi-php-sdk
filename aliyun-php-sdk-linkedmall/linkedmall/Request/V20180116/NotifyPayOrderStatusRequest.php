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

class NotifyPayOrderStatusRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("linkedmall", "2018-01-16", "NotifyPayOrderStatus", "linkedmall", "openAPI");
		$this->setMethod("POST");
	}

	private  $amount;

	private  $payTypes;

	private  $requestId;

	private  $operationDate;

	private  $channelId;

	public function getAmount() {
		return $this->amount;
	}

	public function setAmount($amount) {
		$this->amount = $amount;
		$this->queryParameters["Amount"]=$amount;
	}

	public function getPayTypes() {
		return $this->payTypes;
	}

	public function setPayTypes($payTypes) {
		$this->payTypes = $payTypes;
		$this->queryParameters["PayTypes"]=$payTypes;
	}

	public function getRequestId() {
		return $this->requestId;
	}

	public function setRequestId($requestId) {
		$this->requestId = $requestId;
		$this->queryParameters["RequestId"]=$requestId;
	}

	public function getOperationDate() {
		return $this->operationDate;
	}

	public function setOperationDate($operationDate) {
		$this->operationDate = $operationDate;
		$this->queryParameters["OperationDate"]=$operationDate;
	}

	public function getChannelId() {
		return $this->channelId;
	}

	public function setChannelId($channelId) {
		$this->channelId = $channelId;
		$this->queryParameters["ChannelId"]=$channelId;
	}
	
}