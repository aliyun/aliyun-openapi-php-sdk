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

class SaveTaskForUpdatingContactByTemplateIdRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2016-05-11", "SaveTaskForUpdatingContactByTemplateId");
		$this->setMethod("POST");
	}

	private  $saleId;

	private  $contactType;

	private  $userClientIp;

	private  $domainName;

	private  $addTransferLock;

	private  $lang;

	private  $contactTemplateId;

	public function getSaleId() {
		return $this->saleId;
	}

	public function setSaleId($saleId) {
		$this->saleId = $saleId;
		$this->queryParameters["SaleId"]=$saleId;
	}

	public function getContactType() {
		return $this->contactType;
	}

	public function setContactType($contactType) {
		$this->contactType = $contactType;
		$this->queryParameters["ContactType"]=$contactType;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getAddTransferLock() {
		return $this->addTransferLock;
	}

	public function setAddTransferLock($addTransferLock) {
		$this->addTransferLock = $addTransferLock;
		$this->queryParameters["AddTransferLock"]=$addTransferLock;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getContactTemplateId() {
		return $this->contactTemplateId;
	}

	public function setContactTemplateId($contactTemplateId) {
		$this->contactTemplateId = $contactTemplateId;
		$this->queryParameters["ContactTemplateId"]=$contactTemplateId;
	}
	
}