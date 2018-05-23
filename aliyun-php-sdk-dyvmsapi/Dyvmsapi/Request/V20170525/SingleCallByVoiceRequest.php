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
namespace Dyvmsapi\Request\V20170525;

class SingleCallByVoiceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dyvmsapi", "2017-05-25", "SingleCallByVoice");
		$this->setMethod("POST");
	}

	private  $volume;

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $calledNumber;

	private  $voiceCode;

	private  $calledShowNumber;

	private  $playTimes;

	private  $outId;

	private  $ownerId;

	private  $speed;

	public function getVolume() {
		return $this->volume;
	}

	public function setVolume($volume) {
		$this->volume = $volume;
		$this->queryParameters["Volume"]=$volume;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getCalledNumber() {
		return $this->calledNumber;
	}

	public function setCalledNumber($calledNumber) {
		$this->calledNumber = $calledNumber;
		$this->queryParameters["CalledNumber"]=$calledNumber;
	}

	public function getVoiceCode() {
		return $this->voiceCode;
	}

	public function setVoiceCode($voiceCode) {
		$this->voiceCode = $voiceCode;
		$this->queryParameters["VoiceCode"]=$voiceCode;
	}

	public function getCalledShowNumber() {
		return $this->calledShowNumber;
	}

	public function setCalledShowNumber($calledShowNumber) {
		$this->calledShowNumber = $calledShowNumber;
		$this->queryParameters["CalledShowNumber"]=$calledShowNumber;
	}

	public function getPlayTimes() {
		return $this->playTimes;
	}

	public function setPlayTimes($playTimes) {
		$this->playTimes = $playTimes;
		$this->queryParameters["PlayTimes"]=$playTimes;
	}

	public function getOutId() {
		return $this->outId;
	}

	public function setOutId($outId) {
		$this->outId = $outId;
		$this->queryParameters["OutId"]=$outId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getSpeed() {
		return $this->speed;
	}

	public function setSpeed($speed) {
		$this->speed = $speed;
		$this->queryParameters["Speed"]=$speed;
	}
	
}