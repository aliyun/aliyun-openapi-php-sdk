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
namespace Mts\Request\V20140618;

class PlayInfoRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Mts", "2014-06-18", "PlayInfo", "mts", "openAPI");
		$this->setMethod("POST");
	}

	private  $playDomain;

	private  $resourceOwnerId;

	private  $formats;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $hlsUriToken;

	private  $ownerId;

	private  $mediaId;

	private  $rand;

	private  $authTimeout;

	private  $authInfo;

	public function getPlayDomain() {
		return $this->playDomain;
	}

	public function setPlayDomain($playDomain) {
		$this->playDomain = $playDomain;
		$this->queryParameters["PlayDomain"]=$playDomain;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getFormats() {
		return $this->formats;
	}

	public function setFormats($formats) {
		$this->formats = $formats;
		$this->queryParameters["Formats"]=$formats;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getHlsUriToken() {
		return $this->hlsUriToken;
	}

	public function setHlsUriToken($hlsUriToken) {
		$this->hlsUriToken = $hlsUriToken;
		$this->queryParameters["HlsUriToken"]=$hlsUriToken;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getMediaId() {
		return $this->mediaId;
	}

	public function setMediaId($mediaId) {
		$this->mediaId = $mediaId;
		$this->queryParameters["MediaId"]=$mediaId;
	}

	public function getRand() {
		return $this->rand;
	}

	public function setRand($rand) {
		$this->rand = $rand;
		$this->queryParameters["Rand"]=$rand;
	}

	public function getAuthTimeout() {
		return $this->authTimeout;
	}

	public function setAuthTimeout($authTimeout) {
		$this->authTimeout = $authTimeout;
		$this->queryParameters["AuthTimeout"]=$authTimeout;
	}

	public function getAuthInfo() {
		return $this->authInfo;
	}

	public function setAuthInfo($authInfo) {
		$this->authInfo = $authInfo;
		$this->queryParameters["AuthInfo"]=$authInfo;
	}
	
}