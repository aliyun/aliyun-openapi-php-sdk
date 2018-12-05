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

class AttachDBInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "AttachDBInstances", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerAccount;

	private  $scalingGroupId;

	private  $forceAttach;

	private  $DBInstances;

	private  $ownerId;

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getForceAttach() {
		return $this->forceAttach;
	}

	public function setForceAttach($forceAttach) {
		$this->forceAttach = $forceAttach;
		$this->queryParameters["ForceAttach"]=$forceAttach;
	}

	public function getDBInstances() {
		return $this->DBInstances;
	}

	public function setDBInstances($DBInstances) {
		$this->DBInstances = $DBInstances;
		for ($i = 0; $i < count($DBInstances); $i ++) {	
			$this->queryParameters["DBInstance.".($i+1)] = $DBInstances[$i];
		}
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}