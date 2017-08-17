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
namespace Sas_api\Request\V20170705;

class GetPhoneProfileRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Sas-api", "2017-07-05", "GetPhoneProfile");
		$this->setMethod("POST");
	}

	private  $phone;

	private  $sensType;

	private  $dataVersion;

	private  $businessType;

	public function getPhone() {
		return $this->phone;
	}

	public function setPhone($phone) {
		$this->phone = $phone;
		$this->queryParameters["Phone"]=$phone;
	}

	public function getSensType() {
		return $this->sensType;
	}

	public function setSensType($sensType) {
		$this->sensType = $sensType;
		$this->queryParameters["SensType"]=$sensType;
	}

	public function getDataVersion() {
		return $this->dataVersion;
	}

	public function setDataVersion($dataVersion) {
		$this->dataVersion = $dataVersion;
		$this->queryParameters["DataVersion"]=$dataVersion;
	}

	public function getBusinessType() {
		return $this->businessType;
	}

	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->queryParameters["BusinessType"]=$businessType;
	}
	
}