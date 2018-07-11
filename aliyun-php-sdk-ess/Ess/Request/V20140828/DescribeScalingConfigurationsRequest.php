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

class DescribeScalingConfigurationsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "DescribeScalingConfigurations", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $scalingConfigurationId6;

	private  $scalingConfigurationId7;

	private  $resourceOwnerId;

	private  $scalingConfigurationId4;

	private  $scalingConfigurationId5;

	private  $scalingGroupId;

	private  $scalingConfigurationId8;

	private  $scalingConfigurationId9;

	private  $scalingConfigurationId10;

	private  $pageNumber;

	private  $scalingConfigurationName2;

	private  $scalingConfigurationName3;

	private  $scalingConfigurationName1;

	private  $pageSize;

	private  $scalingConfigurationId2;

	private  $scalingConfigurationId3;

	private  $scalingConfigurationId1;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $scalingConfigurationName6;

	private  $scalingConfigurationName7;

	private  $scalingConfigurationName4;

	private  $scalingConfigurationName5;

	private  $ownerId;

	private  $scalingConfigurationName8;

	private  $scalingConfigurationName9;

	private  $scalingConfigurationName10;

	public function getScalingConfigurationId6() {
		return $this->scalingConfigurationId6;
	}

	public function setScalingConfigurationId6($scalingConfigurationId6) {
		$this->scalingConfigurationId6 = $scalingConfigurationId6;
		$this->queryParameters["ScalingConfigurationId.6"]=$scalingConfigurationId6;
	}

	public function getScalingConfigurationId7() {
		return $this->scalingConfigurationId7;
	}

	public function setScalingConfigurationId7($scalingConfigurationId7) {
		$this->scalingConfigurationId7 = $scalingConfigurationId7;
		$this->queryParameters["ScalingConfigurationId.7"]=$scalingConfigurationId7;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getScalingConfigurationId4() {
		return $this->scalingConfigurationId4;
	}

	public function setScalingConfigurationId4($scalingConfigurationId4) {
		$this->scalingConfigurationId4 = $scalingConfigurationId4;
		$this->queryParameters["ScalingConfigurationId.4"]=$scalingConfigurationId4;
	}

	public function getScalingConfigurationId5() {
		return $this->scalingConfigurationId5;
	}

	public function setScalingConfigurationId5($scalingConfigurationId5) {
		$this->scalingConfigurationId5 = $scalingConfigurationId5;
		$this->queryParameters["ScalingConfigurationId.5"]=$scalingConfigurationId5;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getScalingConfigurationId8() {
		return $this->scalingConfigurationId8;
	}

	public function setScalingConfigurationId8($scalingConfigurationId8) {
		$this->scalingConfigurationId8 = $scalingConfigurationId8;
		$this->queryParameters["ScalingConfigurationId.8"]=$scalingConfigurationId8;
	}

	public function getScalingConfigurationId9() {
		return $this->scalingConfigurationId9;
	}

	public function setScalingConfigurationId9($scalingConfigurationId9) {
		$this->scalingConfigurationId9 = $scalingConfigurationId9;
		$this->queryParameters["ScalingConfigurationId.9"]=$scalingConfigurationId9;
	}

	public function getScalingConfigurationId10() {
		return $this->scalingConfigurationId10;
	}

	public function setScalingConfigurationId10($scalingConfigurationId10) {
		$this->scalingConfigurationId10 = $scalingConfigurationId10;
		$this->queryParameters["ScalingConfigurationId.10"]=$scalingConfigurationId10;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getScalingConfigurationName2() {
		return $this->scalingConfigurationName2;
	}

	public function setScalingConfigurationName2($scalingConfigurationName2) {
		$this->scalingConfigurationName2 = $scalingConfigurationName2;
		$this->queryParameters["ScalingConfigurationName.2"]=$scalingConfigurationName2;
	}

	public function getScalingConfigurationName3() {
		return $this->scalingConfigurationName3;
	}

	public function setScalingConfigurationName3($scalingConfigurationName3) {
		$this->scalingConfigurationName3 = $scalingConfigurationName3;
		$this->queryParameters["ScalingConfigurationName.3"]=$scalingConfigurationName3;
	}

	public function getScalingConfigurationName1() {
		return $this->scalingConfigurationName1;
	}

	public function setScalingConfigurationName1($scalingConfigurationName1) {
		$this->scalingConfigurationName1 = $scalingConfigurationName1;
		$this->queryParameters["ScalingConfigurationName.1"]=$scalingConfigurationName1;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getScalingConfigurationId2() {
		return $this->scalingConfigurationId2;
	}

	public function setScalingConfigurationId2($scalingConfigurationId2) {
		$this->scalingConfigurationId2 = $scalingConfigurationId2;
		$this->queryParameters["ScalingConfigurationId.2"]=$scalingConfigurationId2;
	}

	public function getScalingConfigurationId3() {
		return $this->scalingConfigurationId3;
	}

	public function setScalingConfigurationId3($scalingConfigurationId3) {
		$this->scalingConfigurationId3 = $scalingConfigurationId3;
		$this->queryParameters["ScalingConfigurationId.3"]=$scalingConfigurationId3;
	}

	public function getScalingConfigurationId1() {
		return $this->scalingConfigurationId1;
	}

	public function setScalingConfigurationId1($scalingConfigurationId1) {
		$this->scalingConfigurationId1 = $scalingConfigurationId1;
		$this->queryParameters["ScalingConfigurationId.1"]=$scalingConfigurationId1;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getScalingConfigurationName6() {
		return $this->scalingConfigurationName6;
	}

	public function setScalingConfigurationName6($scalingConfigurationName6) {
		$this->scalingConfigurationName6 = $scalingConfigurationName6;
		$this->queryParameters["ScalingConfigurationName.6"]=$scalingConfigurationName6;
	}

	public function getScalingConfigurationName7() {
		return $this->scalingConfigurationName7;
	}

	public function setScalingConfigurationName7($scalingConfigurationName7) {
		$this->scalingConfigurationName7 = $scalingConfigurationName7;
		$this->queryParameters["ScalingConfigurationName.7"]=$scalingConfigurationName7;
	}

	public function getScalingConfigurationName4() {
		return $this->scalingConfigurationName4;
	}

	public function setScalingConfigurationName4($scalingConfigurationName4) {
		$this->scalingConfigurationName4 = $scalingConfigurationName4;
		$this->queryParameters["ScalingConfigurationName.4"]=$scalingConfigurationName4;
	}

	public function getScalingConfigurationName5() {
		return $this->scalingConfigurationName5;
	}

	public function setScalingConfigurationName5($scalingConfigurationName5) {
		$this->scalingConfigurationName5 = $scalingConfigurationName5;
		$this->queryParameters["ScalingConfigurationName.5"]=$scalingConfigurationName5;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getScalingConfigurationName8() {
		return $this->scalingConfigurationName8;
	}

	public function setScalingConfigurationName8($scalingConfigurationName8) {
		$this->scalingConfigurationName8 = $scalingConfigurationName8;
		$this->queryParameters["ScalingConfigurationName.8"]=$scalingConfigurationName8;
	}

	public function getScalingConfigurationName9() {
		return $this->scalingConfigurationName9;
	}

	public function setScalingConfigurationName9($scalingConfigurationName9) {
		$this->scalingConfigurationName9 = $scalingConfigurationName9;
		$this->queryParameters["ScalingConfigurationName.9"]=$scalingConfigurationName9;
	}

	public function getScalingConfigurationName10() {
		return $this->scalingConfigurationName10;
	}

	public function setScalingConfigurationName10($scalingConfigurationName10) {
		$this->scalingConfigurationName10 = $scalingConfigurationName10;
		$this->queryParameters["ScalingConfigurationName.10"]=$scalingConfigurationName10;
	}
	
}