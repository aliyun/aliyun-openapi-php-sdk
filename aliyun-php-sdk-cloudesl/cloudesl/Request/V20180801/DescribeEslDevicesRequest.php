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
namespace cloudesl\Request\V20180801;

class DescribeEslDevicesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("cloudesl", "2018-08-01", "DescribeEslDevices");
		$this->setMethod("POST");
	}

	private  $eslStatus;

	private  $toBatteryLevel;

	private  $storeId;

	private  $type;

	private  $mac;

	private  $pageNumber;

	private  $fromBatteryLevel;

	private  $shelfCode;

	private  $eslBarCode;

	private  $vendor;

	private  $pageSize;

	private  $beBind;

	private  $itemBarCode;

	public function getEslStatus() {
		return $this->eslStatus;
	}

	public function setEslStatus($eslStatus) {
		$this->eslStatus = $eslStatus;
		$this->queryParameters["EslStatus"]=$eslStatus;
	}

	public function getToBatteryLevel() {
		return $this->toBatteryLevel;
	}

	public function setToBatteryLevel($toBatteryLevel) {
		$this->toBatteryLevel = $toBatteryLevel;
		$this->queryParameters["ToBatteryLevel"]=$toBatteryLevel;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
		$this->queryParameters["StoreId"]=$storeId;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getMac() {
		return $this->mac;
	}

	public function setMac($mac) {
		$this->mac = $mac;
		$this->queryParameters["Mac"]=$mac;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getFromBatteryLevel() {
		return $this->fromBatteryLevel;
	}

	public function setFromBatteryLevel($fromBatteryLevel) {
		$this->fromBatteryLevel = $fromBatteryLevel;
		$this->queryParameters["FromBatteryLevel"]=$fromBatteryLevel;
	}

	public function getShelfCode() {
		return $this->shelfCode;
	}

	public function setShelfCode($shelfCode) {
		$this->shelfCode = $shelfCode;
		$this->queryParameters["ShelfCode"]=$shelfCode;
	}

	public function getEslBarCode() {
		return $this->eslBarCode;
	}

	public function setEslBarCode($eslBarCode) {
		$this->eslBarCode = $eslBarCode;
		$this->queryParameters["EslBarCode"]=$eslBarCode;
	}

	public function getVendor() {
		return $this->vendor;
	}

	public function setVendor($vendor) {
		$this->vendor = $vendor;
		$this->queryParameters["Vendor"]=$vendor;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getBeBind() {
		return $this->beBind;
	}

	public function setBeBind($beBind) {
		$this->beBind = $beBind;
		$this->queryParameters["BeBind"]=$beBind;
	}

	public function getItemBarCode() {
		return $this->itemBarCode;
	}

	public function setItemBarCode($itemBarCode) {
		$this->itemBarCode = $itemBarCode;
		$this->queryParameters["ItemBarCode"]=$itemBarCode;
	}
	
}