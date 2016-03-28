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
namespace Slb\Request\V20140515;

class SetLoadBalancerTCPListenerAttributeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Slb", "2014-05-15", "SetLoadBalancerTCPListenerAttribute");
	}

	private  $ownerId;

	private  $resourceOwnerAccount;

	private  $resourceOwnerId;

	private  $loadBalancerId;

	private  $listenerPort;

	private  $bandwidth;

	private  $scheduler;

	private  $persistenceTimeout;

	private  $healthyThreshold;

	private  $unhealthyThreshold;

	private  $healthCheckConnectTimeout;

	private  $healthCheckConnectPort;

	private  $healthCheckInterval;

	private  $healthCheckDomain;

	private  $healthCheckURI;

	private  $healthCheckHttpCode;

	private  $synProxy;

	private  $ownerAccount;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getLoadBalancerId() {
		return $this->loadBalancerId;
	}

	public function setLoadBalancerId($loadBalancerId) {
		$this->loadBalancerId = $loadBalancerId;
		$this->queryParameters["LoadBalancerId"]=$loadBalancerId;
	}

	public function getListenerPort() {
		return $this->listenerPort;
	}

	public function setListenerPort($listenerPort) {
		$this->listenerPort = $listenerPort;
		$this->queryParameters["ListenerPort"]=$listenerPort;
	}

	public function getBandwidth() {
		return $this->bandwidth;
	}

	public function setBandwidth($bandwidth) {
		$this->bandwidth = $bandwidth;
		$this->queryParameters["Bandwidth"]=$bandwidth;
	}

	public function getScheduler() {
		return $this->scheduler;
	}

	public function setScheduler($scheduler) {
		$this->scheduler = $scheduler;
		$this->queryParameters["Scheduler"]=$scheduler;
	}

	public function getPersistenceTimeout() {
		return $this->persistenceTimeout;
	}

	public function setPersistenceTimeout($persistenceTimeout) {
		$this->persistenceTimeout = $persistenceTimeout;
		$this->queryParameters["PersistenceTimeout"]=$persistenceTimeout;
	}

	public function getHealthyThreshold() {
		return $this->healthyThreshold;
	}

	public function setHealthyThreshold($healthyThreshold) {
		$this->healthyThreshold = $healthyThreshold;
		$this->queryParameters["HealthyThreshold"]=$healthyThreshold;
	}

	public function getUnhealthyThreshold() {
		return $this->unhealthyThreshold;
	}

	public function setUnhealthyThreshold($unhealthyThreshold) {
		$this->unhealthyThreshold = $unhealthyThreshold;
		$this->queryParameters["UnhealthyThreshold"]=$unhealthyThreshold;
	}

	public function getHealthCheckConnectTimeout() {
		return $this->healthCheckConnectTimeout;
	}

	public function setHealthCheckConnectTimeout($healthCheckConnectTimeout) {
		$this->healthCheckConnectTimeout = $healthCheckConnectTimeout;
		$this->queryParameters["HealthCheckConnectTimeout"]=$healthCheckConnectTimeout;
	}

	public function getHealthCheckConnectPort() {
		return $this->healthCheckConnectPort;
	}

	public function setHealthCheckConnectPort($healthCheckConnectPort) {
		$this->healthCheckConnectPort = $healthCheckConnectPort;
		$this->queryParameters["HealthCheckConnectPort"]=$healthCheckConnectPort;
	}

	public function getHealthCheckInterval() {
		return $this->healthCheckInterval;
	}

	public function setHealthCheckInterval($healthCheckInterval) {
		$this->healthCheckInterval = $healthCheckInterval;
		$this->queryParameters["HealthCheckInterval"]=$healthCheckInterval;
	}

	public function getHealthCheckDomain() {
		return $this->healthCheckDomain;
	}

	public function setHealthCheckDomain($healthCheckDomain) {
		$this->healthCheckDomain = $healthCheckDomain;
		$this->queryParameters["HealthCheckDomain"]=$healthCheckDomain;
	}

	public function getHealthCheckURI() {
		return $this->healthCheckURI;
	}

	public function setHealthCheckURI($healthCheckURI) {
		$this->healthCheckURI = $healthCheckURI;
		$this->queryParameters["HealthCheckURI"]=$healthCheckURI;
	}

	public function getHealthCheckHttpCode() {
		return $this->healthCheckHttpCode;
	}

	public function setHealthCheckHttpCode($healthCheckHttpCode) {
		$this->healthCheckHttpCode = $healthCheckHttpCode;
		$this->queryParameters["HealthCheckHttpCode"]=$healthCheckHttpCode;
	}

	public function getSynProxy() {
		return $this->synProxy;
	}

	public function setSynProxy($synProxy) {
		$this->synProxy = $synProxy;
		$this->queryParameters["SynProxy"]=$synProxy;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}
	
}