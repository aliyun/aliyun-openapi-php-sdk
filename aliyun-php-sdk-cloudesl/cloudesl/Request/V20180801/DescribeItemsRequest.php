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

class DescribeItemsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("cloudesl", "2018-08-01", "DescribeItems");
		$this->setMethod("POST");
	}

	private  $itemId;

	private  $bePromotion;

	private  $shelfCode;

	private  $itemTitle;

	private  $pageSize;

	private  $storeId;

	private  $skuId;

	private  $pageNumber;

	private  $itemBarCode;

	public function getItemId() {
		return $this->itemId;
	}

	public function setItemId($itemId) {
		$this->itemId = $itemId;
		$this->queryParameters["ItemId"]=$itemId;
	}

	public function getBePromotion() {
		return $this->bePromotion;
	}

	public function setBePromotion($bePromotion) {
		$this->bePromotion = $bePromotion;
		$this->queryParameters["BePromotion"]=$bePromotion;
	}

	public function getShelfCode() {
		return $this->shelfCode;
	}

	public function setShelfCode($shelfCode) {
		$this->shelfCode = $shelfCode;
		$this->queryParameters["ShelfCode"]=$shelfCode;
	}

	public function getItemTitle() {
		return $this->itemTitle;
	}

	public function setItemTitle($itemTitle) {
		$this->itemTitle = $itemTitle;
		$this->queryParameters["ItemTitle"]=$itemTitle;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
		$this->queryParameters["StoreId"]=$storeId;
	}

	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->queryParameters["SkuId"]=$skuId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getItemBarCode() {
		return $this->itemBarCode;
	}

	public function setItemBarCode($itemBarCode) {
		$this->itemBarCode = $itemBarCode;
		$this->queryParameters["ItemBarCode"]=$itemBarCode;
	}
	
}