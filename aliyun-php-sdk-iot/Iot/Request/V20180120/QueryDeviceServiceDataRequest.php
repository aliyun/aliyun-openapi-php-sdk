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

class QueryDeviceServiceDataRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Iot", "2018-01-20", "QueryDeviceServiceData");
		$this->setMethod("POST");
	}

	private  $asc;

	private  $identifier;

	private  $iotId;

	private  $pageSize;

	private  $endTime;

	private  $deviceName;

	private  $startTime;

	private  $productKey;

	public function getAsc() {
		return $this->asc;
	}

	public function setAsc($asc) {
		$this->asc = $asc;
		$this->queryParameters["Asc"]=$asc;
	}

	public function getIdentifier() {
		return $this->identifier;
	}

	public function setIdentifier($identifier) {
		$this->identifier = $identifier;
		$this->queryParameters["Identifier"]=$identifier;
	}

	public function getIotId() {
		return $this->iotId;
	}

	public function setIotId($iotId) {
		$this->iotId = $iotId;
		$this->queryParameters["IotId"]=$iotId;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getDeviceName() {
		return $this->deviceName;
	}

	public function setDeviceName($deviceName) {
		$this->deviceName = $deviceName;
		$this->queryParameters["DeviceName"]=$deviceName;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getProductKey() {
		return $this->productKey;
	}

	public function setProductKey($productKey) {
		$this->productKey = $productKey;
		$this->queryParameters["ProductKey"]=$productKey;
	}
	
}