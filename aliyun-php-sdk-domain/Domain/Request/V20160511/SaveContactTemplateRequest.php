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

class SaveContactTemplateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2016-05-11", "SaveContactTemplate");
		$this->setMethod("POST");
	}

	private  $cCompany;

	private  $defaultTemplate;

	private  $telArea;

	private  $eCompany;

	private  $telMain;

	private  $cName;

	private  $cProvince;

	private  $eCity;

	private  $cCity;

	private  $regType;

	private  $eName;

	private  $telExt;

	private  $cVenu;

	private  $eProvince;

	private  $postalCode;

	private  $userClientIp;

	private  $cCountry;

	private  $lang;

	private  $eVenu;

	private  $email;

	private  $contactTemplateId;

	public function getCCompany() {
		return $this->cCompany;
	}

	public function setCCompany($cCompany) {
		$this->cCompany = $cCompany;
		$this->queryParameters["CCompany"]=$cCompany;
	}

	public function getDefaultTemplate() {
		return $this->defaultTemplate;
	}

	public function setDefaultTemplate($defaultTemplate) {
		$this->defaultTemplate = $defaultTemplate;
		$this->queryParameters["DefaultTemplate"]=$defaultTemplate;
	}

	public function getTelArea() {
		return $this->telArea;
	}

	public function setTelArea($telArea) {
		$this->telArea = $telArea;
		$this->queryParameters["TelArea"]=$telArea;
	}

	public function getECompany() {
		return $this->eCompany;
	}

	public function setECompany($eCompany) {
		$this->eCompany = $eCompany;
		$this->queryParameters["ECompany"]=$eCompany;
	}

	public function getTelMain() {
		return $this->telMain;
	}

	public function setTelMain($telMain) {
		$this->telMain = $telMain;
		$this->queryParameters["TelMain"]=$telMain;
	}

	public function getCName() {
		return $this->cName;
	}

	public function setCName($cName) {
		$this->cName = $cName;
		$this->queryParameters["CName"]=$cName;
	}

	public function getCProvince() {
		return $this->cProvince;
	}

	public function setCProvince($cProvince) {
		$this->cProvince = $cProvince;
		$this->queryParameters["CProvince"]=$cProvince;
	}

	public function getECity() {
		return $this->eCity;
	}

	public function setECity($eCity) {
		$this->eCity = $eCity;
		$this->queryParameters["ECity"]=$eCity;
	}

	public function getCCity() {
		return $this->cCity;
	}

	public function setCCity($cCity) {
		$this->cCity = $cCity;
		$this->queryParameters["CCity"]=$cCity;
	}

	public function getRegType() {
		return $this->regType;
	}

	public function setRegType($regType) {
		$this->regType = $regType;
		$this->queryParameters["RegType"]=$regType;
	}

	public function getEName() {
		return $this->eName;
	}

	public function setEName($eName) {
		$this->eName = $eName;
		$this->queryParameters["EName"]=$eName;
	}

	public function getTelExt() {
		return $this->telExt;
	}

	public function setTelExt($telExt) {
		$this->telExt = $telExt;
		$this->queryParameters["TelExt"]=$telExt;
	}

	public function getCVenu() {
		return $this->cVenu;
	}

	public function setCVenu($cVenu) {
		$this->cVenu = $cVenu;
		$this->queryParameters["CVenu"]=$cVenu;
	}

	public function getEProvince() {
		return $this->eProvince;
	}

	public function setEProvince($eProvince) {
		$this->eProvince = $eProvince;
		$this->queryParameters["EProvince"]=$eProvince;
	}

	public function getPostalCode() {
		return $this->postalCode;
	}

	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
		$this->queryParameters["PostalCode"]=$postalCode;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getCCountry() {
		return $this->cCountry;
	}

	public function setCCountry($cCountry) {
		$this->cCountry = $cCountry;
		$this->queryParameters["CCountry"]=$cCountry;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getEVenu() {
		return $this->eVenu;
	}

	public function setEVenu($eVenu) {
		$this->eVenu = $eVenu;
		$this->queryParameters["EVenu"]=$eVenu;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
		$this->queryParameters["Email"]=$email;
	}

	public function getContactTemplateId() {
		return $this->contactTemplateId;
	}

	public function setContactTemplateId($contactTemplateId) {
		$this->contactTemplateId = $contactTemplateId;
		$this->queryParameters["ContactTemplateId"]=$contactTemplateId;
	}
	
}