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
namespace Domain_intl\Request\V20171218;

class SaveSingleTaskForCreatingOrderActivateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain-intl", "2017-12-18", "SaveSingleTaskForCreatingOrderActivate", "domain", "openAPI");
		$this->setMethod("POST");
	}

	private  $country;

	private  $subscriptionDuration;

	private  $permitPremiumActivation;

	private  $city;

	private  $dns2;

	private  $dns1;

	private  $registrantProfileId;

	private  $couponNo;

	private  $aliyunDns;

	private  $telExt;

	private  $province;

	private  $postalCode;

	private  $lang;

	private  $email;

	private  $address;

	private  $telArea;

	private  $domainName;

	private  $telephone;

	private  $trademarkDomainActivation;

	private  $useCoupon;

	private  $registrantOrganization;

	private  $promotionNo;

	private  $userClientIp;

	private  $enableDomainProxy;

	private  $registrantName;

	private  $usePromotion;

	public function getCountry() {
		return $this->country;
	}

	public function setCountry($country) {
		$this->country = $country;
		$this->queryParameters["Country"]=$country;
	}

	public function getSubscriptionDuration() {
		return $this->subscriptionDuration;
	}

	public function setSubscriptionDuration($subscriptionDuration) {
		$this->subscriptionDuration = $subscriptionDuration;
		$this->queryParameters["SubscriptionDuration"]=$subscriptionDuration;
	}

	public function getPermitPremiumActivation() {
		return $this->permitPremiumActivation;
	}

	public function setPermitPremiumActivation($permitPremiumActivation) {
		$this->permitPremiumActivation = $permitPremiumActivation;
		$this->queryParameters["PermitPremiumActivation"]=$permitPremiumActivation;
	}

	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
		$this->queryParameters["City"]=$city;
	}

	public function getDns2() {
		return $this->dns2;
	}

	public function setDns2($dns2) {
		$this->dns2 = $dns2;
		$this->queryParameters["Dns2"]=$dns2;
	}

	public function getDns1() {
		return $this->dns1;
	}

	public function setDns1($dns1) {
		$this->dns1 = $dns1;
		$this->queryParameters["Dns1"]=$dns1;
	}

	public function getRegistrantProfileId() {
		return $this->registrantProfileId;
	}

	public function setRegistrantProfileId($registrantProfileId) {
		$this->registrantProfileId = $registrantProfileId;
		$this->queryParameters["RegistrantProfileId"]=$registrantProfileId;
	}

	public function getCouponNo() {
		return $this->couponNo;
	}

	public function setCouponNo($couponNo) {
		$this->couponNo = $couponNo;
		$this->queryParameters["CouponNo"]=$couponNo;
	}

	public function getAliyunDns() {
		return $this->aliyunDns;
	}

	public function setAliyunDns($aliyunDns) {
		$this->aliyunDns = $aliyunDns;
		$this->queryParameters["AliyunDns"]=$aliyunDns;
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

	public function getPostalCode() {
		return $this->postalCode;
	}

	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
		$this->queryParameters["PostalCode"]=$postalCode;
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

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getTelephone() {
		return $this->telephone;
	}

	public function setTelephone($telephone) {
		$this->telephone = $telephone;
		$this->queryParameters["Telephone"]=$telephone;
	}

	public function getTrademarkDomainActivation() {
		return $this->trademarkDomainActivation;
	}

	public function setTrademarkDomainActivation($trademarkDomainActivation) {
		$this->trademarkDomainActivation = $trademarkDomainActivation;
		$this->queryParameters["TrademarkDomainActivation"]=$trademarkDomainActivation;
	}

	public function getUseCoupon() {
		return $this->useCoupon;
	}

	public function setUseCoupon($useCoupon) {
		$this->useCoupon = $useCoupon;
		$this->queryParameters["UseCoupon"]=$useCoupon;
	}

	public function getRegistrantOrganization() {
		return $this->registrantOrganization;
	}

	public function setRegistrantOrganization($registrantOrganization) {
		$this->registrantOrganization = $registrantOrganization;
		$this->queryParameters["RegistrantOrganization"]=$registrantOrganization;
	}

	public function getPromotionNo() {
		return $this->promotionNo;
	}

	public function setPromotionNo($promotionNo) {
		$this->promotionNo = $promotionNo;
		$this->queryParameters["PromotionNo"]=$promotionNo;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getEnableDomainProxy() {
		return $this->enableDomainProxy;
	}

	public function setEnableDomainProxy($enableDomainProxy) {
		$this->enableDomainProxy = $enableDomainProxy;
		$this->queryParameters["EnableDomainProxy"]=$enableDomainProxy;
	}

	public function getRegistrantName() {
		return $this->registrantName;
	}

	public function setRegistrantName($registrantName) {
		$this->registrantName = $registrantName;
		$this->queryParameters["RegistrantName"]=$registrantName;
	}

	public function getUsePromotion() {
		return $this->usePromotion;
	}

	public function setUsePromotion($usePromotion) {
		$this->usePromotion = $usePromotion;
		$this->queryParameters["UsePromotion"]=$usePromotion;
	}
	
}