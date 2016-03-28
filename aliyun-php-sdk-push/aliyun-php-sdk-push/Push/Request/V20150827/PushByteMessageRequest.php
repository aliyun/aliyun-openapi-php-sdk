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
namespace Push\Request\V20150827;

class PushByteMessageRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2015-08-27", "PushByteMessage");
	}

	private  $appId;

	private  $sendType;

	private  $accounts;

	private  $deviceIds;

	private  $pushContent;

	public function getAppId() {
		return $this->appId;
	}

	public function setAppId($appId) {
		$this->appId = $appId;
		$this->queryParameters["AppId"]=$appId;
	}

	public function getSendType() {
		return $this->sendType;
	}

	public function setSendType($sendType) {
		$this->sendType = $sendType;
		$this->queryParameters["SendType"]=$sendType;
	}

	public function getAccounts() {
		return $this->accounts;
	}

	public function setAccounts($accounts) {
		$this->accounts = $accounts;
		$this->queryParameters["Accounts"]=$accounts;
	}

	public function getDeviceIds() {
		return $this->deviceIds;
	}

	public function setDeviceIds($deviceIds) {
		$this->deviceIds = $deviceIds;
		$this->queryParameters["DeviceIds"]=$deviceIds;
	}

	public function getPushContent() {
		return $this->pushContent;
	}

	public function setPushContent($pushContent) {
		$this->pushContent = $pushContent;
		$this->queryParameters["PushContent"]=$pushContent;
	}
	
}