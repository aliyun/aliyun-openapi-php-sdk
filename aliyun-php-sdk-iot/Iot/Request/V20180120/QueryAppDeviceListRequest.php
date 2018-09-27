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

class QueryAppDeviceListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Iot", "2018-01-20", "QueryAppDeviceList");
		$this->setMethod("POST");
	}

	private  $ProductKeyLists;

	private  $CategoryKeyLists;

	private  $pageSize;

	private  $currentPage;

	private  $appKey;

	private  $TagLists;

	public function getProductKeyLists() {
		return $this->ProductKeyLists;
	}

	public function setProductKeyLists($ProductKeyLists) {
		$this->ProductKeyLists = $ProductKeyLists;
		for ($i = 0; $i < count($ProductKeyLists); $i ++) {	
			$this->queryParameters["ProductKeyList.".($i+1)] = $ProductKeyLists[$i];
		}
	}

	public function getCategoryKeyLists() {
		return $this->CategoryKeyLists;
	}

	public function setCategoryKeyLists($CategoryKeyLists) {
		$this->CategoryKeyLists = $CategoryKeyLists;
		for ($i = 0; $i < count($CategoryKeyLists); $i ++) {	
			$this->queryParameters["CategoryKeyList.".($i+1)] = $CategoryKeyLists[$i];
		}
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getCurrentPage() {
		return $this->currentPage;
	}

	public function setCurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->queryParameters["CurrentPage"]=$currentPage;
	}

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getTagLists() {
		return $this->TagLists;
	}

	public function setTagLists($TagLists) {
		$this->TagLists = $TagLists;
		for ($i = 0; $i < count($TagLists); $i ++) {	
			$this->queryParameters['TagList.' . ($i + 1) . '.TagName'] = $TagLists[$i]['TagName'];
			$this->queryParameters['TagList.' . ($i + 1) . '.TagValue'] = $TagLists[$i]['TagValue'];

		}
	}
	
}