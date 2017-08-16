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

class QueryContactTemplateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2016-05-11", "QueryContactTemplate");
		$this->setMethod("POST");
	}

	private  $cCompany;

	private  $auditStatus;

	private  $defaultTemplate;

	private  $eCompany;

	private  $userClientIp;

	private  $pageSize;

	private  $lang;

	private  $pageNum;

	private  $contactTemplateId;

	private  $regType;

	public function getCCompany() {
		return $this->cCompany;
	}

	public function setCCompany($cCompany) {
		$this->cCompany = $cCompany;
		$this->queryParameters["CCompany"]=$cCompany;
	}

	public function getAuditStatus() {
		return $this->auditStatus;
	}

	public function setAuditStatus($auditStatus) {
		$this->auditStatus = $auditStatus;
		$this->queryParameters["AuditStatus"]=$auditStatus;
	}

	public function getDefaultTemplate() {
		return $this->defaultTemplate;
	}

	public function setDefaultTemplate($defaultTemplate) {
		$this->defaultTemplate = $defaultTemplate;
		$this->queryParameters["DefaultTemplate"]=$defaultTemplate;
	}

	public function getECompany() {
		return $this->eCompany;
	}

	public function setECompany($eCompany) {
		$this->eCompany = $eCompany;
		$this->queryParameters["ECompany"]=$eCompany;
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

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}

	public function getContactTemplateId() {
		return $this->contactTemplateId;
	}

	public function setContactTemplateId($contactTemplateId) {
		$this->contactTemplateId = $contactTemplateId;
		$this->queryParameters["ContactTemplateId"]=$contactTemplateId;
	}

	public function getRegType() {
		return $this->regType;
	}

	public function setRegType($regType) {
		$this->regType = $regType;
		$this->queryParameters["RegType"]=$regType;
	}
	
}