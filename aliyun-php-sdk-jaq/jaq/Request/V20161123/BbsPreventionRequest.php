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
namespace jaq\Request\V20161123;

class BbsPreventionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("jaq", "2016-11-23", "BbsPrevention");
	}

	private  $callerName;

	private  $ip;

	private  $protocolVersion;

	private  $source;

	private  $phoneNumber;

	private  $email;

	private  $userId;

	private  $idType;

	private  $currentUrl;

	private  $agent;

	private  $cookie;

	private  $sessionId;

	private  $macAddress;

	private  $referer;

	private  $nickName;

	private  $companyName;

	private  $address;

	private  $jsToken;

	private  $sDKToken;

	private  $extendData;

	public function getCallerName() {
		return $this->callerName;
	}

	public function setCallerName($callerName) {
		$this->callerName = $callerName;
		$this->queryParameters["CallerName"]=$callerName;
	}

	public function getIp() {
		return $this->ip;
	}

	public function setIp($ip) {
		$this->ip = $ip;
		$this->queryParameters["Ip"]=$ip;
	}

	public function getProtocolVersion() {
		return $this->protocolVersion;
	}

	public function setProtocolVersion($protocolVersion) {
		$this->protocolVersion = $protocolVersion;
		$this->queryParameters["ProtocolVersion"]=$protocolVersion;
	}

	public function getSource() {
		return $this->source;
	}

	public function setSource($source) {
		$this->source = $source;
		$this->queryParameters["Source"]=$source;
	}

	public function getPhoneNumber() {
		return $this->phoneNumber;
	}

	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
		$this->queryParameters["PhoneNumber"]=$phoneNumber;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
		$this->queryParameters["Email"]=$email;
	}

	public function getUserId() {
		return $this->userId;
	}

	public function setUserId($userId) {
		$this->userId = $userId;
		$this->queryParameters["UserId"]=$userId;
	}

	public function getIdType() {
		return $this->idType;
	}

	public function setIdType($idType) {
		$this->idType = $idType;
		$this->queryParameters["IdType"]=$idType;
	}

	public function getCurrentUrl() {
		return $this->currentUrl;
	}

	public function setCurrentUrl($currentUrl) {
		$this->currentUrl = $currentUrl;
		$this->queryParameters["CurrentUrl"]=$currentUrl;
	}

	public function getAgent() {
		return $this->agent;
	}

	public function setAgent($agent) {
		$this->agent = $agent;
		$this->queryParameters["Agent"]=$agent;
	}

	public function getCookie() {
		return $this->cookie;
	}

	public function setCookie($cookie) {
		$this->cookie = $cookie;
		$this->queryParameters["Cookie"]=$cookie;
	}

	public function getSessionId() {
		return $this->sessionId;
	}

	public function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
		$this->queryParameters["SessionId"]=$sessionId;
	}

	public function getMacAddress() {
		return $this->macAddress;
	}

	public function setMacAddress($macAddress) {
		$this->macAddress = $macAddress;
		$this->queryParameters["MacAddress"]=$macAddress;
	}

	public function getReferer() {
		return $this->referer;
	}

	public function setReferer($referer) {
		$this->referer = $referer;
		$this->queryParameters["Referer"]=$referer;
	}

	public function getNickName() {
		return $this->nickName;
	}

	public function setNickName($nickName) {
		$this->nickName = $nickName;
		$this->queryParameters["NickName"]=$nickName;
	}

	public function getCompanyName() {
		return $this->companyName;
	}

	public function setCompanyName($companyName) {
		$this->companyName = $companyName;
		$this->queryParameters["CompanyName"]=$companyName;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->queryParameters["Address"]=$address;
	}

	public function getJsToken() {
		return $this->jsToken;
	}

	public function setJsToken($jsToken) {
		$this->jsToken = $jsToken;
		$this->queryParameters["JsToken"]=$jsToken;
	}

	public function getSDKToken() {
		return $this->sDKToken;
	}

	public function setSDKToken($sDKToken) {
		$this->sDKToken = $sDKToken;
		$this->queryParameters["SDKToken"]=$sDKToken;
	}

	public function getExtendData() {
		return $this->extendData;
	}

	public function setExtendData($extendData) {
		$this->extendData = $extendData;
		$this->queryParameters["ExtendData"]=$extendData;
	}
	
}