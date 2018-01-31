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

class SaveRegistrantProfileRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "SaveRegistrantProfile");
		$this->setMethod("POST");
	}

	private  $country;

	private  $address;

	private  $telArea;

	private  $city;

	private  $registrantProfileId;

	private  $zhAddress;

	private  $registrantType;

	private  $telephone;

	private  $defaultRegistrantProfile;

	private  $zhCity;

	private  $zhProvince;

	private  $registrantOrganization;

	private  $telExt;

	private  $province;

	private  $zhRegistrantName;

	private  $postalCode;

	private  $userClientIp;

	private  $lang;

	private  $email;

	private  $registrantName;

	private  $zhRegistrantOrganization;

	public function getCountry() {
		return $this->country;
	}

	public function setCountry($country) {
		$this->country = $country;
		$this->queryParameters["Country"]=$country;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->queryParameters["Address"]=$address;
	}

	public function getTelArea() {
		return $this->telArea;
	}

	public function setTelArea($telArea) {
		$this->telArea = $telArea;
		$this->queryParameters["TelArea"]=$telArea;
	}

	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
		$this->queryParameters["City"]=$city;
	}

	public function getRegistrantProfileId() {
		return $this->registrantProfileId;
	}

	public function setRegistrantProfileId($registrantProfileId) {
		$this->registrantProfileId = $registrantProfileId;
		$this->queryParameters["RegistrantProfileId"]=$registrantProfileId;
	}

	public function getZhAddress() {
		return $this->zhAddress;
	}

	public function setZhAddress($zhAddress) {
		$this->zhAddress = $zhAddress;
		$this->queryParameters["ZhAddress"]=$zhAddress;
	}

	public function getRegistrantType() {
		return $this->registrantType;
	}

	public function setRegistrantType($registrantType) {
		$this->registrantType = $registrantType;
		$this->queryParameters["RegistrantType"]=$registrantType;
	}

	public function getTelephone() {
		return $this->telephone;
	}

	public function setTelephone($telephone) {
		$this->telephone = $telephone;
		$this->queryParameters["Telephone"]=$telephone;
	}

	public function getDefaultRegistrantProfile() {
		return $this->defaultRegistrantProfile;
	}

	public function setDefaultRegistrantProfile($defaultRegistrantProfile) {
		$this->defaultRegistrantProfile = $defaultRegistrantProfile;
		$this->queryParameters["DefaultRegistrantProfile"]=$defaultRegistrantProfile;
	}

	public function getZhCity() {
		return $this->zhCity;
	}

	public function setZhCity($zhCity) {
		$this->zhCity = $zhCity;
		$this->queryParameters["ZhCity"]=$zhCity;
	}

	public function getZhProvince() {
		return $this->zhProvince;
	}

	public function setZhProvince($zhProvince) {
		$this->zhProvince = $zhProvince;
		$this->queryParameters["ZhProvince"]=$zhProvince;
	}

	public function getRegistrantOrganization() {
		return $this->registrantOrganization;
	}

	public function setRegistrantOrganization($registrantOrganization) {
		$this->registrantOrganization = $registrantOrganization;
		$this->queryParameters["RegistrantOrganization"]=$registrantOrganization;
	}

	public function getTelExt() {
		return $this->telExt;
	}

	public function setTelExt($telExt) {
		$this->telExt = $telExt;
		$this->queryParameters["TelExt"]=$telExt;
	}

	public function getProvince() {
		return $this->province;
	}

	public function setProvince($province) {
		$this->province = $province;
		$this->queryParameters["Province"]=$province;
	}

	public function getZhRegistrantName() {
		return $this->zhRegistrantName;
	}

	public function setZhRegistrantName($zhRegistrantName) {
		$this->zhRegistrantName = $zhRegistrantName;
		$this->queryParameters["ZhRegistrantName"]=$zhRegistrantName;
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

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
		$this->queryParameters["Email"]=$email;
	}

	public function getRegistrantName() {
		return $this->registrantName;
	}

	public function setRegistrantName($registrantName) {
		$this->registrantName = $registrantName;
		$this->queryParameters["RegistrantName"]=$registrantName;
	}

	public function getZhRegistrantOrganization() {
		return $this->zhRegistrantOrganization;
	}

	public function setZhRegistrantOrganization($zhRegistrantOrganization) {
		$this->zhRegistrantOrganization = $zhRegistrantOrganization;
		$this->queryParameters["ZhRegistrantOrganization"]=$zhRegistrantOrganization;
	}
	
}