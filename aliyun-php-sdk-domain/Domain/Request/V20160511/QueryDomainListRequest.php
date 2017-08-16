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

class QueryDomainListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2016-05-11", "QueryDomainList");
		$this->setMethod("POST");
	}

	private  $productDomainType;

	private  $regStartDate;

	private  $orderKeyType;

	private  $groupId;

	private  $deadEndDate;

	private  $domainName;

	private  $startDate;

	private  $pageNum;

	private  $orderByType;

	private  $regEndDate;

	private  $endDate;

	private  $domainType;

	private  $deadStartDate;

	private  $userClientIp;

	private  $pageSize;

	private  $lang;

	private  $queryType;

	public function getProductDomainType() {
		return $this->productDomainType;
	}

	public function setProductDomainType($productDomainType) {
		$this->productDomainType = $productDomainType;
		$this->queryParameters["ProductDomainType"]=$productDomainType;
	}

	public function getRegStartDate() {
		return $this->regStartDate;
	}

	public function setRegStartDate($regStartDate) {
		$this->regStartDate = $regStartDate;
		$this->queryParameters["RegStartDate"]=$regStartDate;
	}

	public function getOrderKeyType() {
		return $this->orderKeyType;
	}

	public function setOrderKeyType($orderKeyType) {
		$this->orderKeyType = $orderKeyType;
		$this->queryParameters["OrderKeyType"]=$orderKeyType;
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getDeadEndDate() {
		return $this->deadEndDate;
	}

	public function setDeadEndDate($deadEndDate) {
		$this->deadEndDate = $deadEndDate;
		$this->queryParameters["DeadEndDate"]=$deadEndDate;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getStartDate() {
		return $this->startDate;
	}

	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->queryParameters["StartDate"]=$startDate;
	}

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}

	public function getOrderByType() {
		return $this->orderByType;
	}

	public function setOrderByType($orderByType) {
		$this->orderByType = $orderByType;
		$this->queryParameters["OrderByType"]=$orderByType;
	}

	public function getRegEndDate() {
		return $this->regEndDate;
	}

	public function setRegEndDate($regEndDate) {
		$this->regEndDate = $regEndDate;
		$this->queryParameters["RegEndDate"]=$regEndDate;
	}

	public function getEndDate() {
		return $this->endDate;
	}

	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->queryParameters["EndDate"]=$endDate;
	}

	public function getDomainType() {
		return $this->domainType;
	}

	public function setDomainType($domainType) {
		$this->domainType = $domainType;
		$this->queryParameters["DomainType"]=$domainType;
	}

	public function getDeadStartDate() {
		return $this->deadStartDate;
	}

	public function setDeadStartDate($deadStartDate) {
		$this->deadStartDate = $deadStartDate;
		$this->queryParameters["DeadStartDate"]=$deadStartDate;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getQueryType() {
		return $this->queryType;
	}

	public function setQueryType($queryType) {
		$this->queryType = $queryType;
		$this->queryParameters["QueryType"]=$queryType;
	}
	
}