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

class QueryResourcePackageInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("BssOpenApi", "2017-12-14", "QueryResourcePackageInstances");
		$this->setMethod("POST");
	}

	private  $expiryTimeEnd;

	private  $productCode;

	private  $pageSize;

	private  $ownerId;

	private  $expiryTimeStart;

	private  $pageNum;

	public function getExpiryTimeEnd() {
		return $this->expiryTimeEnd;
	}

	public function setExpiryTimeEnd($expiryTimeEnd) {
		$this->expiryTimeEnd = $expiryTimeEnd;
		$this->queryParameters["ExpiryTimeEnd"]=$expiryTimeEnd;
	}

	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->queryParameters["ProductCode"]=$productCode;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getExpiryTimeStart() {
		return $this->expiryTimeStart;
	}

	public function setExpiryTimeStart($expiryTimeStart) {
		$this->expiryTimeStart = $expiryTimeStart;
		$this->queryParameters["ExpiryTimeStart"]=$expiryTimeStart;
	}

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}
	
}