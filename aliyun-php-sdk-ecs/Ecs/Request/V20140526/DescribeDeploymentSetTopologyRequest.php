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
namespace Ecs\Request\V20140526;

class DescribeDeploymentSetTopologyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DescribeDeploymentSetTopology", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $deploymentSetId;

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $granularity;

	private  $domain;

	private  $networkType;

	private  $deploymentSetName;

	private  $ownerId;

	private  $strategy;

	public function getDeploymentSetId() {
		return $this->deploymentSetId;
	}

	public function setDeploymentSetId($deploymentSetId) {
		$this->deploymentSetId = $deploymentSetId;
		$this->queryParameters["DeploymentSetId"]=$deploymentSetId;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getGranularity() {
		return $this->granularity;
	}

	public function setGranularity($granularity) {
		$this->granularity = $granularity;
		$this->queryParameters["Granularity"]=$granularity;
	}

	public function getDomain() {
		return $this->domain;
	}

	public function setDomain($domain) {
		$this->domain = $domain;
		$this->queryParameters["Domain"]=$domain;
	}

	public function getNetworkType() {
		return $this->networkType;
	}

	public function setNetworkType($networkType) {
		$this->networkType = $networkType;
		$this->queryParameters["NetworkType"]=$networkType;
	}

	public function getDeploymentSetName() {
		return $this->deploymentSetName;
	}

	public function setDeploymentSetName($deploymentSetName) {
		$this->deploymentSetName = $deploymentSetName;
		$this->queryParameters["DeploymentSetName"]=$deploymentSetName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getStrategy() {
		return $this->strategy;
	}

	public function setStrategy($strategy) {
		$this->strategy = $strategy;
		$this->queryParameters["Strategy"]=$strategy;
	}
	
}