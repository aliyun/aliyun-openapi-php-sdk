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
namespace rtc\Request\V20180111;

class CreateChannelTokenRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("rtc", "2018-01-11", "CreateChannelToken", "rtc", "openAPI");
		$this->setMethod("POST");
	}

	private  $sessionId;

	private  $uId;

	private  $ownerId;

	private  $nonce;

	private  $appId;

	private  $channelId;

	public function getSessionId() {
		return $this->sessionId;
	}

	public function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
		$this->queryParameters["SessionId"]=$sessionId;
	}

	public function getUId() {
		return $this->uId;
	}

	public function setUId($uId) {
		$this->uId = $uId;
		$this->queryParameters["UId"]=$uId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getNonce() {
		return $this->nonce;
	}

	public function setNonce($nonce) {
		$this->nonce = $nonce;
		$this->queryParameters["Nonce"]=$nonce;
	}

	public function getAppId() {
		return $this->appId;
	}

	public function setAppId($appId) {
		$this->appId = $appId;
		$this->queryParameters["AppId"]=$appId;
	}

	public function getChannelId() {
		return $this->channelId;
	}

	public function setChannelId($channelId) {
		$this->channelId = $channelId;
		$this->queryParameters["ChannelId"]=$channelId;
	}
	
}