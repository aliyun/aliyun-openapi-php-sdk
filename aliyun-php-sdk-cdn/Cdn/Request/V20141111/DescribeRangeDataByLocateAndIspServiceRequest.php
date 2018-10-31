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

class DescribeRangeDataByLocateAndIspServiceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeRangeDataByLocateAndIspService");
		$this->setMethod("POST");
	}

	private  $ispNames;

	private  $securityToken;

	private  $domainNames;

	private  $locationNames;

	private  $endTime;

	private  $startTime;

	private  $ownerId;

	public function getIspNames() {
		return $this->ispNames;
	}

	public function setIspNames($ispNames) {
		$this->ispNames = $ispNames;
		$this->queryParameters["IspNames"]=$ispNames;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getDomainNames() {
		return $this->domainNames;
	}

	public function setDomainNames($domainNames) {
		$this->domainNames = $domainNames;
		$this->queryParameters["DomainNames"]=$domainNames;
	}

	public function getLocationNames() {
		return $this->locationNames;
	}

	public function setLocationNames($locationNames) {
		$this->locationNames = $locationNames;
		$this->queryParameters["LocationNames"]=$locationNames;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getstartTime() {
		return $this->startTime;
	}

	public function setstartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["startTime"]=$startTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}