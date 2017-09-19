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
namespace Ons\Request\V20170918;

class OnsMessageTraceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ons", "2017-09-18", "OnsMessageTrace");
		$this->setMethod("POST");
	}

	private  $preventCache;

	private  $onsRegionId;

	private  $onsPlatform;

	private  $topic;

	private  $msgId;

	public function getPreventCache() {
		return $this->preventCache;
	}

	public function setPreventCache($preventCache) {
		$this->preventCache = $preventCache;
		$this->queryParameters["PreventCache"]=$preventCache;
	}

	public function getOnsRegionId() {
		return $this->onsRegionId;
	}

	public function setOnsRegionId($onsRegionId) {
		$this->onsRegionId = $onsRegionId;
		$this->queryParameters["OnsRegionId"]=$onsRegionId;
	}

	public function getOnsPlatform() {
		return $this->onsPlatform;
	}

	public function setOnsPlatform($onsPlatform) {
		$this->onsPlatform = $onsPlatform;
		$this->queryParameters["OnsPlatform"]=$onsPlatform;
	}

	public function getTopic() {
		return $this->topic;
	}

	public function setTopic($topic) {
		$this->topic = $topic;
		$this->queryParameters["Topic"]=$topic;
	}

	public function getMsgId() {
		return $this->msgId;
	}

	public function setMsgId($msgId) {
		$this->msgId = $msgId;
		$this->queryParameters["MsgId"]=$msgId;
	}
	
}