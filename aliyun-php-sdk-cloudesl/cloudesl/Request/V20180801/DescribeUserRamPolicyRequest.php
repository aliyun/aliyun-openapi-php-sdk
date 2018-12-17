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

class DescribeUserRamPolicyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("cloudesl", "2018-08-01", "DescribeUserRamPolicy");
		$this->setMethod("POST");
	}

	private  $companyId;

	private  $userType;

	private  $storeId;

	public function getCompanyId() {
		return $this->companyId;
	}

	public function setCompanyId($companyId) {
		$this->companyId = $companyId;
		$this->queryParameters["CompanyId"]=$companyId;
	}

	public function getUserType() {
		return $this->userType;
	}

	public function setUserType($userType) {
		$this->userType = $userType;
		$this->queryParameters["UserType"]=$userType;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
		$this->queryParameters["StoreId"]=$storeId;
	}
	
}