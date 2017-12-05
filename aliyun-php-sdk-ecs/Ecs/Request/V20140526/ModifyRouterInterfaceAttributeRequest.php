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

class ModifyRouterInterfaceAttributeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ModifyRouterInterfaceAttribute", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $oppositeRouterId;

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $description;

	private  $healthCheckTargetIp;

	private  $ownerId;

	private  $routerInterfaceId;

	private  $oppositeInterfaceOwnerId;

	private  $healthCheckSourceIp;

	private  $name;

	private  $oppositeRouterType;

	private  $oppositeInterfaceId;

	public function getOppositeRouterId() {
		return $this->oppositeRouterId;
	}

	public function setOppositeRouterId($oppositeRouterId) {
		$this->oppositeRouterId = $oppositeRouterId;
		$this->queryParameters["OppositeRouterId"]=$oppositeRouterId;
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

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getHealthCheckTargetIp() {
		return $this->healthCheckTargetIp;
	}

	public function setHealthCheckTargetIp($healthCheckTargetIp) {
		$this->healthCheckTargetIp = $healthCheckTargetIp;
		$this->queryParameters["HealthCheckTargetIp"]=$healthCheckTargetIp;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getRouterInterfaceId() {
		return $this->routerInterfaceId;
	}

	public function setRouterInterfaceId($routerInterfaceId) {
		$this->routerInterfaceId = $routerInterfaceId;
		$this->queryParameters["RouterInterfaceId"]=$routerInterfaceId;
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

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getOppositeRouterType() {
		return $this->oppositeRouterType;
	}

	public function setOppositeRouterType($oppositeRouterType) {
		$this->oppositeRouterType = $oppositeRouterType;
		$this->queryParameters["OppositeRouterType"]=$oppositeRouterType;
	}

	public function getOppositeInterfaceId() {
		return $this->oppositeInterfaceId;
	}

	public function setOppositeInterfaceId($oppositeInterfaceId) {
		$this->oppositeInterfaceId = $oppositeInterfaceId;
		$this->queryParameters["OppositeInterfaceId"]=$oppositeInterfaceId;
	}
	
}