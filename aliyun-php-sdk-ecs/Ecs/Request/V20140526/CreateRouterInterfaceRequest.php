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

class CreateRouterInterfaceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "CreateRouterInterface");
	}

	private  $role;

	private  $oppositeRegionId;

	private  $spec;

	private  $routerType;

	private  $routerId;

	private  $oppositeInterfaceId;

	private  $oppositeRouterId;

	private  $oppositeRouterType;

	private  $oppositeInterfaceOwnerId;

	private  $healthCheckSourceIp;

	private  $healthCheckTargetIp;

	private  $accessPointId;

	private  $oppositeAccessPointId;

	private  $description;

	private  $name;

	private  $clientToken;

	private  $ownerId;

	private  $resourceOwnerAccount;

	private  $resourceOwnerId;

	private  $ownerAccount;

	private  $userCidr;

	public function getRole() {
		return $this->role;
	}

	public function setRole($role) {
		$this->role = $role;
		$this->queryParameters["Role"]=$role;
	}

	public function getOppositeRegionId() {
		return $this->oppositeRegionId;
	}

	public function setOppositeRegionId($oppositeRegionId) {
		$this->oppositeRegionId = $oppositeRegionId;
		$this->queryParameters["OppositeRegionId"]=$oppositeRegionId;
	}

	public function getSpec() {
		return $this->spec;
	}

	public function setSpec($spec) {
		$this->spec = $spec;
		$this->queryParameters["Spec"]=$spec;
	}

	public function getRouterType() {
		return $this->routerType;
	}

	public function setRouterType($routerType) {
		$this->routerType = $routerType;
		$this->queryParameters["RouterType"]=$routerType;
	}

	public function getRouterId() {
		return $this->routerId;
	}

	public function setRouterId($routerId) {
		$this->routerId = $routerId;
		$this->queryParameters["RouterId"]=$routerId;
	}

	public function getOppositeInterfaceId() {
		return $this->oppositeInterfaceId;
	}

	public function setOppositeInterfaceId($oppositeInterfaceId) {
		$this->oppositeInterfaceId = $oppositeInterfaceId;
		$this->queryParameters["OppositeInterfaceId"]=$oppositeInterfaceId;
	}

	public function getOppositeRouterId() {
		return $this->oppositeRouterId;
	}

	public function setOppositeRouterId($oppositeRouterId) {
		$this->oppositeRouterId = $oppositeRouterId;
		$this->queryParameters["OppositeRouterId"]=$oppositeRouterId;
	}

	public function getOppositeRouterType() {
		return $this->oppositeRouterType;
	}

	public function setOppositeRouterType($oppositeRouterType) {
		$this->oppositeRouterType = $oppositeRouterType;
		$this->queryParameters["OppositeRouterType"]=$oppositeRouterType;
	}

	public function getOppositeInterfaceOwnerId() {
		return $this->oppositeInterfaceOwnerId;
	}

	public function setOppositeInterfaceOwnerId($oppositeInterfaceOwnerId) {
		$this->oppositeInterfaceOwnerId = $oppositeInterfaceOwnerId;
		$this->queryParameters["OppositeInterfaceOwnerId"]=$oppositeInterfaceOwnerId;
	}

	public function getHealthCheckSourceIp() {
		return $this->healthCheckSourceIp;
	}

	public function setHealthCheckSourceIp($healthCheckSourceIp) {
		$this->healthCheckSourceIp = $healthCheckSourceIp;
		$this->queryParameters["HealthCheckSourceIp"]=$healthCheckSourceIp;
	}

	public function getHealthCheckTargetIp() {
		return $this->healthCheckTargetIp;
	}

	public function setHealthCheckTargetIp($healthCheckTargetIp) {
		$this->healthCheckTargetIp = $healthCheckTargetIp;
		$this->queryParameters["HealthCheckTargetIp"]=$healthCheckTargetIp;
	}

	public function getAccessPointId() {
		return $this->accessPointId;
	}

	public function setAccessPointId($accessPointId) {
		$this->accessPointId = $accessPointId;
		$this->queryParameters["AccessPointId"]=$accessPointId;
	}

	public function getOppositeAccessPointId() {
		return $this->oppositeAccessPointId;
	}

	public function setOppositeAccessPointId($oppositeAccessPointId) {
		$this->oppositeAccessPointId = $oppositeAccessPointId;
		$this->queryParameters["OppositeAccessPointId"]=$oppositeAccessPointId;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

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

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getUserCidr() {
		return $this->userCidr;
	}

	public function setUserCidr($userCidr) {
		$this->userCidr = $userCidr;
		$this->queryParameters["UserCidr"]=$userCidr;
	}
	
}