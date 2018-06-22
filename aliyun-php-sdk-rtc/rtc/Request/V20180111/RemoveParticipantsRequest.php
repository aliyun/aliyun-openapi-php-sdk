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

class RemoveParticipantsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("rtc", "2018-01-11", "RemoveParticipants", "rtc", "openAPI");
		$this->setMethod("POST");
	}

	private  $ParticipantIdss;

	private  $ownerId;

	private  $conferenceId;

	private  $appId;

	public function getParticipantIdss() {
		return $this->ParticipantIdss;
	}

	public function setParticipantIdss($ParticipantIdss) {
		$this->ParticipantIdss = $ParticipantIdss;
		for ($i = 0; $i < count($ParticipantIdss); $i ++) {	
			$this->queryParameters["ParticipantIds.".($i+1)] = $ParticipantIdss[$i];
		}
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
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