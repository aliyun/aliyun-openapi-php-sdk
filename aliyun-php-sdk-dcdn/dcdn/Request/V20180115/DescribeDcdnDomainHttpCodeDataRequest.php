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
namespace dcdn\Request\V20180115;

class DescribeDcdnDomainHttpCodeDataRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("dcdn", "2018-01-15", "DescribeDcdnDomainHttpCodeData", "dcdn", "openAPI");
		$this->setMethod("POST");
	}

	private  $locationNameEn;

	private  $startTime;

	private  $ispNameEn;

	private  $domainName;

	private  $endTime;

	private  $ownerId;

	private  $interval;

	public function getLocationNameEn() {
		return $this->locationNameEn;
	}

	public function setLocationNameEn($locationNameEn) {
		$this->locationNameEn = $locationNameEn;
		$this->queryParameters["LocationNameEn"]=$locationNameEn;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getIspNameEn() {
		return $this->ispNameEn;
	}

	public function setIspNameEn($ispNameEn) {
		$this->ispNameEn = $ispNameEn;
		$this->queryParameters["IspNameEn"]=$ispNameEn;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getInterval() {
		return $this->interval;
	}

	public function setInterval($interval) {
		$this->interval = $interval;
		$this->queryParameters["Interval"]=$interval;
	}
	
}