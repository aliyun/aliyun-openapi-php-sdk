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
namespace Alidns\Request\V20150109;

class UpdateDomainRecordRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Alidns", "2015-01-09", "UpdateDomainRecord");
	}

	private  $lang;

	private  $userClientIp;

	private  $recordId;

	private  $rR;

	private  $type;

	private  $value;

	private  $tTL;

	private  $priority;

	private  $line;

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getRecordId() {
		return $this->recordId;
	}

	public function setRecordId($recordId) {
		$this->recordId = $recordId;
		$this->queryParameters["RecordId"]=$recordId;
	}

	public function getRR() {
		return $this->rR;
	}

	public function setRR($rR) {
		$this->rR = $rR;
		$this->queryParameters["RR"]=$rR;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getValue() {
		return $this->value;
	}

	public function setValue($value) {
		$this->value = $value;
		$this->queryParameters["Value"]=$value;
	}

	public function getTTL() {
		return $this->tTL;
	}

	public function setTTL($tTL) {
		$this->tTL = $tTL;
		$this->queryParameters["TTL"]=$tTL;
	}

	public function getPriority() {
		return $this->priority;
	}

	public function setPriority($priority) {
		$this->priority = $priority;
		$this->queryParameters["Priority"]=$priority;
	}

	public function getLine() {
		return $this->line;
	}

	public function setLine($line) {
		$this->line = $line;
		$this->queryParameters["Line"]=$line;
	}
	
}