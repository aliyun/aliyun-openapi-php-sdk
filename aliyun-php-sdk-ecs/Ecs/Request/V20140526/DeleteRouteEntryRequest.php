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

class DeleteRouteEntryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "DeleteRouteEntry", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $destinationCidrBlock;

	private  $ownerAccount;

	private  $nextHopId;

	private  $ownerId;

	private  $NextHopLists;

	private  $routeTableId;

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

	public function getDestinationCidrBlock() {
		return $this->destinationCidrBlock;
	}

	public function setDestinationCidrBlock($destinationCidrBlock) {
		$this->destinationCidrBlock = $destinationCidrBlock;
		$this->queryParameters["DestinationCidrBlock"]=$destinationCidrBlock;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getNextHopId() {
		return $this->nextHopId;
	}

	public function setNextHopId($nextHopId) {
		$this->nextHopId = $nextHopId;
		$this->queryParameters["NextHopId"]=$nextHopId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getNextHopLists() {
		return $this->NextHopLists;
	}

	public function setNextHopLists($NextHopLists) {
		$this->NextHopLists = $NextHopLists;
		for ($i = 0; $i < count($NextHopLists); $i ++) {	
			$this->queryParameters['NextHopList.' . ($i + 1) . '.NextHopId'] = $NextHopLists[$i]['NextHopId'];
			$this->queryParameters['NextHopList.' . ($i + 1) . '.NextHopType'] = $NextHopLists[$i]['NextHopType'];

		}
	}

	public function getRouteTableId() {
		return $this->routeTableId;
	}

	public function setRouteTableId($routeTableId) {
		$this->routeTableId = $routeTableId;
		$this->queryParameters["RouteTableId"]=$routeTableId;
	}
	
}