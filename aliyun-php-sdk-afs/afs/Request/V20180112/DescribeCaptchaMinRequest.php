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

class DescribeCaptchaMinRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("afs", "2018-01-12", "DescribeCaptchaMin");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $sourceIp;

	private  $configName;

	private  $time;

	private  $type;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getConfigName() {
		return $this->configName;
	}

	public function setConfigName($configName) {
		$this->configName = $configName;
		$this->queryParameters["ConfigName"]=$configName;
	}

	public function getTime() {
		return $this->time;
	}

	public function setTime($time) {
		$this->time = $time;
		$this->queryParameters["Time"]=$time;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}
	
}