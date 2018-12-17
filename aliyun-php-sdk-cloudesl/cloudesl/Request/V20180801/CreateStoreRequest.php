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

class CreateStoreRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("cloudesl", "2018-08-01", "CreateStore");
		$this->setMethod("POST");
	}

	private  $companyId;

	private  $comments;

	private  $phone;

	private  $storeName;

	private  $groups;

	private  $outId;

	private  $brand;

	private  $parentId;

	public function getCompanyId() {
		return $this->companyId;
	}

	public function setCompanyId($companyId) {
		$this->companyId = $companyId;
		$this->queryParameters["CompanyId"]=$companyId;
	}

	public function getComments() {
		return $this->comments;
	}

	public function setComments($comments) {
		$this->comments = $comments;
		$this->queryParameters["Comments"]=$comments;
	}

	public function getPhone() {
		return $this->phone;
	}

	public function setPhone($phone) {
		$this->phone = $phone;
		$this->queryParameters["Phone"]=$phone;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getGroups() {
		return $this->groups;
	}

	public function setGroups($groups) {
		$this->groups = $groups;
		$this->queryParameters["Groups"]=$groups;
	}

	public function getOutId() {
		return $this->outId;
	}

	public function setOutId($outId) {
		$this->outId = $outId;
		$this->queryParameters["OutId"]=$outId;
	}

	public function getBrand() {
		return $this->brand;
	}

	public function setBrand($brand) {
		$this->brand = $brand;
		$this->queryParameters["Brand"]=$brand;
	}

	public function getParentId() {
		return $this->parentId;
	}

	public function setParentId($parentId) {
		$this->parentId = $parentId;
		$this->queryParameters["ParentId"]=$parentId;
	}
	
}