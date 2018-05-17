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
namespace pvtz\Request\V20180101;

class AddZoneRecordRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("pvtz", "2018-01-01", "AddZoneRecord", "pvtz", "openAPI");
		$this->setMethod("POST");
	}

	private  $rr;

	private  $userClientIp;

	private  $zoneId;

	private  $lang;

	private  $type;

	private  $priority;

	private  $ttl;

	private  $value;

	public function getRr() {
		return $this->rr;
	}

	public function setRr($rr) {
		$this->rr = $rr;
		$this->queryParameters["Rr"]=$rr;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getPriority() {
		return $this->priority;
	}

	public function setPriority($priority) {
		$this->priority = $priority;
		$this->queryParameters["Priority"]=$priority;
	}

	public function getTtl() {
		return $this->ttl;
	}

	public function setTtl($ttl) {
		$this->ttl = $ttl;
		$this->queryParameters["Ttl"]=$ttl;
	}

	public function getValue() {
		return $this->value;
	}

	public function setValue($value) {
		$this->value = $value;
		$this->queryParameters["Value"]=$value;
	}
	
}