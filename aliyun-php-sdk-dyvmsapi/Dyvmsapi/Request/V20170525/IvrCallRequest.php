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

class IvrCallRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dyvmsapi", "2017-05-25", "IvrCall");
		$this->setMethod("POST");
	}

	private  $byeCode;

	private  $MenuKeyMaps;

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $startTtsParams;

	private  $playTimes;

	private  $ownerId;

	private  $timeout;

	private  $startCode;

	private  $calledNumber;

	private  $calledShowNumber;

	private  $outId;

	private  $byeTtsParams;

	public function getByeCode() {
		return $this->byeCode;
	}

	public function setByeCode($byeCode) {
		$this->byeCode = $byeCode;
		$this->queryParameters["ByeCode"]=$byeCode;
	}

	public function getMenuKeyMaps() {
		return $this->MenuKeyMaps;
	}

	public function setMenuKeyMaps($MenuKeyMaps) {
		$this->MenuKeyMaps = $MenuKeyMaps;
		for ($i = 0; $i < count($MenuKeyMaps); $i ++) {	
			$this->queryParameters['MenuKeyMap.' . ($i + 1) . '.Key'] = $MenuKeyMaps[$i]['Key'];
			$this->queryParameters['MenuKeyMap.' . ($i + 1) . '.Code'] = $MenuKeyMaps[$i]['Code'];
			$this->queryParameters['MenuKeyMap.' . ($i + 1) . '.TtsParams'] = $MenuKeyMaps[$i]['TtsParams'];

		}
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

	public function getStartTtsParams() {
		return $this->startTtsParams;
	}

	public function setStartTtsParams($startTtsParams) {
		$this->startTtsParams = $startTtsParams;
		$this->queryParameters["StartTtsParams"]=$startTtsParams;
	}

	public function getPlayTimes() {
		return $this->playTimes;
	}

	public function setPlayTimes($playTimes) {
		$this->playTimes = $playTimes;
		$this->queryParameters["PlayTimes"]=$playTimes;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTimeout() {
		return $this->timeout;
	}

	public function setTimeout($timeout) {
		$this->timeout = $timeout;
		$this->queryParameters["Timeout"]=$timeout;
	}

	public function getStartCode() {
		return $this->startCode;
	}

	public function setStartCode($startCode) {
		$this->startCode = $startCode;
		$this->queryParameters["StartCode"]=$startCode;
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

	public function getByeTtsParams() {
		return $this->byeTtsParams;
	}

	public function setByeTtsParams($byeTtsParams) {
		$this->byeTtsParams = $byeTtsParams;
		$this->queryParameters["ByeTtsParams"]=$byeTtsParams;
	}
	
}