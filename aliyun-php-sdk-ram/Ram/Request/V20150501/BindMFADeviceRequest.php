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
namespace Ram\Request\V20150501;

class BindMFADeviceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ram", "2015-05-01", "BindMFADevice");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $serialNumber;

	private  $authenticationCode2;

	private  $authenticationCode1;

	private  $userName;

	public function getSerialNumber() {
		return $this->serialNumber;
	}

	public function setSerialNumber($serialNumber) {
		$this->serialNumber = $serialNumber;
		$this->queryParameters["SerialNumber"]=$serialNumber;
	}

	public function getAuthenticationCode2() {
		return $this->authenticationCode2;
	}

	public function setAuthenticationCode2($authenticationCode2) {
		$this->authenticationCode2 = $authenticationCode2;
		$this->queryParameters["AuthenticationCode2"]=$authenticationCode2;
	}

	public function getAuthenticationCode1() {
		return $this->authenticationCode1;
	}

	public function setAuthenticationCode1($authenticationCode1) {
		$this->authenticationCode1 = $authenticationCode1;
		$this->queryParameters["AuthenticationCode1"]=$authenticationCode1;
	}

	public function getUserName() {
		return $this->userName;
	}

	public function setUserName($userName) {
		$this->userName = $userName;
		$this->queryParameters["UserName"]=$userName;
	}
	
}