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
namespace Domain\Request\V20180129;

class QueryAdvancedDomainListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "QueryAdvancedDomainList");
		$this->setMethod("POST");
	}

	private  $productDomainType;

	private  $pageNum;

	private  $excluded;

	private  $startLength;

	private  $excludedSuffix;

	private  $pageSize;

	private  $lang;

	private  $excludedPrefix;

	private  $keyWord;

	private  $productDomainTypeSort;

	private  $endExpirationDate;

	private  $suffixs;

	private  $domainNameSort;

	private  $expirationDateSort;

	private  $startExpirationDate;

	private  $domainStatus;

	private  $domainGroupId;

	private  $keyWordSuffix;

	private  $keyWordPrefix;

	private  $tradeType;

	private  $endRegistrationDate;

	private  $form;

	private  $userClientIp;

	private  $registrationDateSort;

	private  $startRegistrationDate;

	private  $endLength;

	public function getProductDomainType() {
		return $this->productDomainType;
	}

	public function setProductDomainType($productDomainType) {
		$this->productDomainType = $productDomainType;
		$this->queryParameters["ProductDomainType"]=$productDomainType;
	}

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}

	public function getExcluded() {
		return $this->excluded;
	}

	public function setExcluded($excluded) {
		$this->excluded = $excluded;
		$this->queryParameters["Excluded"]=$excluded;
	}

	public function getStartLength() {
		return $this->startLength;
	}

	public function setStartLength($startLength) {
		$this->startLength = $startLength;
		$this->queryParameters["StartLength"]=$startLength;
	}

	public function getExcludedSuffix() {
		return $this->excludedSuffix;
	}

	public function setExcludedSuffix($excludedSuffix) {
		$this->excludedSuffix = $excludedSuffix;
		$this->queryParameters["ExcludedSuffix"]=$excludedSuffix;
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

	public function getExcludedPrefix() {
		return $this->excludedPrefix;
	}

	public function setExcludedPrefix($excludedPrefix) {
		$this->excludedPrefix = $excludedPrefix;
		$this->queryParameters["ExcludedPrefix"]=$excludedPrefix;
	}

	public function getKeyWord() {
		return $this->keyWord;
	}

	public function setKeyWord($keyWord) {
		$this->keyWord = $keyWord;
		$this->queryParameters["KeyWord"]=$keyWord;
	}

	public function getProductDomainTypeSort() {
		return $this->productDomainTypeSort;
	}

	public function setProductDomainTypeSort($productDomainTypeSort) {
		$this->productDomainTypeSort = $productDomainTypeSort;
		$this->queryParameters["ProductDomainTypeSort"]=$productDomainTypeSort;
	}

	public function getEndExpirationDate() {
		return $this->endExpirationDate;
	}

	public function setEndExpirationDate($endExpirationDate) {
		$this->endExpirationDate = $endExpirationDate;
		$this->queryParameters["EndExpirationDate"]=$endExpirationDate;
	}

	public function getSuffixs() {
		return $this->suffixs;
	}

	public function setSuffixs($suffixs) {
		$this->suffixs = $suffixs;
		$this->queryParameters["Suffixs"]=$suffixs;
	}

	public function getDomainNameSort() {
		return $this->domainNameSort;
	}

	public function setDomainNameSort($domainNameSort) {
		$this->domainNameSort = $domainNameSort;
		$this->queryParameters["DomainNameSort"]=$domainNameSort;
	}

	public function getExpirationDateSort() {
		return $this->expirationDateSort;
	}

	public function setExpirationDateSort($expirationDateSort) {
		$this->expirationDateSort = $expirationDateSort;
		$this->queryParameters["ExpirationDateSort"]=$expirationDateSort;
	}

	public function getStartExpirationDate() {
		return $this->startExpirationDate;
	}

	public function setStartExpirationDate($startExpirationDate) {
		$this->startExpirationDate = $startExpirationDate;
		$this->queryParameters["StartExpirationDate"]=$startExpirationDate;
	}

	public function getDomainStatus() {
		return $this->domainStatus;
	}

	public function setDomainStatus($domainStatus) {
		$this->domainStatus = $domainStatus;
		$this->queryParameters["DomainStatus"]=$domainStatus;
	}

	public function getDomainGroupId() {
		return $this->domainGroupId;
	}

	public function setDomainGroupId($domainGroupId) {
		$this->domainGroupId = $domainGroupId;
		$this->queryParameters["DomainGroupId"]=$domainGroupId;
	}

	public function getKeyWordSuffix() {
		return $this->keyWordSuffix;
	}

	public function setKeyWordSuffix($keyWordSuffix) {
		$this->keyWordSuffix = $keyWordSuffix;
		$this->queryParameters["KeyWordSuffix"]=$keyWordSuffix;
	}

	public function getKeyWordPrefix() {
		return $this->keyWordPrefix;
	}

	public function setKeyWordPrefix($keyWordPrefix) {
		$this->keyWordPrefix = $keyWordPrefix;
		$this->queryParameters["KeyWordPrefix"]=$keyWordPrefix;
	}

	public function getTradeType() {
		return $this->tradeType;
	}

	public function setTradeType($tradeType) {
		$this->tradeType = $tradeType;
		$this->queryParameters["TradeType"]=$tradeType;
	}

	public function getEndRegistrationDate() {
		return $this->endRegistrationDate;
	}

	public function setEndRegistrationDate($endRegistrationDate) {
		$this->endRegistrationDate = $endRegistrationDate;
		$this->queryParameters["EndRegistrationDate"]=$endRegistrationDate;
	}

	public function getForm() {
		return $this->form;
	}

	public function setForm($form) {
		$this->form = $form;
		$this->queryParameters["Form"]=$form;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getRegistrationDateSort() {
		return $this->registrationDateSort;
	}

	public function setRegistrationDateSort($registrationDateSort) {
		$this->registrationDateSort = $registrationDateSort;
		$this->queryParameters["RegistrationDateSort"]=$registrationDateSort;
	}

	public function getStartRegistrationDate() {
		return $this->startRegistrationDate;
	}

	public function setStartRegistrationDate($startRegistrationDate) {
		$this->startRegistrationDate = $startRegistrationDate;
		$this->queryParameters["StartRegistrationDate"]=$startRegistrationDate;
	}

	public function getEndLength() {
		return $this->endLength;
	}

	public function setEndLength($endLength) {
		$this->endLength = $endLength;
		$this->queryParameters["EndLength"]=$endLength;
	}
	
}