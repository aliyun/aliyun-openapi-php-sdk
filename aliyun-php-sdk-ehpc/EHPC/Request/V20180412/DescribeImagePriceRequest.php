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
namespace EHPC\Request\V20180412;

class DescribeImagePriceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "DescribeImagePrice", "ehs", "openAPI");
	}

	private  $period;

	private  $amount;

	private  $imageId;

	private  $priceUnit;

	private  $skuCode;

	private  $orderType;

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getAmount() {
		return $this->amount;
	}

	public function setAmount($amount) {
		$this->amount = $amount;
		$this->queryParameters["Amount"]=$amount;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getPriceUnit() {
		return $this->priceUnit;
	}

	public function setPriceUnit($priceUnit) {
		$this->priceUnit = $priceUnit;
		$this->queryParameters["PriceUnit"]=$priceUnit;
	}

	public function getSkuCode() {
		return $this->skuCode;
	}

	public function setSkuCode($skuCode) {
		$this->skuCode = $skuCode;
		$this->queryParameters["SkuCode"]=$skuCode;
	}

	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->queryParameters["OrderType"]=$orderType;
	}
	
}