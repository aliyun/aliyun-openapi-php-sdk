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
namespace afs\Request\V20180112;

class SetEarlyWarningRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("afs", "2018-01-12", "SetEarlyWarning");
		$this->setMethod("POST");
	}

	private  $timeEnd;

	private  $resourceOwnerId;

	private  $warnOpen;

	private  $sourceIp;

	private  $channel;

	private  $title;

	private  $timeOpen;

	private  $timeBegin;

	private  $frequency;

	public function getTimeEnd() {
		return $this->timeEnd;
	}

	public function setTimeEnd($timeEnd) {
		$this->timeEnd = $timeEnd;
		$this->queryParameters["TimeEnd"]=$timeEnd;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getWarnOpen() {
		return $this->warnOpen;
	}

	public function setWarnOpen($warnOpen) {
		$this->warnOpen = $warnOpen;
		$this->queryParameters["WarnOpen"]=$warnOpen;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getChannel() {
		return $this->channel;
	}

	public function setChannel($channel) {
		$this->channel = $channel;
		$this->queryParameters["Channel"]=$channel;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->queryParameters["Title"]=$title;
	}

	public function getTimeOpen() {
		return $this->timeOpen;
	}

	public function setTimeOpen($timeOpen) {
		$this->timeOpen = $timeOpen;
		$this->queryParameters["TimeOpen"]=$timeOpen;
	}

	public function getTimeBegin() {
		return $this->timeBegin;
	}

	public function setTimeBegin($timeBegin) {
		$this->timeBegin = $timeBegin;
		$this->queryParameters["TimeBegin"]=$timeBegin;
	}

	public function getFrequency() {
		return $this->frequency;
	}

	public function setFrequency($frequency) {
		$this->frequency = $frequency;
		$this->queryParameters["Frequency"]=$frequency;
	}
	
}