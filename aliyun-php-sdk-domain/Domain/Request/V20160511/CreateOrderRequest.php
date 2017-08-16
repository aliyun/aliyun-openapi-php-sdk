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
namespace Domain\Request\V20160511;

class CreateOrderRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2016-05-11", "CreateOrder");
		$this->setMethod("POST");
	}

	private  $SubOrderParams;

	public function getSubOrderParams() {
		return $this->SubOrderParams;
	}

	public function setSubOrderParams($SubOrderParams) {
		$this->SubOrderParams = $SubOrderParams;
		for ($i = 0; $i < count($SubOrderParams); $i ++) {	
			$this->queryParameters['SubOrderParam.' . ($i + 1) . '.SaleID'] = $SubOrderParams[$i]['SaleID'];
			$this->queryParameters['SubOrderParam.' . ($i + 1) . '.RelatedName'] = $SubOrderParams[$i]['RelatedName'];
			$this->queryParameters['SubOrderParam.' . ($i + 1) . '.Action'] = $SubOrderParams[$i]['Action'];
			$this->queryParameters['SubOrderParam.' . ($i + 1) . '.Period'] = $SubOrderParams[$i]['Period'];
			$this->queryParameters['SubOrderParam.' . ($i + 1) . '.DomainTemplateID'] = $SubOrderParams[$i]['DomainTemplateID'];

		}
	}
	
}