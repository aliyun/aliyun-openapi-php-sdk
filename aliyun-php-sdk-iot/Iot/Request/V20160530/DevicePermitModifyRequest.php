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
namespace Iot\Request\V20160530;

class DevicePermitModifyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Iot", "2016-05-30", "DevicePermitModify");
		$this->setMethod("POST");
	}

	private  $topicFullName;

	private  $deviceName;

	private  $productKey;

	private  $ruleId;

	private  $grantType;

	public function getTopicFullName() {
		return $this->topicFullName;
	}

	public function setTopicFullName($topicFullName) {
		$this->topicFullName = $topicFullName;
		$this->queryParameters["TopicFullName"]=$topicFullName;
	}

	public function getDeviceName() {
		return $this->deviceName;
	}

	public function setDeviceName($deviceName) {
		$this->deviceName = $deviceName;
		$this->queryParameters["DeviceName"]=$deviceName;
	}

	public function getProductKey() {
		return $this->productKey;
	}

	public function setProductKey($productKey) {
		$this->productKey = $productKey;
		$this->queryParameters["ProductKey"]=$productKey;
	}

	public function getRuleId() {
		return $this->ruleId;
	}

	public function setRuleId($ruleId) {
		$this->ruleId = $ruleId;
		$this->queryParameters["RuleId"]=$ruleId;
	}

	public function getGrantType() {
		return $this->grantType;
	}

	public function setGrantType($grantType) {
		$this->grantType = $grantType;
		$this->queryParameters["GrantType"]=$grantType;
	}
	
}