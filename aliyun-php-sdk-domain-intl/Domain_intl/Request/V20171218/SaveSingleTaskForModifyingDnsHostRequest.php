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
namespace Domain_intl\Request\V20171218;

class SaveSingleTaskForModifyingDnsHostRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain-intl", "2017-12-18", "SaveSingleTaskForModifyingDnsHost", "domain", "openAPI");
		$this->setMethod("POST");
	}

	private  $instanceId;

	private  $Ips;

	private  $dnsName;

	private  $lang;

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getIps() {
		return $this->Ips;
	}

	public function setIps($Ips) {
		$this->Ips = $Ips;
		for ($i = 0; $i < count($Ips); $i ++) {	
			$this->queryParameters["Ip.".($i+1)] = $Ips[$i];
		}
	}

	public function getDnsName() {
		return $this->dnsName;
	}

	public function setDnsName($dnsName) {
		$this->dnsName = $dnsName;
		$this->queryParameters["DnsName"]=$dnsName;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}
	
}