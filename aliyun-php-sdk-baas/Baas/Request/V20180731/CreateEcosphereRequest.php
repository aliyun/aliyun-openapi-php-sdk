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

class CreateEcosphereRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Baas", "2018-07-31", "CreateEcosphere");
	}

	private  $orderersCount;

	private  $consortiumName;

	private  $specName;

	private  $Organizations;

	private  $zoneId;

	private  $ordererType;

	private  $description;

	private  $ordererDomain;

	private  $location;

	private  $peersCount;

	private  $channelPolicy;

	public function getOrderersCount() {
		return $this->orderersCount;
	}

	public function setOrderersCount($orderersCount) {
		$this->orderersCount = $orderersCount;
		}

	public function getConsortiumName() {
		return $this->consortiumName;
	}

	public function setConsortiumName($consortiumName) {
		$this->consortiumName = $consortiumName;
		}

	public function getSpecName() {
		return $this->specName;
	}

	public function setSpecName($specName) {
		$this->specName = $specName;
		}

	public function getOrganizations() {
		return $this->Organizations;
	}

	public function setOrganizations($Organizations) {
		$this->Organizations = $Organizations;

	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		}

	public function getOrdererType() {
		return $this->ordererType;
	}

	public function setOrdererType($ordererType) {
		$this->ordererType = $ordererType;
		}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		}

	public function getOrdererDomain() {
		return $this->ordererDomain;
	}

	public function setOrdererDomain($ordererDomain) {
		$this->ordererDomain = $ordererDomain;
		}

	public function getLocation() {
		return $this->location;
	}

	public function setLocation($location) {
		$this->location = $location;
		}

	public function getPeersCount() {
		return $this->peersCount;
	}

	public function setPeersCount($peersCount) {
		$this->peersCount = $peersCount;
		}

	public function getChannelPolicy() {
		return $this->channelPolicy;
	}

	public function setChannelPolicy($channelPolicy) {
		$this->channelPolicy = $channelPolicy;
		}
	
}