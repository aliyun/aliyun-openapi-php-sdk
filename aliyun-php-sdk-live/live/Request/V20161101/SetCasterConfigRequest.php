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
namespace live\Request\V20161101;

class SetCasterConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "SetCasterConfig", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $sideOutputUrl;

	private  $casterId;

	private  $domainName;

	private  $programEffect;

	private  $programName;

	private  $ownerId;

	private  $recordConfig;

	private  $urgentMaterialId;

	private  $transcodeConfig;

	private  $delay;

	private  $casterName;

	private  $callbackUrl;

	public function getSideOutputUrl() {
		return $this->sideOutputUrl;
	}

	public function setSideOutputUrl($sideOutputUrl) {
		$this->sideOutputUrl = $sideOutputUrl;
		$this->queryParameters["SideOutputUrl"]=$sideOutputUrl;
	}

	public function getCasterId() {
		return $this->casterId;
	}

	public function setCasterId($casterId) {
		$this->casterId = $casterId;
		$this->queryParameters["CasterId"]=$casterId;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getProgramEffect() {
		return $this->programEffect;
	}

	public function setProgramEffect($programEffect) {
		$this->programEffect = $programEffect;
		$this->queryParameters["ProgramEffect"]=$programEffect;
	}

	public function getProgramName() {
		return $this->programName;
	}

	public function setProgramName($programName) {
		$this->programName = $programName;
		$this->queryParameters["ProgramName"]=$programName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getRecordConfig() {
		return $this->recordConfig;
	}

	public function setRecordConfig($recordConfig) {
		$this->recordConfig = $recordConfig;
		$this->queryParameters["RecordConfig"]=$recordConfig;
	}

	public function getUrgentMaterialId() {
		return $this->urgentMaterialId;
	}

	public function setUrgentMaterialId($urgentMaterialId) {
		$this->urgentMaterialId = $urgentMaterialId;
		$this->queryParameters["UrgentMaterialId"]=$urgentMaterialId;
	}

	public function getTranscodeConfig() {
		return $this->transcodeConfig;
	}

	public function setTranscodeConfig($transcodeConfig) {
		$this->transcodeConfig = $transcodeConfig;
		$this->queryParameters["TranscodeConfig"]=$transcodeConfig;
	}

	public function getDelay() {
		return $this->delay;
	}

	public function setDelay($delay) {
		$this->delay = $delay;
		$this->queryParameters["Delay"]=$delay;
	}

	public function getCasterName() {
		return $this->casterName;
	}

	public function setCasterName($casterName) {
		$this->casterName = $casterName;
		$this->queryParameters["CasterName"]=$casterName;
	}

	public function getCallbackUrl() {
		return $this->callbackUrl;
	}

	public function setCallbackUrl($callbackUrl) {
		$this->callbackUrl = $callbackUrl;
		$this->queryParameters["CallbackUrl"]=$callbackUrl;
	}
	
}