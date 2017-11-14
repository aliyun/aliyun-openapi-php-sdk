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

class DescribeScalingActivitiesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "DescribeScalingActivities", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $scalingActivityId9;

	private  $resourceOwnerId;

	private  $scalingActivityId5;

	private  $scalingActivityId6;

	private  $scalingGroupId;

	private  $scalingActivityId7;

	private  $scalingActivityId8;

	private  $scalingActivityId1;

	private  $scalingActivityId2;

	private  $scalingActivityId3;

	private  $scalingActivityId4;

	private  $pageNumber;

	private  $statusCode;

	private  $pageSize;

	private  $scalingActivityId11;

	private  $scalingActivityId10;

	private  $scalingActivityId13;

	private  $scalingActivityId12;

	private  $scalingActivityId15;

	private  $scalingActivityId14;

	private  $scalingActivityId17;

	private  $scalingActivityId16;

	private  $scalingActivityId19;

	private  $resourceOwnerAccount;

	private  $scalingActivityId18;

	private  $ownerAccount;

	private  $ownerId;

	private  $scalingActivityId20;

	public function getScalingActivityId9() {
		return $this->scalingActivityId9;
	}

	public function setScalingActivityId9($scalingActivityId9) {
		$this->scalingActivityId9 = $scalingActivityId9;
		$this->queryParameters["ScalingActivityId.9"]=$scalingActivityId9;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getScalingActivityId5() {
		return $this->scalingActivityId5;
	}

	public function setScalingActivityId5($scalingActivityId5) {
		$this->scalingActivityId5 = $scalingActivityId5;
		$this->queryParameters["ScalingActivityId.5"]=$scalingActivityId5;
	}

	public function getScalingActivityId6() {
		return $this->scalingActivityId6;
	}

	public function setScalingActivityId6($scalingActivityId6) {
		$this->scalingActivityId6 = $scalingActivityId6;
		$this->queryParameters["ScalingActivityId.6"]=$scalingActivityId6;
	}

	public function getScalingGroupId() {
		return $this->scalingGroupId;
	}

	public function setScalingGroupId($scalingGroupId) {
		$this->scalingGroupId = $scalingGroupId;
		$this->queryParameters["ScalingGroupId"]=$scalingGroupId;
	}

	public function getScalingActivityId7() {
		return $this->scalingActivityId7;
	}

	public function setScalingActivityId7($scalingActivityId7) {
		$this->scalingActivityId7 = $scalingActivityId7;
		$this->queryParameters["ScalingActivityId.7"]=$scalingActivityId7;
	}

	public function getScalingActivityId8() {
		return $this->scalingActivityId8;
	}

	public function setScalingActivityId8($scalingActivityId8) {
		$this->scalingActivityId8 = $scalingActivityId8;
		$this->queryParameters["ScalingActivityId.8"]=$scalingActivityId8;
	}

	public function getScalingActivityId1() {
		return $this->scalingActivityId1;
	}

	public function setScalingActivityId1($scalingActivityId1) {
		$this->scalingActivityId1 = $scalingActivityId1;
		$this->queryParameters["ScalingActivityId.1"]=$scalingActivityId1;
	}

	public function getScalingActivityId2() {
		return $this->scalingActivityId2;
	}

	public function setScalingActivityId2($scalingActivityId2) {
		$this->scalingActivityId2 = $scalingActivityId2;
		$this->queryParameters["ScalingActivityId.2"]=$scalingActivityId2;
	}

	public function getScalingActivityId3() {
		return $this->scalingActivityId3;
	}

	public function setScalingActivityId3($scalingActivityId3) {
		$this->scalingActivityId3 = $scalingActivityId3;
		$this->queryParameters["ScalingActivityId.3"]=$scalingActivityId3;
	}

	public function getScalingActivityId4() {
		return $this->scalingActivityId4;
	}

	public function setScalingActivityId4($scalingActivityId4) {
		$this->scalingActivityId4 = $scalingActivityId4;
		$this->queryParameters["ScalingActivityId.4"]=$scalingActivityId4;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getStatusCode() {
		return $this->statusCode;
	}

	public function setStatusCode($statusCode) {
		$this->statusCode = $statusCode;
		$this->queryParameters["StatusCode"]=$statusCode;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getScalingActivityId11() {
		return $this->scalingActivityId11;
	}

	public function setScalingActivityId11($scalingActivityId11) {
		$this->scalingActivityId11 = $scalingActivityId11;
		$this->queryParameters["ScalingActivityId.11"]=$scalingActivityId11;
	}

	public function getScalingActivityId10() {
		return $this->scalingActivityId10;
	}

	public function setScalingActivityId10($scalingActivityId10) {
		$this->scalingActivityId10 = $scalingActivityId10;
		$this->queryParameters["ScalingActivityId.10"]=$scalingActivityId10;
	}

	public function getScalingActivityId13() {
		return $this->scalingActivityId13;
	}

	public function setScalingActivityId13($scalingActivityId13) {
		$this->scalingActivityId13 = $scalingActivityId13;
		$this->queryParameters["ScalingActivityId.13"]=$scalingActivityId13;
	}

	public function getScalingActivityId12() {
		return $this->scalingActivityId12;
	}

	public function setScalingActivityId12($scalingActivityId12) {
		$this->scalingActivityId12 = $scalingActivityId12;
		$this->queryParameters["ScalingActivityId.12"]=$scalingActivityId12;
	}

	public function getScalingActivityId15() {
		return $this->scalingActivityId15;
	}

	public function setScalingActivityId15($scalingActivityId15) {
		$this->scalingActivityId15 = $scalingActivityId15;
		$this->queryParameters["ScalingActivityId.15"]=$scalingActivityId15;
	}

	public function getScalingActivityId14() {
		return $this->scalingActivityId14;
	}

	public function setScalingActivityId14($scalingActivityId14) {
		$this->scalingActivityId14 = $scalingActivityId14;
		$this->queryParameters["ScalingActivityId.14"]=$scalingActivityId14;
	}

	public function getScalingActivityId17() {
		return $this->scalingActivityId17;
	}

	public function setScalingActivityId17($scalingActivityId17) {
		$this->scalingActivityId17 = $scalingActivityId17;
		$this->queryParameters["ScalingActivityId.17"]=$scalingActivityId17;
	}

	public function getScalingActivityId16() {
		return $this->scalingActivityId16;
	}

	public function setScalingActivityId16($scalingActivityId16) {
		$this->scalingActivityId16 = $scalingActivityId16;
		$this->queryParameters["ScalingActivityId.16"]=$scalingActivityId16;
	}

	public function getScalingActivityId19() {
		return $this->scalingActivityId19;
	}

	public function setScalingActivityId19($scalingActivityId19) {
		$this->scalingActivityId19 = $scalingActivityId19;
		$this->queryParameters["ScalingActivityId.19"]=$scalingActivityId19;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getScalingActivityId18() {
		return $this->scalingActivityId18;
	}

	public function setScalingActivityId18($scalingActivityId18) {
		$this->scalingActivityId18 = $scalingActivityId18;
		$this->queryParameters["ScalingActivityId.18"]=$scalingActivityId18;
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

	public function getScalingActivityId20() {
		return $this->scalingActivityId20;
	}

	public function setScalingActivityId20($scalingActivityId20) {
		$this->scalingActivityId20 = $scalingActivityId20;
		$this->queryParameters["ScalingActivityId.20"]=$scalingActivityId20;
	}
	
}