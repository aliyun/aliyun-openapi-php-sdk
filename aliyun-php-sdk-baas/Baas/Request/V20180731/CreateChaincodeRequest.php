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
namespace Baas\Request\V20180731;

class CreateChaincodeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Baas", "2018-07-31", "CreateChaincode");
		$this->setMethod("POST");
	}

	private  $organizationId;

	private  $ossBucket;

	private  $ossUrl;

	private  $endorsePolicy;

	private  $location;

	private  $channelId;

	private  $consortiumId;

	public function getOrganizationId() {
		return $this->organizationId;
	}

	public function setOrganizationId($organizationId) {
		$this->organizationId = $organizationId;
		}

	public function getOssBucket() {
		return $this->ossBucket;
	}

	public function setOssBucket($ossBucket) {
		$this->ossBucket = $ossBucket;
		}

	public function getOssUrl() {
		return $this->ossUrl;
	}

	public function setOssUrl($ossUrl) {
		$this->ossUrl = $ossUrl;
		}

	public function getEndorsePolicy() {
		return $this->endorsePolicy;
	}

	public function setEndorsePolicy($endorsePolicy) {
		$this->endorsePolicy = $endorsePolicy;
		}

	public function getLocation() {
		return $this->location;
	}

	public function setLocation($location) {
		$this->location = $location;
		}

	public function getChannelId() {
		return $this->channelId;
	}

	public function setChannelId($channelId) {
		$this->channelId = $channelId;
		}

	public function getConsortiumId() {
		return $this->consortiumId;
	}

	public function setConsortiumId($consortiumId) {
		$this->consortiumId = $consortiumId;
		}
	
}