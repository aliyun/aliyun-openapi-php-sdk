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

class DescribeUserOperationLogRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("cloudesl", "2018-08-01", "DescribeUserOperationLog");
		$this->setMethod("POST");
	}

	private  $operateUserId;

	private  $itemTitle;

	private  $operateStatus;

	private  $storeId;

	private  $reverse;

	private  $pageNumber;

	private  $fromDate;

	private  $itemId;

	private  $toDate;

	private  $eslBarCode;

	private  $pageSize;

	private  $operateType;

	private  $itemBarCode;

	public function getOperateUserId() {
		return $this->operateUserId;
	}

	public function setOperateUserId($operateUserId) {
		$this->operateUserId = $operateUserId;
		$this->queryParameters["OperateUserId"]=$operateUserId;
	}

	public function getItemTitle() {
		return $this->itemTitle;
	}

	public function setItemTitle($itemTitle) {
		$this->itemTitle = $itemTitle;
		$this->queryParameters["ItemTitle"]=$itemTitle;
	}

	public function getOperateStatus() {
		return $this->operateStatus;
	}

	public function setOperateStatus($operateStatus) {
		$this->operateStatus = $operateStatus;
		$this->queryParameters["OperateStatus"]=$operateStatus;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
		$this->queryParameters["StoreId"]=$storeId;
	}

	public function getReverse() {
		return $this->reverse;
	}

	public function setReverse($reverse) {
		$this->reverse = $reverse;
		$this->queryParameters["Reverse"]=$reverse;
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

	public function getItemId() {
		return $this->itemId;
	}

	public function setItemId($itemId) {
		$this->itemId = $itemId;
		$this->queryParameters["ItemId"]=$itemId;
	}

	public function getToDate() {
		return $this->toDate;
	}

	public function setToDate($toDate) {
		$this->toDate = $toDate;
		$this->queryParameters["ToDate"]=$toDate;
	}

	public function getEslBarCode() {
		return $this->eslBarCode;
	}

	public function setEslBarCode($eslBarCode) {
		$this->eslBarCode = $eslBarCode;
		$this->queryParameters["EslBarCode"]=$eslBarCode;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getOperateType() {
		return $this->operateType;
	}

	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->queryParameters["OperateType"]=$operateType;
	}

	public function getItemBarCode() {
		return $this->itemBarCode;
	}

	public function setItemBarCode($itemBarCode) {
		$this->itemBarCode = $itemBarCode;
		$this->queryParameters["ItemBarCode"]=$itemBarCode;
	}
	
}