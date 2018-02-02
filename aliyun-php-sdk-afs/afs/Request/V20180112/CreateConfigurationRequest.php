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

class CreateConfigurationRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("afs", "2018-01-12", "CreateConfiguration");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $sourceIp;

	private  $configurationName;

	private  $maxPV;

	private  $configurationMethod;

	private  $applyType;

	private  $scene;

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

	public function getConfigurationName() {
		return $this->configurationName;
	}

	public function setConfigurationName($configurationName) {
		$this->configurationName = $configurationName;
		$this->queryParameters["ConfigurationName"]=$configurationName;
	}

	public function getMaxPV() {
		return $this->maxPV;
	}

	public function setMaxPV($maxPV) {
		$this->maxPV = $maxPV;
		$this->queryParameters["MaxPV"]=$maxPV;
	}

	public function getConfigurationMethod() {
		return $this->configurationMethod;
	}

	public function setConfigurationMethod($configurationMethod) {
		$this->configurationMethod = $configurationMethod;
		$this->queryParameters["ConfigurationMethod"]=$configurationMethod;
	}

	public function getApplyType() {
		return $this->applyType;
	}

	public function setApplyType($applyType) {
		$this->applyType = $applyType;
		$this->queryParameters["ApplyType"]=$applyType;
	}

	public function getScene() {
		return $this->scene;
	}

	public function setScene($scene) {
		$this->scene = $scene;
		$this->queryParameters["Scene"]=$scene;
	}
	
}