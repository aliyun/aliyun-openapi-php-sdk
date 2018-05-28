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

class CreateCpmcPunishFeedBackRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("jarvis", "2018-02-06", "CreateCpmcPunishFeedBack");
		$this->setMethod("POST");
	}

	private  $feedBack;

	private  $srcIP;

	private  $sourceIp;

	private  $dstPort;

	private  $protocolName;

	private  $srcPort;

	private  $punishType;

	private  $gmtCreate;

	private  $dstIP;

	private  $lang;

	private  $sourceCode;

	public function getFeedBack() {
		return $this->feedBack;
	}

	public function setFeedBack($feedBack) {
		$this->feedBack = $feedBack;
		$this->queryParameters["FeedBack"]=$feedBack;
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

	public function getProtocolName() {
		return $this->protocolName;
	}

	public function setProtocolName($protocolName) {
		$this->protocolName = $protocolName;
		$this->queryParameters["ProtocolName"]=$protocolName;
	}

	public function getSrcPort() {
		return $this->srcPort;
	}

	public function setSrcPort($srcPort) {
		$this->srcPort = $srcPort;
		$this->queryParameters["SrcPort"]=$srcPort;
	}

	public function getPunishType() {
		return $this->punishType;
	}

	public function setPunishType($punishType) {
		$this->punishType = $punishType;
		$this->queryParameters["PunishType"]=$punishType;
	}

	public function getGmtCreate() {
		return $this->gmtCreate;
	}

	public function setGmtCreate($gmtCreate) {
		$this->gmtCreate = $gmtCreate;
		$this->queryParameters["GmtCreate"]=$gmtCreate;
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

	public function getSourceCode() {
		return $this->sourceCode;
	}

	public function setSourceCode($sourceCode) {
		$this->sourceCode = $sourceCode;
		$this->queryParameters["SourceCode"]=$sourceCode;
	}
	
}