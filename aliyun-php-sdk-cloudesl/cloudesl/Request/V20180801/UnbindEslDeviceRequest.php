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

class UnbindEslDeviceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("cloudesl", "2018-08-01", "UnbindEslDevice");
		$this->setMethod("POST");
	}

	private  $eslBarCode;

	private  $storeId;

	private  $itemBarCode;

	public function getEslBarCode() {
		return $this->eslBarCode;
	}

	public function setEslBarCode($eslBarCode) {
		$this->eslBarCode = $eslBarCode;
		$this->queryParameters["EslBarCode"]=$eslBarCode;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
		$this->queryParameters["StoreId"]=$storeId;
	}

	public function getItemBarCode() {
		return $this->itemBarCode;
	}

	public function setItemBarCode($itemBarCode) {
		$this->itemBarCode = $itemBarCode;
		$this->queryParameters["ItemBarCode"]=$itemBarCode;
	}
	
}