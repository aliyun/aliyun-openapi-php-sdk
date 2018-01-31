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
namespace Domain\Request\V20180129;

class CheckDomainRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "CheckDomain");
		$this->setMethod("POST");
	}

	private  $feeCurrency;

	private  $feePeriod;

	private  $domainName;

	private  $feeCommand;

	public function getFeeCurrency() {
		return $this->feeCurrency;
	}

	public function setFeeCurrency($feeCurrency) {
		$this->feeCurrency = $feeCurrency;
		$this->queryParameters["FeeCurrency"]=$feeCurrency;
	}

	public function getFeePeriod() {
		return $this->feePeriod;
	}

	public function setFeePeriod($feePeriod) {
		$this->feePeriod = $feePeriod;
		$this->queryParameters["FeePeriod"]=$feePeriod;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getFeeCommand() {
		return $this->feeCommand;
	}

	public function setFeeCommand($feeCommand) {
		$this->feeCommand = $feeCommand;
		$this->queryParameters["FeeCommand"]=$feeCommand;
	}
	
}