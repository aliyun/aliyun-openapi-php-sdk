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
namespace Iot\Request\V20170420;

class ApplyDeviceWithNamesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Iot", "2017-04-20", "ApplyDeviceWithNames");
		$this->setMethod("POST");
	}

	private  $DeviceNames;

	private  $productKey;

	public function getDeviceNames() {
		return $this->DeviceNames;
	}

	public function setDeviceNames($DeviceNames) {
		$this->DeviceNames = $DeviceNames;
		for ($i = 0; $i < count($DeviceNames); $i ++) {	
			$this->queryParameters["DeviceName.".($i+1)] = $DeviceNames[$i];
		}
	}

	public function getProductKey() {
		return $this->productKey;
	}

	public function setProductKey($productKey) {
		$this->productKey = $productKey;
		$this->queryParameters["ProductKey"]=$productKey;
	}
	
}