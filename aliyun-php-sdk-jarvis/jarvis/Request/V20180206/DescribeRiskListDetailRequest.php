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

class DescribeRiskListDetailRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("jarvis", "2018-02-06", "DescribeRiskListDetail");
		$this->setMethod("POST");
	}

	private  $riskType;

	private  $sourceIp;

	private  $pageSize;

	private  $queryProduct;

	private  $currentPage;

	private  $riskDescribe;

	private  $lang;

	private  $srcUid;

	private  $sourceCode;

	private  $queryRegionId;

	private  $status;

	public function getriskType() {
		return $this->riskType;
	}

	public function setriskType($riskType) {
		$this->riskType = $riskType;
		$this->queryParameters["riskType"]=$riskType;
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

	public function getqueryProduct() {
		return $this->queryProduct;
	}

	public function setqueryProduct($queryProduct) {
		$this->queryProduct = $queryProduct;
		$this->queryParameters["queryProduct"]=$queryProduct;
	}

	public function getcurrentPage() {
		return $this->currentPage;
	}

	public function setcurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->queryParameters["currentPage"]=$currentPage;
	}

	public function getriskDescribe() {
		return $this->riskDescribe;
	}

	public function setriskDescribe($riskDescribe) {
		$this->riskDescribe = $riskDescribe;
		$this->queryParameters["riskDescribe"]=$riskDescribe;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getsrcUid() {
		return $this->srcUid;
	}

	public function setsrcUid($srcUid) {
		$this->srcUid = $srcUid;
		$this->queryParameters["srcUid"]=$srcUid;
	}

	public function getsourceCode() {
		return $this->sourceCode;
	}

	public function setsourceCode($sourceCode) {
		$this->sourceCode = $sourceCode;
		$this->queryParameters["sourceCode"]=$sourceCode;
	}

	public function getqueryRegionId() {
		return $this->queryRegionId;
	}

	public function setqueryRegionId($queryRegionId) {
		$this->queryRegionId = $queryRegionId;
		$this->queryParameters["queryRegionId"]=$queryRegionId;
	}

	public function getstatus() {
		return $this->status;
	}

	public function setstatus($status) {
		$this->status = $status;
		$this->queryParameters["status"]=$status;
	}
	
}