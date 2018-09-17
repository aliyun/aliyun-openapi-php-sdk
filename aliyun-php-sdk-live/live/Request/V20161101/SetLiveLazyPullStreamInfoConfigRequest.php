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

class SetLiveLazyPullStreamInfoConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "SetLiveLazyPullStreamInfoConfig", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $appName;

	private  $pullAuthKey;

	private  $pullAuthType;

	private  $domainName;

	private  $pullDomainName;

	private  $ownerId;

	private  $pullAppName;

	private  $pullProtocol;

	public function getAppName() {
		return $this->appName;
	}

	public function setAppName($appName) {
		$this->appName = $appName;
		$this->queryParameters["AppName"]=$appName;
	}

	public function getPullAuthKey() {
		return $this->pullAuthKey;
	}

	public function setPullAuthKey($pullAuthKey) {
		$this->pullAuthKey = $pullAuthKey;
		$this->queryParameters["PullAuthKey"]=$pullAuthKey;
	}

	public function getPullAuthType() {
		return $this->pullAuthType;
	}

	public function setPullAuthType($pullAuthType) {
		$this->pullAuthType = $pullAuthType;
		$this->queryParameters["PullAuthType"]=$pullAuthType;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getPullDomainName() {
		return $this->pullDomainName;
	}

	public function setPullDomainName($pullDomainName) {
		$this->pullDomainName = $pullDomainName;
		$this->queryParameters["PullDomainName"]=$pullDomainName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPullAppName() {
		return $this->pullAppName;
	}

	public function setPullAppName($pullAppName) {
		$this->pullAppName = $pullAppName;
		$this->queryParameters["PullAppName"]=$pullAppName;
	}

	public function getPullProtocol() {
		return $this->pullProtocol;
	}

	public function setPullProtocol($pullProtocol) {
		$this->pullProtocol = $pullProtocol;
		$this->queryParameters["PullProtocol"]=$pullProtocol;
	}
	
}