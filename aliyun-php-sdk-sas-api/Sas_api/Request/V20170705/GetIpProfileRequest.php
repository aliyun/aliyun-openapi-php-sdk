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
namespace Sas_api\Request\V20170705;

class GetIpProfileRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Sas-api", "2017-07-05", "GetIpProfile");
		$this->setMethod("POST");
	}

	private  $deviceIdMd5;

	private  $carrier;

	private  $os;

	private  $requestUrl;

	private  $ip;

	private  $userAgent;

	private  $connectionType;

	private  $sensType;

	private  $deviceType;

	private  $businessType;

	public function getDeviceIdMd5() {
		return $this->deviceIdMd5;
	}

	public function setDeviceIdMd5($deviceIdMd5) {
		$this->deviceIdMd5 = $deviceIdMd5;
		$this->queryParameters["DeviceIdMd5"]=$deviceIdMd5;
	}

	public function getCarrier() {
		return $this->carrier;
	}

	public function setCarrier($carrier) {
		$this->carrier = $carrier;
		$this->queryParameters["Carrier"]=$carrier;
	}

	public function getOs() {
		return $this->os;
	}

	public function setOs($os) {
		$this->os = $os;
		$this->queryParameters["Os"]=$os;
	}

	public function getRequestUrl() {
		return $this->requestUrl;
	}

	public function setRequestUrl($requestUrl) {
		$this->requestUrl = $requestUrl;
		$this->queryParameters["RequestUrl"]=$requestUrl;
	}

	public function getIp() {
		return $this->ip;
	}

	public function setIp($ip) {
		$this->ip = $ip;
		$this->queryParameters["Ip"]=$ip;
	}

	public function getUserAgent() {
		return $this->userAgent;
	}

	public function setUserAgent($userAgent) {
		$this->userAgent = $userAgent;
		$this->queryParameters["UserAgent"]=$userAgent;
	}

	public function getConnectionType() {
		return $this->connectionType;
	}

	public function setConnectionType($connectionType) {
		$this->connectionType = $connectionType;
		$this->queryParameters["ConnectionType"]=$connectionType;
	}

	public function getSensType() {
		return $this->sensType;
	}

	public function setSensType($sensType) {
		$this->sensType = $sensType;
		$this->queryParameters["SensType"]=$sensType;
	}

	public function getDeviceType() {
		return $this->deviceType;
	}

	public function setDeviceType($deviceType) {
		$this->deviceType = $deviceType;
		$this->queryParameters["DeviceType"]=$deviceType;
	}

	public function getBusinessType() {
		return $this->businessType;
	}

	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->queryParameters["BusinessType"]=$businessType;
	}
	
}