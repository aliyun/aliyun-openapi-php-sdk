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

class DescribeUidWhiteListGroupRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("jarvis", "2018-02-06", "DescribeUidWhiteListGroup");
		$this->setMethod("POST");
	}

	private  $sourceIp;

	private  $pageSize;

	private  $currentPage;

	private  $whiteListType;

	private  $dstIP;

	private  $lang;

	private  $srcUid;

	private  $status;

	private  $sourceCode;

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getCurrentPage() {
		return $this->currentPage;
	}

	public function setCurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->queryParameters["CurrentPage"]=$currentPage;
	}

	public function getWhiteListType() {
		return $this->whiteListType;
	}

	public function setWhiteListType($whiteListType) {
		$this->whiteListType = $whiteListType;
		$this->queryParameters["WhiteListType"]=$whiteListType;
	}

	public function getDstIP() {
		return $this->dstIP;
	}

	public function setDstIP($dstIP) {
		$this->dstIP = $dstIP;
		$this->queryParameters["DstIP"]=$dstIP;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getSrcUid() {
		return $this->srcUid;
	}

	public function setSrcUid($srcUid) {
		$this->srcUid = $srcUid;
		$this->queryParameters["SrcUid"]=$srcUid;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}

	public function getSourceCode() {
		return $this->sourceCode;
	}

	public function setSourceCode($sourceCode) {
		$this->sourceCode = $sourceCode;
		$this->queryParameters["SourceCode"]=$sourceCode;
	}
	
}