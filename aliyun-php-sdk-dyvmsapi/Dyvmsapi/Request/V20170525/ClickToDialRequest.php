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

class ClickToDialRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dyvmsapi", "2017-05-25", "ClickToDial");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $recordFlag;

	private  $ownerId;

	private  $callerShowNumber;

	private  $sessionTimeout;

	private  $calledNumber;

	private  $calledShowNumber;

	private  $outId;

	private  $asrFlag;

	private  $asrModelId;

	private  $callerNumber;

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

	public function getRecordFlag() {
		return $this->recordFlag;
	}

	public function setRecordFlag($recordFlag) {
		$this->recordFlag = $recordFlag;
		$this->queryParameters["RecordFlag"]=$recordFlag;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getCallerShowNumber() {
		return $this->callerShowNumber;
	}

	public function setCallerShowNumber($callerShowNumber) {
		$this->callerShowNumber = $callerShowNumber;
		$this->queryParameters["CallerShowNumber"]=$callerShowNumber;
	}

	public function getSessionTimeout() {
		return $this->sessionTimeout;
	}

	public function setSessionTimeout($sessionTimeout) {
		$this->sessionTimeout = $sessionTimeout;
		$this->queryParameters["SessionTimeout"]=$sessionTimeout;
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

	public function getAsrFlag() {
		return $this->asrFlag;
	}

	public function setAsrFlag($asrFlag) {
		$this->asrFlag = $asrFlag;
		$this->queryParameters["AsrFlag"]=$asrFlag;
	}

	public function getAsrModelId() {
		return $this->asrModelId;
	}

	public function setAsrModelId($asrModelId) {
		$this->asrModelId = $asrModelId;
		$this->queryParameters["AsrModelId"]=$asrModelId;
	}

	public function getCallerNumber() {
		return $this->callerNumber;
	}

	public function setCallerNumber($callerNumber) {
		$this->callerNumber = $callerNumber;
		$this->queryParameters["CallerNumber"]=$callerNumber;
	}
	
}