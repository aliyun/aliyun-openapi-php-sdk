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

class DescribeStoresRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("cloudesl", "2018-08-01", "DescribeStores");
		$this->setMethod("POST");
	}

	private  $toDate;

	private  $pageSize;

	private  $storeName;

	private  $groups;

	private  $storeId;

	private  $brand;

	private  $pageNumber;

	private  $fromDate;

	public function getToDate() {
		return $this->toDate;
	}

	public function setToDate($toDate) {
		$this->toDate = $toDate;
		$this->queryParameters["ToDate"]=$toDate;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getGroups() {
		return $this->groups;
	}

	public function setGroups($groups) {
		$this->groups = $groups;
		$this->queryParameters["Groups"]=$groups;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
		$this->queryParameters["StoreId"]=$storeId;
	}

	public function getBrand() {
		return $this->brand;
	}

	public function setBrand($brand) {
		$this->brand = $brand;
		$this->queryParameters["Brand"]=$brand;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getFromDate() {
		return $this->fromDate;
	}

	public function setFromDate($fromDate) {
		$this->fromDate = $fromDate;
		$this->queryParameters["FromDate"]=$fromDate;
	}
	
}