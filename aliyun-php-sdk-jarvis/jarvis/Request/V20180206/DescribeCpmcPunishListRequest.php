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
namespace jarvis\Request\V20180206;

class DescribeCpmcPunishListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("jarvis", "2018-02-06", "DescribeCpmcPunishList");
		$this->setMethod("POST");
	}

	private  $srcIP;

	private  $sourceIp;

	private  $pageSize;

	private  $currentPage;

	private  $punishStatus;

	private  $lang;

	private  $sourceCode;

	public function getSrcIP() {
		return $this->srcIP;
	}

	public function setSrcIP($srcIP) {
		$this->srcIP = $srcIP;
		$this->queryParameters["SrcIP"]=$srcIP;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getpageSize() {
		return $this->pageSize;
	}

	public function setpageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["pageSize"]=$pageSize;
	}

	public function getcurrentPage() {
		return $this->currentPage;
	}

	public function setcurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->queryParameters["currentPage"]=$currentPage;
	}

	public function getPunishStatus() {
		return $this->punishStatus;
	}

	public function setPunishStatus($punishStatus) {
		$this->punishStatus = $punishStatus;
		$this->queryParameters["PunishStatus"]=$punishStatus;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getSourceCode() {
		return $this->sourceCode;
	}

	public function setSourceCode($sourceCode) {
		$this->sourceCode = $sourceCode;
		$this->queryParameters["SourceCode"]=$sourceCode;
	}
	
}