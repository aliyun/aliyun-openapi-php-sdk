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

class SetUserAlarmThresholdRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("BssOpenApi", "2017-12-14", "SetUserAlarmThreshold");
		$this->setMethod("POST");
	}

	private  $uid;

	private  $alarmType;

	private  $alarmThresholds;

	private  $bid;

	public function getUid() {
		return $this->uid;
	}

	public function setUid($uid) {
		$this->uid = $uid;
		$this->queryParameters["Uid"]=$uid;
	}

	public function getAlarmType() {
		return $this->alarmType;
	}

	public function setAlarmType($alarmType) {
		$this->alarmType = $alarmType;
		$this->queryParameters["AlarmType"]=$alarmType;
	}

	public function getAlarmThresholds() {
		return $this->alarmThresholds;
	}

	public function setAlarmThresholds($alarmThresholds) {
		$this->alarmThresholds = $alarmThresholds;
		$this->queryParameters["AlarmThresholds"]=$alarmThresholds;
	}

	public function getBid() {
		return $this->bid;
	}

	public function setBid($bid) {
		$this->bid = $bid;
		$this->queryParameters["Bid"]=$bid;
	}
	
}