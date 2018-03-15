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
namespace Cdn\Request\V20141111;

class SetWaitingRoomConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetWaitingRoomConfig");
	}

	private  $waitUrl;

	private  $securityToken;

	private  $waitUri;

	private  $maxQps;

	private  $maxTimeWait;

	private  $domainName;

	private  $allowPct;

	private  $gapTime;

	private  $ownerId;

	private  $version;

	public function getWaitUrl() {
		return $this->waitUrl;
	}

	public function setWaitUrl($waitUrl) {
		$this->waitUrl = $waitUrl;
		$this->queryParameters["WaitUrl"]=$waitUrl;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getWaitUri() {
		return $this->waitUri;
	}

	public function setWaitUri($waitUri) {
		$this->waitUri = $waitUri;
		$this->queryParameters["WaitUri"]=$waitUri;
	}

	public function getMaxQps() {
		return $this->maxQps;
	}

	public function setMaxQps($maxQps) {
		$this->maxQps = $maxQps;
		$this->queryParameters["MaxQps"]=$maxQps;
	}

	public function getMaxTimeWait() {
		return $this->maxTimeWait;
	}

	public function setMaxTimeWait($maxTimeWait) {
		$this->maxTimeWait = $maxTimeWait;
		$this->queryParameters["MaxTimeWait"]=$maxTimeWait;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getAllowPct() {
		return $this->allowPct;
	}

	public function setAllowPct($allowPct) {
		$this->allowPct = $allowPct;
		$this->queryParameters["AllowPct"]=$allowPct;
	}

	public function getGapTime() {
		return $this->gapTime;
	}

	public function setGapTime($gapTime) {
		$this->gapTime = $gapTime;
		$this->queryParameters["GapTime"]=$gapTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getVersion() {
		return $this->version;
	}

	public function setVersion($version) {
		$this->version = $version;
		$this->queryParameters["Version"]=$version;
	}
	
}