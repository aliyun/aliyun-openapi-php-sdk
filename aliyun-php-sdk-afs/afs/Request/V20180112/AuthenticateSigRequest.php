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
namespace afs\Request\V20180112;

class AuthenticateSigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("afs", "2018-01-12", "AuthenticateSig");
		$this->setMethod("POST");
	}

	private  $sig;

	private  $resourceOwnerId;

	private  $remoteIp;

	private  $sourceIp;

	private  $appKey;

	private  $sessionId;

	private  $token;

	private  $scene;

	public function getSig() {
		return $this->sig;
	}

	public function setSig($sig) {
		$this->sig = $sig;
		$this->queryParameters["Sig"]=$sig;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getRemoteIp() {
		return $this->remoteIp;
	}

	public function setRemoteIp($remoteIp) {
		$this->remoteIp = $remoteIp;
		$this->queryParameters["RemoteIp"]=$remoteIp;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getSessionId() {
		return $this->sessionId;
	}

	public function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
		$this->queryParameters["SessionId"]=$sessionId;
	}

	public function getToken() {
		return $this->token;
	}

	public function setToken($token) {
		$this->token = $token;
		$this->queryParameters["Token"]=$token;
	}

	public function getScene() {
		return $this->scene;
	}

	public function setScene($scene) {
		$this->scene = $scene;
		$this->queryParameters["Scene"]=$scene;
	}
	
}