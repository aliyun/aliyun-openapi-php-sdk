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
namespace scdn\Request\V20171115;

class OpenScdnServiceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("scdn", "2017-11-15", "OpenScdnService");
		$this->setMethod("POST");
	}

	private  $endDate;

	private  $securityToken;

	private  $bandwidth;

	private  $domainCount;

	private  $ownerId;

	private  $protectType;

	private  $startDate;

	private  $elasticProtection;

	private  $dDoSBasic;

	private  $ccProtection;

	public function getEndDate() {
		return $this->endDate;
	}

	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->queryParameters["EndDate"]=$endDate;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getBandwidth() {
		return $this->bandwidth;
	}

	public function setBandwidth($bandwidth) {
		$this->bandwidth = $bandwidth;
		$this->queryParameters["Bandwidth"]=$bandwidth;
	}

	public function getDomainCount() {
		return $this->domainCount;
	}

	public function setDomainCount($domainCount) {
		$this->domainCount = $domainCount;
		$this->queryParameters["DomainCount"]=$domainCount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getProtectType() {
		return $this->protectType;
	}

	public function setProtectType($protectType) {
		$this->protectType = $protectType;
		$this->queryParameters["ProtectType"]=$protectType;
	}

	public function getStartDate() {
		return $this->startDate;
	}

	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->queryParameters["StartDate"]=$startDate;
	}

	public function getElasticProtection() {
		return $this->elasticProtection;
	}

	public function setElasticProtection($elasticProtection) {
		$this->elasticProtection = $elasticProtection;
		$this->queryParameters["ElasticProtection"]=$elasticProtection;
	}

	public function getDDoSBasic() {
		return $this->dDoSBasic;
	}

	public function setDDoSBasic($dDoSBasic) {
		$this->dDoSBasic = $dDoSBasic;
		$this->queryParameters["DDoSBasic"]=$dDoSBasic;
	}

	public function getCcProtection() {
		return $this->ccProtection;
	}

	public function setCcProtection($ccProtection) {
		$this->ccProtection = $ccProtection;
		$this->queryParameters["CcProtection"]=$ccProtection;
	}
	
}