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

class DescribeScalingGroupsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "DescribeScalingGroups", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $scalingGroupId10;

	private  $scalingGroupId12;

	private  $scalingGroupId13;

	private  $scalingGroupId14;

	private  $scalingGroupId15;

	private  $ownerId;

	private  $pageNumber;

	private  $pageSize;

	private  $scalingGroupName20;

	private  $scalingGroupName19;

	private  $scalingGroupId20;

	private  $scalingGroupName18;

	private  $scalingGroupName17;

	private  $scalingGroupName16;

	private  $resourceOwnerAccount;

	private  $scalingGroupName;

	private  $ownerAccount;

	private  $scalingGroupName1;

	private  $scalingGroupName2;

	private  $scalingGroupId2;

	private  $scalingGroupId1;

	private  $scalingGroupId6;

	private  $scalingGroupId16;

	private  $scalingGroupName7;

	private  $scalingGroupName11;

	private  $scalingGroupId5;

	private  $scalingGroupId17;

	private  $scalingGroupName8;

	private  $scalingGroupName10;

	private  $scalingGroupId4;

	private  $scalingGroupId18;

	private  $scalingGroupName9;

	private  $scalingGroupId3;

	private  $scalingGroupId19;

	private  $scalingGroupName3;

	private  $scalingGroupName15;

	private  $scalingGroupId9;

	private  $scalingGroupName4;

	private  $scalingGroupName14;

	private  $scalingGroupId8;

	private  $scalingGroupName5;

	private  $scalingGroupName13;

	private  $scalingGroupId7;

	private  $scalingGroupName6;

	private  $scalingGroupName12;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getScalingGroupId10() {
		return $this->scalingGroupId10;
	}

	public function setScalingGroupId10($scalingGroupId10) {
		$this->scalingGroupId10 = $scalingGroupId10;
		$this->queryParameters["ScalingGroupId.10"]=$scalingGroupId10;
	}

	public function getScalingGroupId12() {
		return $this->scalingGroupId12;
	}

	public function setScalingGroupId12($scalingGroupId12) {
		$this->scalingGroupId12 = $scalingGroupId12;
		$this->queryParameters["ScalingGroupId.12"]=$scalingGroupId12;
	}

	public function getScalingGroupId13() {
		return $this->scalingGroupId13;
	}

	public function setScalingGroupId13($scalingGroupId13) {
		$this->scalingGroupId13 = $scalingGroupId13;
		$this->queryParameters["ScalingGroupId.13"]=$scalingGroupId13;
	}

	public function getScalingGroupId14() {
		return $this->scalingGroupId14;
	}

	public function setScalingGroupId14($scalingGroupId14) {
		$this->scalingGroupId14 = $scalingGroupId14;
		$this->queryParameters["ScalingGroupId.14"]=$scalingGroupId14;
	}

	public function getScalingGroupId15() {
		return $this->scalingGroupId15;
	}

	public function setScalingGroupId15($scalingGroupId15) {
		$this->scalingGroupId15 = $scalingGroupId15;
		$this->queryParameters["ScalingGroupId.15"]=$scalingGroupId15;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
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

	public function getScalingGroupName20() {
		return $this->scalingGroupName20;
	}

	public function setScalingGroupName20($scalingGroupName20) {
		$this->scalingGroupName20 = $scalingGroupName20;
		$this->queryParameters["ScalingGroupName.20"]=$scalingGroupName20;
	}

	public function getScalingGroupName19() {
		return $this->scalingGroupName19;
	}

	public function setScalingGroupName19($scalingGroupName19) {
		$this->scalingGroupName19 = $scalingGroupName19;
		$this->queryParameters["ScalingGroupName.19"]=$scalingGroupName19;
	}

	public function getScalingGroupId20() {
		return $this->scalingGroupId20;
	}

	public function setScalingGroupId20($scalingGroupId20) {
		$this->scalingGroupId20 = $scalingGroupId20;
		$this->queryParameters["ScalingGroupId.20"]=$scalingGroupId20;
	}

	public function getScalingGroupName18() {
		return $this->scalingGroupName18;
	}

	public function setScalingGroupName18($scalingGroupName18) {
		$this->scalingGroupName18 = $scalingGroupName18;
		$this->queryParameters["ScalingGroupName.18"]=$scalingGroupName18;
	}

	public function getScalingGroupName17() {
		return $this->scalingGroupName17;
	}

	public function setScalingGroupName17($scalingGroupName17) {
		$this->scalingGroupName17 = $scalingGroupName17;
		$this->queryParameters["ScalingGroupName.17"]=$scalingGroupName17;
	}

	public function getScalingGroupName16() {
		return $this->scalingGroupName16;
	}

	public function setScalingGroupName16($scalingGroupName16) {
		$this->scalingGroupName16 = $scalingGroupName16;
		$this->queryParameters["ScalingGroupName.16"]=$scalingGroupName16;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getScalingGroupName() {
		return $this->scalingGroupName;
	}

	public function setScalingGroupName($scalingGroupName) {
		$this->scalingGroupName = $scalingGroupName;
		$this->queryParameters["ScalingGroupName"]=$scalingGroupName;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getScalingGroupName1() {
		return $this->scalingGroupName1;
	}

	public function setScalingGroupName1($scalingGroupName1) {
		$this->scalingGroupName1 = $scalingGroupName1;
		$this->queryParameters["ScalingGroupName.1"]=$scalingGroupName1;
	}

	public function getScalingGroupName2() {
		return $this->scalingGroupName2;
	}

	public function setScalingGroupName2($scalingGroupName2) {
		$this->scalingGroupName2 = $scalingGroupName2;
		$this->queryParameters["ScalingGroupName.2"]=$scalingGroupName2;
	}

	public function getScalingGroupId2() {
		return $this->scalingGroupId2;
	}

	public function setScalingGroupId2($scalingGroupId2) {
		$this->scalingGroupId2 = $scalingGroupId2;
		$this->queryParameters["ScalingGroupId.2"]=$scalingGroupId2;
	}

	public function getScalingGroupId1() {
		return $this->scalingGroupId1;
	}

	public function setScalingGroupId1($scalingGroupId1) {
		$this->scalingGroupId1 = $scalingGroupId1;
		$this->queryParameters["ScalingGroupId.1"]=$scalingGroupId1;
	}

	public function getScalingGroupId6() {
		return $this->scalingGroupId6;
	}

	public function setScalingGroupId6($scalingGroupId6) {
		$this->scalingGroupId6 = $scalingGroupId6;
		$this->queryParameters["ScalingGroupId.6"]=$scalingGroupId6;
	}

	public function getScalingGroupId16() {
		return $this->scalingGroupId16;
	}

	public function setScalingGroupId16($scalingGroupId16) {
		$this->scalingGroupId16 = $scalingGroupId16;
		$this->queryParameters["ScalingGroupId.16"]=$scalingGroupId16;
	}

	public function getScalingGroupName7() {
		return $this->scalingGroupName7;
	}

	public function setScalingGroupName7($scalingGroupName7) {
		$this->scalingGroupName7 = $scalingGroupName7;
		$this->queryParameters["ScalingGroupName.7"]=$scalingGroupName7;
	}

	public function getScalingGroupName11() {
		return $this->scalingGroupName11;
	}

	public function setScalingGroupName11($scalingGroupName11) {
		$this->scalingGroupName11 = $scalingGroupName11;
		$this->queryParameters["ScalingGroupName.11"]=$scalingGroupName11;
	}

	public function getScalingGroupId5() {
		return $this->scalingGroupId5;
	}

	public function setScalingGroupId5($scalingGroupId5) {
		$this->scalingGroupId5 = $scalingGroupId5;
		$this->queryParameters["ScalingGroupId.5"]=$scalingGroupId5;
	}

	public function getScalingGroupId17() {
		return $this->scalingGroupId17;
	}

	public function setScalingGroupId17($scalingGroupId17) {
		$this->scalingGroupId17 = $scalingGroupId17;
		$this->queryParameters["ScalingGroupId.17"]=$scalingGroupId17;
	}

	public function getScalingGroupName8() {
		return $this->scalingGroupName8;
	}

	public function setScalingGroupName8($scalingGroupName8) {
		$this->scalingGroupName8 = $scalingGroupName8;
		$this->queryParameters["ScalingGroupName.8"]=$scalingGroupName8;
	}

	public function getScalingGroupName10() {
		return $this->scalingGroupName10;
	}

	public function setScalingGroupName10($scalingGroupName10) {
		$this->scalingGroupName10 = $scalingGroupName10;
		$this->queryParameters["ScalingGroupName.10"]=$scalingGroupName10;
	}

	public function getScalingGroupId4() {
		return $this->scalingGroupId4;
	}

	public function setScalingGroupId4($scalingGroupId4) {
		$this->scalingGroupId4 = $scalingGroupId4;
		$this->queryParameters["ScalingGroupId.4"]=$scalingGroupId4;
	}

	public function getScalingGroupId18() {
		return $this->scalingGroupId18;
	}

	public function setScalingGroupId18($scalingGroupId18) {
		$this->scalingGroupId18 = $scalingGroupId18;
		$this->queryParameters["ScalingGroupId.18"]=$scalingGroupId18;
	}

	public function getScalingGroupName9() {
		return $this->scalingGroupName9;
	}

	public function setScalingGroupName9($scalingGroupName9) {
		$this->scalingGroupName9 = $scalingGroupName9;
		$this->queryParameters["ScalingGroupName.9"]=$scalingGroupName9;
	}

	public function getScalingGroupId3() {
		return $this->scalingGroupId3;
	}

	public function setScalingGroupId3($scalingGroupId3) {
		$this->scalingGroupId3 = $scalingGroupId3;
		$this->queryParameters["ScalingGroupId.3"]=$scalingGroupId3;
	}

	public function getScalingGroupId19() {
		return $this->scalingGroupId19;
	}

	public function setScalingGroupId19($scalingGroupId19) {
		$this->scalingGroupId19 = $scalingGroupId19;
		$this->queryParameters["ScalingGroupId.19"]=$scalingGroupId19;
	}

	public function getScalingGroupName3() {
		return $this->scalingGroupName3;
	}

	public function setScalingGroupName3($scalingGroupName3) {
		$this->scalingGroupName3 = $scalingGroupName3;
		$this->queryParameters["ScalingGroupName.3"]=$scalingGroupName3;
	}

	public function getScalingGroupName15() {
		return $this->scalingGroupName15;
	}

	public function setScalingGroupName15($scalingGroupName15) {
		$this->scalingGroupName15 = $scalingGroupName15;
		$this->queryParameters["ScalingGroupName.15"]=$scalingGroupName15;
	}

	public function getScalingGroupId9() {
		return $this->scalingGroupId9;
	}

	public function setScalingGroupId9($scalingGroupId9) {
		$this->scalingGroupId9 = $scalingGroupId9;
		$this->queryParameters["ScalingGroupId.9"]=$scalingGroupId9;
	}

	public function getScalingGroupName4() {
		return $this->scalingGroupName4;
	}

	public function setScalingGroupName4($scalingGroupName4) {
		$this->scalingGroupName4 = $scalingGroupName4;
		$this->queryParameters["ScalingGroupName.4"]=$scalingGroupName4;
	}

	public function getScalingGroupName14() {
		return $this->scalingGroupName14;
	}

	public function setScalingGroupName14($scalingGroupName14) {
		$this->scalingGroupName14 = $scalingGroupName14;
		$this->queryParameters["ScalingGroupName.14"]=$scalingGroupName14;
	}

	public function getScalingGroupId8() {
		return $this->scalingGroupId8;
	}

	public function setScalingGroupId8($scalingGroupId8) {
		$this->scalingGroupId8 = $scalingGroupId8;
		$this->queryParameters["ScalingGroupId.8"]=$scalingGroupId8;
	}

	public function getScalingGroupName5() {
		return $this->scalingGroupName5;
	}

	public function setScalingGroupName5($scalingGroupName5) {
		$this->scalingGroupName5 = $scalingGroupName5;
		$this->queryParameters["ScalingGroupName.5"]=$scalingGroupName5;
	}

	public function getScalingGroupName13() {
		return $this->scalingGroupName13;
	}

	public function setScalingGroupName13($scalingGroupName13) {
		$this->scalingGroupName13 = $scalingGroupName13;
		$this->queryParameters["ScalingGroupName.13"]=$scalingGroupName13;
	}

	public function getScalingGroupId7() {
		return $this->scalingGroupId7;
	}

	public function setScalingGroupId7($scalingGroupId7) {
		$this->scalingGroupId7 = $scalingGroupId7;
		$this->queryParameters["ScalingGroupId.7"]=$scalingGroupId7;
	}

	public function getScalingGroupName6() {
		return $this->scalingGroupName6;
	}

	public function setScalingGroupName6($scalingGroupName6) {
		$this->scalingGroupName6 = $scalingGroupName6;
		$this->queryParameters["ScalingGroupName.6"]=$scalingGroupName6;
	}

	public function getScalingGroupName12() {
		return $this->scalingGroupName12;
	}

	public function setScalingGroupName12($scalingGroupName12) {
		$this->scalingGroupName12 = $scalingGroupName12;
		$this->queryParameters["ScalingGroupName.12"]=$scalingGroupName12;
	}
	
}