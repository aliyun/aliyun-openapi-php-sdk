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

class DescribeScalingRulesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "DescribeScalingRules", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $scalingRuleName1;

	private  $resourceOwnerId;

	private  $scalingRuleName2;

	private  $scalingRuleName3;

	private  $scalingRuleName4;

	private  $scalingRuleName5;

	private  $scalingGroupId;

	private  $scalingRuleName6;

	private  $scalingRuleName7;

	private  $scalingRuleName8;

	private  $scalingRuleAri9;

	private  $scalingRuleName9;

	private  $pageNumber;

	private  $pageSize;

	private  $scalingRuleId10;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $scalingRuleAri1;

	private  $scalingRuleAri2;

	private  $scalingRuleName10;

	private  $scalingRuleAri3;

	private  $scalingRuleAri4;

	private  $scalingRuleId8;

	private  $scalingRuleAri5;

	private  $scalingRuleId9;

	private  $scalingRuleAri6;

	private  $scalingRuleAri7;

	private  $scalingRuleAri10;

	private  $scalingRuleAri8;

	private  $scalingRuleId4;

	private  $scalingRuleId5;

	private  $scalingRuleId6;

	private  $scalingRuleId7;

	private  $scalingRuleId1;

	private  $scalingRuleId2;

	private  $scalingRuleId3;

	public function getScalingRuleName1() {
		return $this->scalingRuleName1;
	}

	public function setScalingRuleName1($scalingRuleName1) {
		$this->scalingRuleName1 = $scalingRuleName1;
		$this->queryParameters["ScalingRuleName.1"]=$scalingRuleName1;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getScalingRuleName2() {
		return $this->scalingRuleName2;
	}

	public function setScalingRuleName2($scalingRuleName2) {
		$this->scalingRuleName2 = $scalingRuleName2;
		$this->queryParameters["ScalingRuleName.2"]=$scalingRuleName2;
	}

	public function getScalingRuleName3() {
		return $this->scalingRuleName3;
	}

	public function setScalingRuleName3($scalingRuleName3) {
		$this->scalingRuleName3 = $scalingRuleName3;
		$this->queryParameters["ScalingRuleName.3"]=$scalingRuleName3;
	}

	public function getScalingRuleName4() {
		return $this->scalingRuleName4;
	}

	public function setScalingRuleName4($scalingRuleName4) {
		$this->scalingRuleName4 = $scalingRuleName4;
		$this->queryParameters["ScalingRuleName.4"]=$scalingRuleName4;
	}

	public function getScalingRuleName5() {
		return $this->scalingRuleName5;
	}

	public function setScalingRuleName5($scalingRuleName5) {
		$this->scalingRuleName5 = $scalingRuleName5;
		$this->queryParameters["ScalingRuleName.5"]=$scalingRuleName5;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getScalingRuleName6() {
		return $this->scalingRuleName6;
	}

	public function setScalingRuleName6($scalingRuleName6) {
		$this->scalingRuleName6 = $scalingRuleName6;
		$this->queryParameters["ScalingRuleName.6"]=$scalingRuleName6;
	}

	public function getScalingRuleName7() {
		return $this->scalingRuleName7;
	}

	public function setScalingRuleName7($scalingRuleName7) {
		$this->scalingRuleName7 = $scalingRuleName7;
		$this->queryParameters["ScalingRuleName.7"]=$scalingRuleName7;
	}

	public function getScalingRuleName8() {
		return $this->scalingRuleName8;
	}

	public function setScalingRuleName8($scalingRuleName8) {
		$this->scalingRuleName8 = $scalingRuleName8;
		$this->queryParameters["ScalingRuleName.8"]=$scalingRuleName8;
	}

	public function getScalingRuleAri9() {
		return $this->scalingRuleAri9;
	}

	public function setScalingRuleAri9($scalingRuleAri9) {
		$this->scalingRuleAri9 = $scalingRuleAri9;
		$this->queryParameters["ScalingRuleAri.9"]=$scalingRuleAri9;
	}

	public function getScalingRuleName9() {
		return $this->scalingRuleName9;
	}

	public function setScalingRuleName9($scalingRuleName9) {
		$this->scalingRuleName9 = $scalingRuleName9;
		$this->queryParameters["ScalingRuleName.9"]=$scalingRuleName9;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getScalingRuleId10() {
		return $this->scalingRuleId10;
	}

	public function setScalingRuleId10($scalingRuleId10) {
		$this->scalingRuleId10 = $scalingRuleId10;
		$this->queryParameters["ScalingRuleId.10"]=$scalingRuleId10;
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

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getScalingRuleAri1() {
		return $this->scalingRuleAri1;
	}

	public function setScalingRuleAri1($scalingRuleAri1) {
		$this->scalingRuleAri1 = $scalingRuleAri1;
		$this->queryParameters["ScalingRuleAri.1"]=$scalingRuleAri1;
	}

	public function getScalingRuleAri2() {
		return $this->scalingRuleAri2;
	}

	public function setScalingRuleAri2($scalingRuleAri2) {
		$this->scalingRuleAri2 = $scalingRuleAri2;
		$this->queryParameters["ScalingRuleAri.2"]=$scalingRuleAri2;
	}

	public function getScalingRuleName10() {
		return $this->scalingRuleName10;
	}

	public function setScalingRuleName10($scalingRuleName10) {
		$this->scalingRuleName10 = $scalingRuleName10;
		$this->queryParameters["ScalingRuleName.10"]=$scalingRuleName10;
	}

	public function getScalingRuleAri3() {
		return $this->scalingRuleAri3;
	}

	public function setScalingRuleAri3($scalingRuleAri3) {
		$this->scalingRuleAri3 = $scalingRuleAri3;
		$this->queryParameters["ScalingRuleAri.3"]=$scalingRuleAri3;
	}

	public function getScalingRuleAri4() {
		return $this->scalingRuleAri4;
	}

	public function setScalingRuleAri4($scalingRuleAri4) {
		$this->scalingRuleAri4 = $scalingRuleAri4;
		$this->queryParameters["ScalingRuleAri.4"]=$scalingRuleAri4;
	}

	public function getScalingRuleId8() {
		return $this->scalingRuleId8;
	}

	public function setScalingRuleId8($scalingRuleId8) {
		$this->scalingRuleId8 = $scalingRuleId8;
		$this->queryParameters["ScalingRuleId.8"]=$scalingRuleId8;
	}

	public function getScalingRuleAri5() {
		return $this->scalingRuleAri5;
	}

	public function setScalingRuleAri5($scalingRuleAri5) {
		$this->scalingRuleAri5 = $scalingRuleAri5;
		$this->queryParameters["ScalingRuleAri.5"]=$scalingRuleAri5;
	}

	public function getScalingRuleId9() {
		return $this->scalingRuleId9;
	}

	public function setScalingRuleId9($scalingRuleId9) {
		$this->scalingRuleId9 = $scalingRuleId9;
		$this->queryParameters["ScalingRuleId.9"]=$scalingRuleId9;
	}

	public function getScalingRuleAri6() {
		return $this->scalingRuleAri6;
	}

	public function setScalingRuleAri6($scalingRuleAri6) {
		$this->scalingRuleAri6 = $scalingRuleAri6;
		$this->queryParameters["ScalingRuleAri.6"]=$scalingRuleAri6;
	}

	public function getScalingRuleAri7() {
		return $this->scalingRuleAri7;
	}

	public function setScalingRuleAri7($scalingRuleAri7) {
		$this->scalingRuleAri7 = $scalingRuleAri7;
		$this->queryParameters["ScalingRuleAri.7"]=$scalingRuleAri7;
	}

	public function getScalingRuleAri10() {
		return $this->scalingRuleAri10;
	}

	public function setScalingRuleAri10($scalingRuleAri10) {
		$this->scalingRuleAri10 = $scalingRuleAri10;
		$this->queryParameters["ScalingRuleAri.10"]=$scalingRuleAri10;
	}

	public function getScalingRuleAri8() {
		return $this->scalingRuleAri8;
	}

	public function setScalingRuleAri8($scalingRuleAri8) {
		$this->scalingRuleAri8 = $scalingRuleAri8;
		$this->queryParameters["ScalingRuleAri.8"]=$scalingRuleAri8;
	}

	public function getScalingRuleId4() {
		return $this->scalingRuleId4;
	}

	public function setScalingRuleId4($scalingRuleId4) {
		$this->scalingRuleId4 = $scalingRuleId4;
		$this->queryParameters["ScalingRuleId.4"]=$scalingRuleId4;
	}

	public function getScalingRuleId5() {
		return $this->scalingRuleId5;
	}

	public function setScalingRuleId5($scalingRuleId5) {
		$this->scalingRuleId5 = $scalingRuleId5;
		$this->queryParameters["ScalingRuleId.5"]=$scalingRuleId5;
	}

	public function getScalingRuleId6() {
		return $this->scalingRuleId6;
	}

	public function setScalingRuleId6($scalingRuleId6) {
		$this->scalingRuleId6 = $scalingRuleId6;
		$this->queryParameters["ScalingRuleId.6"]=$scalingRuleId6;
	}

	public function getScalingRuleId7() {
		return $this->scalingRuleId7;
	}

	public function setScalingRuleId7($scalingRuleId7) {
		$this->scalingRuleId7 = $scalingRuleId7;
		$this->queryParameters["ScalingRuleId.7"]=$scalingRuleId7;
	}

	public function getScalingRuleId1() {
		return $this->scalingRuleId1;
	}

	public function setScalingRuleId1($scalingRuleId1) {
		$this->scalingRuleId1 = $scalingRuleId1;
		$this->queryParameters["ScalingRuleId.1"]=$scalingRuleId1;
	}

	public function getScalingRuleId2() {
		return $this->scalingRuleId2;
	}

	public function setScalingRuleId2($scalingRuleId2) {
		$this->scalingRuleId2 = $scalingRuleId2;
		$this->queryParameters["ScalingRuleId.2"]=$scalingRuleId2;
	}

	public function getScalingRuleId3() {
		return $this->scalingRuleId3;
	}

	public function setScalingRuleId3($scalingRuleId3) {
		$this->scalingRuleId3 = $scalingRuleId3;
		$this->queryParameters["ScalingRuleId.3"]=$scalingRuleId3;
	}
	
}