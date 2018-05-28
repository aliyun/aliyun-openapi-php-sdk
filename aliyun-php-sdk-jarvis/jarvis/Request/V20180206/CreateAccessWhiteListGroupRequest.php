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

class CreateAccessWhiteListGroupRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("jarvis", "2018-02-06", "CreateAccessWhiteListGroup");
		$this->setMethod("POST");
	}

	private  $note;

	private  $resourceOwnerId;

	private  $srcIP;

	private  $sourceIp;

	private  $dstPort;

	private  $instanceIdList;

	private  $liveTime;

	private  $productName;

	private  $whiteListType;

	private  $lang;

	private  $sourceCode;

	public function getNote() {
		return $this->note;
	}

	public function setNote($note) {
		$this->note = $note;
		$this->queryParameters["Note"]=$note;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

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

	public function getDstPort() {
		return $this->dstPort;
	}

	public function setDstPort($dstPort) {
		$this->dstPort = $dstPort;
		$this->queryParameters["DstPort"]=$dstPort;
	}

	public function getInstanceIdList() {
		return $this->instanceIdList;
	}

	public function setInstanceIdList($instanceIdList) {
		$this->instanceIdList = $instanceIdList;
		$this->queryParameters["InstanceIdList"]=$instanceIdList;
	}

	public function getLiveTime() {
		return $this->liveTime;
	}

	public function setLiveTime($liveTime) {
		$this->liveTime = $liveTime;
		$this->queryParameters["LiveTime"]=$liveTime;
	}

	public function getProductName() {
		return $this->productName;
	}

	public function setProductName($productName) {
		$this->productName = $productName;
		$this->queryParameters["ProductName"]=$productName;
	}

	public function getWhiteListType() {
		return $this->whiteListType;
	}

	public function setWhiteListType($whiteListType) {
		$this->whiteListType = $whiteListType;
		$this->queryParameters["WhiteListType"]=$whiteListType;
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