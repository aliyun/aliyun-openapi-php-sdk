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

class MuteAudioAllRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("rtc", "2018-01-11", "MuteAudioAll", "rtc", "openAPI");
		$this->setMethod("POST");
	}

	private  $ownerId;

	private  $participantId;

	private  $conferenceId;

	private  $appId;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getParticipantId() {
		return $this->participantId;
	}

	public function setParticipantId($participantId) {
		$this->participantId = $participantId;
		$this->queryParameters["ParticipantId"]=$participantId;
	}

	public function getConferenceId() {
		return $this->conferenceId;
	}

	public function setConferenceId($conferenceId) {
		$this->conferenceId = $conferenceId;
		$this->queryParameters["ConferenceId"]=$conferenceId;
	}

	public function getAppId() {
		return $this->appId;
	}

	public function setAppId($appId) {
		$this->appId = $appId;
		$this->queryParameters["AppId"]=$appId;
	}
	
}