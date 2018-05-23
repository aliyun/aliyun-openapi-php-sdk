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

class SingleCallByTtsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dyvmsapi", "2017-05-25", "SingleCallByTts");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ttsCode;

	private  $playTimes;

	private  $ttsParam;

	private  $ownerId;

	private  $speed;

	private  $volume;

	private  $calledNumber;

	private  $calledShowNumber;

	private  $outId;

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

	public function getTtsCode() {
		return $this->ttsCode;
	}

	public function setTtsCode($ttsCode) {
		$this->ttsCode = $ttsCode;
		$this->queryParameters["TtsCode"]=$ttsCode;
	}

	public function getPlayTimes() {
		return $this->playTimes;
	}

	public function setPlayTimes($playTimes) {
		$this->playTimes = $playTimes;
		$this->queryParameters["PlayTimes"]=$playTimes;
	}

	public function getTtsParam() {
		return $this->ttsParam;
	}

	public function setTtsParam($ttsParam) {
		$this->ttsParam = $ttsParam;
		$this->queryParameters["TtsParam"]=$ttsParam;
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

	public function getVolume() {
		return $this->volume;
	}

	public function setVolume($volume) {
		$this->volume = $volume;
		$this->queryParameters["Volume"]=$volume;
	}

	public function getCalledNumber() {
		return $this->calledNumber;
	}

	public function setCalledNumber($calledNumber) {
		$this->calledNumber = $calledNumber;
		$this->queryParameters["CalledNumber"]=$calledNumber;
	}

	public function getCalledShowNumber() {
		return $this->calledShowNumber;
	}

	public function setCalledShowNumber($calledShowNumber) {
		$this->calledShowNumber = $calledShowNumber;
		$this->queryParameters["CalledShowNumber"]=$calledShowNumber;
	}

	public function getOutId() {
		return $this->outId;
	}

	public function setOutId($outId) {
		$this->outId = $outId;
		$this->queryParameters["OutId"]=$outId;
	}
	
}