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
namespace Crm\Request\V20150408;

class AddIdentityCertifiedForBidUserRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Crm", "2015-04-08", "AddIdentityCertifiedForBidUser");
		$this->setMethod("POST");
	}

	private  $bidType;

	private  $licenseNumber;

	private  $licenseType;

	private  $phone;

	private  $name;

	private  $pK;

	private  $isEnterprise;

	public function getBidType() {
		return $this->bidType;
	}

	public function setBidType($bidType) {
		$this->bidType = $bidType;
		$this->queryParameters["BidType"]=$bidType;
	}

	public function getLicenseNumber() {
		return $this->licenseNumber;
	}

	public function setLicenseNumber($licenseNumber) {
		$this->licenseNumber = $licenseNumber;
		$this->queryParameters["LicenseNumber"]=$licenseNumber;
	}

	public function getLicenseType() {
		return $this->licenseType;
	}

	public function setLicenseType($licenseType) {
		$this->licenseType = $licenseType;
		$this->queryParameters["LicenseType"]=$licenseType;
	}

	public function getPhone() {
		return $this->phone;
	}

	public function setPhone($phone) {
		$this->phone = $phone;
		$this->queryParameters["Phone"]=$phone;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getPK() {
		return $this->pK;
	}

	public function setPK($pK) {
		$this->pK = $pK;
		$this->queryParameters["PK"]=$pK;
	}

	public function getIsEnterprise() {
		return $this->isEnterprise;
	}

	public function setIsEnterprise($isEnterprise) {
		$this->isEnterprise = $isEnterprise;
		$this->queryParameters["IsEnterprise"]=$isEnterprise;
	}
	
}