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

class DescribePriceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "DescribePrice", "ehs", "openAPI");
	}

	private  $priceUnit;

	private  $Commoditiess;

	private  $chargeType;

	private  $orderType;

	public function getPriceUnit() {
		return $this->priceUnit;
	}

	public function setPriceUnit($priceUnit) {
		$this->priceUnit = $priceUnit;
		$this->queryParameters["PriceUnit"]=$priceUnit;
	}

	public function getCommoditiess() {
		return $this->Commoditiess;
	}

	public function setCommoditiess($Commoditiess) {
		$this->Commoditiess = $Commoditiess;
		for ($i = 0; $i < count($Commoditiess); $i ++) {	
			$this->queryParameters['Commodities.' . ($i + 1) . '.Amount'] = $Commoditiess[$i]['Amount'];
			$this->queryParameters['Commodities.' . ($i + 1) . '.Period'] = $Commoditiess[$i]['Period'];
			$this->queryParameters['Commodities.' . ($i + 1) . '.NodeType'] = $Commoditiess[$i]['NodeType'];
			$this->queryParameters['Commodities.' . ($i + 1) . '.SystemDiskCategory'] = $Commoditiess[$i]['SystemDiskCategory'];
			$this->queryParameters['Commodities.' . ($i + 1) . '.SystemDiskSize'] = $Commoditiess[$i]['SystemDiskSize'];
			$this->queryParameters['Commodities.' . ($i + 1) . '.InstanceType'] = $Commoditiess[$i]['InstanceType'];
			$this->queryParameters['Commodities.' . ($i + 1) . '.NetworkType'] = $Commoditiess[$i]['NetworkType'];

		}
	}

	public function getChargeType() {
		return $this->chargeType;
	}

	public function setChargeType($chargeType) {
		$this->chargeType = $chargeType;
		$this->queryParameters["ChargeType"]=$chargeType;
	}

	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->queryParameters["OrderType"]=$orderType;
	}
	
}