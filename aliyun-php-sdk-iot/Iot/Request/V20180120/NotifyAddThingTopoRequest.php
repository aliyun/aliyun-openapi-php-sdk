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
namespace Iot\Request\V20180120;

class NotifyAddThingTopoRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Iot", "2018-01-20", "NotifyAddThingTopo");
		$this->setMethod("POST");
	}

	private  $gwProductKey;

	private  $gwDeviceName;

	private  $gwIotId;

	private  $deviceListStr;

	public function getGwProductKey() {
		return $this->gwProductKey;
	}

	public function setGwProductKey($gwProductKey) {
		$this->gwProductKey = $gwProductKey;
		$this->queryParameters["GwProductKey"]=$gwProductKey;
	}

	public function getGwDeviceName() {
		return $this->gwDeviceName;
	}

	public function setGwDeviceName($gwDeviceName) {
		$this->gwDeviceName = $gwDeviceName;
		$this->queryParameters["GwDeviceName"]=$gwDeviceName;
	}

	public function getGwIotId() {
		return $this->gwIotId;
	}

	public function setGwIotId($gwIotId) {
		$this->gwIotId = $gwIotId;
		$this->queryParameters["GwIotId"]=$gwIotId;
	}

	public function getDeviceListStr() {
		return $this->deviceListStr;
	}

	public function setDeviceListStr($deviceListStr) {
		$this->deviceListStr = $deviceListStr;
		$this->queryParameters["DeviceListStr"]=$deviceListStr;
	}
	
}