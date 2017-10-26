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
namespace Ess\Request\V20140828;

class DetachInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "DetachInstances", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $instanceId10;

	private  $resourceOwnerId;

	private  $instanceId12;

	private  $instanceId11;

	private  $scalingGroupId;

	private  $instanceId20;

	private  $instanceId1;

	private  $instanceId3;

	private  $resourceOwnerAccount;

	private  $instanceId2;

	private  $instanceId5;

	private  $instanceId4;

	private  $ownerAccount;

	private  $instanceId7;

	private  $instanceId6;

	private  $instanceId9;

	private  $instanceId8;

	private  $ownerId;

	private  $instanceId18;

	private  $instanceId17;

	private  $instanceId19;

	private  $instanceId14;

	private  $instanceId13;

	private  $instanceId16;

	private  $instanceId15;

	public function getInstanceId10() {
		return $this->instanceId10;
	}

	public function setInstanceId10($instanceId10) {
		$this->instanceId10 = $instanceId10;
		$this->queryParameters["InstanceId.10"]=$instanceId10;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getInstanceId12() {
		return $this->instanceId12;
	}

	public function setInstanceId12($instanceId12) {
		$this->instanceId12 = $instanceId12;
		$this->queryParameters["InstanceId.12"]=$instanceId12;
	}

	public function getInstanceId11() {
		return $this->instanceId11;
	}

	public function setInstanceId11($instanceId11) {
		$this->instanceId11 = $instanceId11;
		$this->queryParameters["InstanceId.11"]=$instanceId11;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getInstanceId20() {
		return $this->instanceId20;
	}

	public function setInstanceId20($instanceId20) {
		$this->instanceId20 = $instanceId20;
		$this->queryParameters["InstanceId.20"]=$instanceId20;
	}

	public function getInstanceId1() {
		return $this->instanceId1;
	}

	public function setInstanceId1($instanceId1) {
		$this->instanceId1 = $instanceId1;
		$this->queryParameters["InstanceId.1"]=$instanceId1;
	}

	public function getInstanceId3() {
		return $this->instanceId3;
	}

	public function setInstanceId3($instanceId3) {
		$this->instanceId3 = $instanceId3;
		$this->queryParameters["InstanceId.3"]=$instanceId3;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getInstanceId2() {
		return $this->instanceId2;
	}

	public function setInstanceId2($instanceId2) {
		$this->instanceId2 = $instanceId2;
		$this->queryParameters["InstanceId.2"]=$instanceId2;
	}

	public function getInstanceId5() {
		return $this->instanceId5;
	}

	public function setInstanceId5($instanceId5) {
		$this->instanceId5 = $instanceId5;
		$this->queryParameters["InstanceId.5"]=$instanceId5;
	}

	public function getInstanceId4() {
		return $this->instanceId4;
	}

	public function setInstanceId4($instanceId4) {
		$this->instanceId4 = $instanceId4;
		$this->queryParameters["InstanceId.4"]=$instanceId4;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getInstanceId7() {
		return $this->instanceId7;
	}

	public function setInstanceId7($instanceId7) {
		$this->instanceId7 = $instanceId7;
		$this->queryParameters["InstanceId.7"]=$instanceId7;
	}

	public function getInstanceId6() {
		return $this->instanceId6;
	}

	public function setInstanceId6($instanceId6) {
		$this->instanceId6 = $instanceId6;
		$this->queryParameters["InstanceId.6"]=$instanceId6;
	}

	public function getInstanceId9() {
		return $this->instanceId9;
	}

	public function setInstanceId9($instanceId9) {
		$this->instanceId9 = $instanceId9;
		$this->queryParameters["InstanceId.9"]=$instanceId9;
	}

	public function getInstanceId8() {
		return $this->instanceId8;
	}

	public function setInstanceId8($instanceId8) {
		$this->instanceId8 = $instanceId8;
		$this->queryParameters["InstanceId.8"]=$instanceId8;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getInstanceId18() {
		return $this->instanceId18;
	}

	public function setInstanceId18($instanceId18) {
		$this->instanceId18 = $instanceId18;
		$this->queryParameters["InstanceId.18"]=$instanceId18;
	}

	public function getInstanceId17() {
		return $this->instanceId17;
	}

	public function setInstanceId17($instanceId17) {
		$this->instanceId17 = $instanceId17;
		$this->queryParameters["InstanceId.17"]=$instanceId17;
	}

	public function getInstanceId19() {
		return $this->instanceId19;
	}

	public function setInstanceId19($instanceId19) {
		$this->instanceId19 = $instanceId19;
		$this->queryParameters["InstanceId.19"]=$instanceId19;
	}

	public function getInstanceId14() {
		return $this->instanceId14;
	}

	public function setInstanceId14($instanceId14) {
		$this->instanceId14 = $instanceId14;
		$this->queryParameters["InstanceId.14"]=$instanceId14;
	}

	public function getInstanceId13() {
		return $this->instanceId13;
	}

	public function setInstanceId13($instanceId13) {
		$this->instanceId13 = $instanceId13;
		$this->queryParameters["InstanceId.13"]=$instanceId13;
	}

	public function getInstanceId16() {
		return $this->instanceId16;
	}

	public function setInstanceId16($instanceId16) {
		$this->instanceId16 = $instanceId16;
		$this->queryParameters["InstanceId.16"]=$instanceId16;
	}

	public function getInstanceId15() {
		return $this->instanceId15;
	}

	public function setInstanceId15($instanceId15) {
		$this->instanceId15 = $instanceId15;
		$this->queryParameters["InstanceId.15"]=$instanceId15;
	}
	
}