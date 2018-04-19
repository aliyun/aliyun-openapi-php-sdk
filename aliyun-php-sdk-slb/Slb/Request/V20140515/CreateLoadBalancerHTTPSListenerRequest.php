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

class CreateLoadBalancerHTTPSListenerRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Slb", "2014-05-15", "CreateLoadBalancerHTTPSListener", "slb", "openAPI");
		$this->setMethod("POST");
	}

	private  $access_key_id;

	private  $resourceOwnerId;

	private  $healthCheckTimeout;

	private  $xForwardedFor;

	private  $healthCheckURI;

	private  $unhealthyThreshold;

	private  $healthyThreshold;

	private  $aclStatus;

	private  $scheduler;

	private  $aclType;

	private  $healthCheck;

	private  $maxConnection;

	private  $cookieTimeout;

	private  $stickySessionType;

	private  $vpcIds;

	private  $vServerGroupId;

	private  $aclId;

	private  $listenerPort;

	private  $cookie;

	private  $resourceOwnerAccount;

	private  $bandwidth;

	private  $stickySession;

	private  $healthCheckDomain;

	private  $requestTimeout;

	private  $ownerAccount;

	private  $gzip;

	private  $ownerId;

	private  $serverCertificateId;

	private  $cACertificateId;

	private  $tags;

	private  $idleTimeout;

	private  $loadBalancerId;

	private  $xForwardedFor_SLBIP;

	private  $backendServerPort;

	private  $healthCheckInterval;

	private  $xForwardedFor_proto;

	private  $xForwardedFor_SLBID;

	private  $healthCheckConnectPort;

	private  $healthCheckHttpCode;

	public function getaccess_key_id() {
		return $this->access_key_id;
	}

	public function setaccess_key_id($access_key_id) {
		$this->access_key_id = $access_key_id;
		$this->queryParameters["access_key_id"]=$access_key_id;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getHealthCheckTimeout() {
		return $this->healthCheckTimeout;
	}

	public function setHealthCheckTimeout($healthCheckTimeout) {
		$this->healthCheckTimeout = $healthCheckTimeout;
		$this->queryParameters["HealthCheckTimeout"]=$healthCheckTimeout;
	}

	public function getXForwardedFor() {
		return $this->xForwardedFor;
	}

	public function setXForwardedFor($xForwardedFor) {
		$this->xForwardedFor = $xForwardedFor;
		$this->queryParameters["XForwardedFor"]=$xForwardedFor;
	}

	public function getHealthCheckURI() {
		return $this->healthCheckURI;
	}

	public function setHealthCheckURI($healthCheckURI) {
		$this->healthCheckURI = $healthCheckURI;
		$this->queryParameters["HealthCheckURI"]=$healthCheckURI;
	}

	public function getUnhealthyThreshold() {
		return $this->unhealthyThreshold;
	}

	public function setUnhealthyThreshold($unhealthyThreshold) {
		$this->unhealthyThreshold = $unhealthyThreshold;
		$this->queryParameters["UnhealthyThreshold"]=$unhealthyThreshold;
	}

	public function getHealthyThreshold() {
		return $this->healthyThreshold;
	}

	public function setHealthyThreshold($healthyThreshold) {
		$this->healthyThreshold = $healthyThreshold;
		$this->queryParameters["HealthyThreshold"]=$healthyThreshold;
	}

	public function getAclStatus() {
		return $this->aclStatus;
	}

	public function setAclStatus($aclStatus) {
		$this->aclStatus = $aclStatus;
		$this->queryParameters["AclStatus"]=$aclStatus;
	}

	public function getScheduler() {
		return $this->scheduler;
	}

	public function setScheduler($scheduler) {
		$this->scheduler = $scheduler;
		$this->queryParameters["Scheduler"]=$scheduler;
	}

	public function getAclType() {
		return $this->aclType;
	}

	public function setAclType($aclType) {
		$this->aclType = $aclType;
		$this->queryParameters["AclType"]=$aclType;
	}

	public function getHealthCheck() {
		return $this->healthCheck;
	}

	public function setHealthCheck($healthCheck) {
		$this->healthCheck = $healthCheck;
		$this->queryParameters["HealthCheck"]=$healthCheck;
	}

	public function getMaxConnection() {
		return $this->maxConnection;
	}

	public function setMaxConnection($maxConnection) {
		$this->maxConnection = $maxConnection;
		$this->queryParameters["MaxConnection"]=$maxConnection;
	}

	public function getCookieTimeout() {
		return $this->cookieTimeout;
	}

	public function setCookieTimeout($cookieTimeout) {
		$this->cookieTimeout = $cookieTimeout;
		$this->queryParameters["CookieTimeout"]=$cookieTimeout;
	}

	public function getStickySessionType() {
		return $this->stickySessionType;
	}

	public function setStickySessionType($stickySessionType) {
		$this->stickySessionType = $stickySessionType;
		$this->queryParameters["StickySessionType"]=$stickySessionType;
	}

	public function getVpcIds() {
		return $this->vpcIds;
	}

	public function setVpcIds($vpcIds) {
		$this->vpcIds = $vpcIds;
		$this->queryParameters["VpcIds"]=$vpcIds;
	}

	public function getVServerGroupId() {
		return $this->vServerGroupId;
	}

	public function setVServerGroupId($vServerGroupId) {
		$this->vServerGroupId = $vServerGroupId;
		$this->queryParameters["VServerGroupId"]=$vServerGroupId;
	}

	public function getAclId() {
		return $this->aclId;
	}

	public function setAclId($aclId) {
		$this->aclId = $aclId;
		$this->queryParameters["AclId"]=$aclId;
	}

	public function getListenerPort() {
		return $this->listenerPort;
	}

	public function setListenerPort($listenerPort) {
		$this->listenerPort = $listenerPort;
		$this->queryParameters["ListenerPort"]=$listenerPort;
	}

	public function getCookie() {
		return $this->cookie;
	}

	public function setCookie($cookie) {
		$this->cookie = $cookie;
		$this->queryParameters["Cookie"]=$cookie;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getBandwidth() {
		return $this->bandwidth;
	}

	public function setBandwidth($bandwidth) {
		$this->bandwidth = $bandwidth;
		$this->queryParameters["Bandwidth"]=$bandwidth;
	}

	public function getStickySession() {
		return $this->stickySession;
	}

	public function setStickySession($stickySession) {
		$this->stickySession = $stickySession;
		$this->queryParameters["StickySession"]=$stickySession;
	}

	public function getHealthCheckDomain() {
		return $this->healthCheckDomain;
	}

	public function setHealthCheckDomain($healthCheckDomain) {
		$this->healthCheckDomain = $healthCheckDomain;
		$this->queryParameters["HealthCheckDomain"]=$healthCheckDomain;
	}

	public function getRequestTimeout() {
		return $this->requestTimeout;
	}

	public function setRequestTimeout($requestTimeout) {
		$this->requestTimeout = $requestTimeout;
		$this->queryParameters["RequestTimeout"]=$requestTimeout;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getGzip() {
		return $this->gzip;
	}

	public function setGzip($gzip) {
		$this->gzip = $gzip;
		$this->queryParameters["Gzip"]=$gzip;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getServerCertificateId() {
		return $this->serverCertificateId;
	}

	public function setServerCertificateId($serverCertificateId) {
		$this->serverCertificateId = $serverCertificateId;
		$this->queryParameters["ServerCertificateId"]=$serverCertificateId;
	}

	public function getCACertificateId() {
		return $this->cACertificateId;
	}

	public function setCACertificateId($cACertificateId) {
		$this->cACertificateId = $cACertificateId;
		$this->queryParameters["CACertificateId"]=$cACertificateId;
	}

	public function getTags() {
		return $this->tags;
	}

	public function setTags($tags) {
		$this->tags = $tags;
		$this->queryParameters["Tags"]=$tags;
	}

	public function getIdleTimeout() {
		return $this->idleTimeout;
	}

	public function setIdleTimeout($idleTimeout) {
		$this->idleTimeout = $idleTimeout;
		$this->queryParameters["IdleTimeout"]=$idleTimeout;
	}

	public function getLoadBalancerId() {
		return $this->loadBalancerId;
	}

	public function setLoadBalancerId($loadBalancerId) {
		$this->loadBalancerId = $loadBalancerId;
		$this->queryParameters["LoadBalancerId"]=$loadBalancerId;
	}

	public function getXForwardedFor_SLBIP() {
		return $this->xForwardedFor_SLBIP;
	}

	public function setXForwardedFor_SLBIP($xForwardedFor_SLBIP) {
		$this->xForwardedFor_SLBIP = $xForwardedFor_SLBIP;
		$this->queryParameters["XForwardedFor_SLBIP"]=$xForwardedFor_SLBIP;
	}

	public function getBackendServerPort() {
		return $this->backendServerPort;
	}

	public function setBackendServerPort($backendServerPort) {
		$this->backendServerPort = $backendServerPort;
		$this->queryParameters["BackendServerPort"]=$backendServerPort;
	}

	public function getHealthCheckInterval() {
		return $this->healthCheckInterval;
	}

	public function setHealthCheckInterval($healthCheckInterval) {
		$this->healthCheckInterval = $healthCheckInterval;
		$this->queryParameters["HealthCheckInterval"]=$healthCheckInterval;
	}

	public function getXForwardedFor_proto() {
		return $this->xForwardedFor_proto;
	}

	public function setXForwardedFor_proto($xForwardedFor_proto) {
		$this->xForwardedFor_proto = $xForwardedFor_proto;
		$this->queryParameters["XForwardedFor_proto"]=$xForwardedFor_proto;
	}

	public function getXForwardedFor_SLBID() {
		return $this->xForwardedFor_SLBID;
	}

	public function setXForwardedFor_SLBID($xForwardedFor_SLBID) {
		$this->xForwardedFor_SLBID = $xForwardedFor_SLBID;
		$this->queryParameters["XForwardedFor_SLBID"]=$xForwardedFor_SLBID;
	}

	public function getHealthCheckConnectPort() {
		return $this->healthCheckConnectPort;
	}

	public function setHealthCheckConnectPort($healthCheckConnectPort) {
		$this->healthCheckConnectPort = $healthCheckConnectPort;
		$this->queryParameters["HealthCheckConnectPort"]=$healthCheckConnectPort;
	}

	public function getHealthCheckHttpCode() {
		return $this->healthCheckHttpCode;
	}

	public function setHealthCheckHttpCode($healthCheckHttpCode) {
		$this->healthCheckHttpCode = $healthCheckHttpCode;
		$this->queryParameters["HealthCheckHttpCode"]=$healthCheckHttpCode;
	}
	
}