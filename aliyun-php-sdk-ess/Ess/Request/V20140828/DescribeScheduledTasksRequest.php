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

class DescribeScheduledTasksRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ess", "2014-08-28", "DescribeScheduledTasks", "ess", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $scheduledAction2;

	private  $scheduledAction1;

	private  $scheduledAction6;

	private  $scheduledAction5;

	private  $scheduledAction4;

	private  $scheduledAction3;

	private  $scheduledAction9;

	private  $scheduledAction8;

	private  $scheduledAction7;

	private  $ownerId;

	private  $scheduledTaskName20;

	private  $scheduledTaskName19;

	private  $scheduledTaskName18;

	private  $scheduledTaskId20;

	private  $scheduledTaskName13;

	private  $scheduledTaskName12;

	private  $scheduledTaskName11;

	private  $scheduledTaskName10;

	private  $scheduledTaskName17;

	private  $scheduledTaskName16;

	private  $pageNumber;

	private  $scheduledTaskName15;

	private  $scheduledTaskName14;

	private  $scheduledTaskId2;

	private  $scheduledTaskId1;

	private  $scheduledTaskId4;

	private  $scheduledTaskId18;

	private  $scheduledTaskId3;

	private  $scheduledTaskId19;

	private  $scheduledTaskId6;

	private  $scheduledTaskId5;

	private  $scheduledTaskId8;

	private  $scheduledTaskName9;

	private  $scheduledAction20;

	private  $scheduledTaskId7;

	private  $pageSize;

	private  $scheduledTaskId12;

	private  $scheduledTaskName7;

	private  $scheduledTaskId9;

	private  $scheduledTaskId13;

	private  $scheduledTaskName8;

	private  $scheduledTaskId10;

	private  $scheduledTaskName5;

	private  $scheduledTaskId11;

	private  $scheduledTaskName6;

	private  $scheduledTaskId16;

	private  $scheduledTaskName3;

	private  $scheduledTaskId17;

	private  $scheduledTaskName4;

	private  $scheduledTaskId14;

	private  $scheduledTaskName1;

	private  $scheduledTaskId15;

	private  $scheduledTaskName2;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $scheduledAction18;

	private  $scheduledAction19;

	private  $scheduledAction16;

	private  $scheduledAction17;

	private  $scheduledAction14;

	private  $scheduledAction15;

	private  $scheduledAction12;

	private  $scheduledAction13;

	private  $scheduledAction10;

	private  $scheduledAction11;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getScheduledAction2() {
		return $this->scheduledAction2;
	}

	public function setScheduledAction2($scheduledAction2) {
		$this->scheduledAction2 = $scheduledAction2;
		$this->queryParameters["ScheduledAction.2"]=$scheduledAction2;
	}

	public function getScheduledAction1() {
		return $this->scheduledAction1;
	}

	public function setScheduledAction1($scheduledAction1) {
		$this->scheduledAction1 = $scheduledAction1;
		$this->queryParameters["ScheduledAction.1"]=$scheduledAction1;
	}

	public function getScheduledAction6() {
		return $this->scheduledAction6;
	}

	public function setScheduledAction6($scheduledAction6) {
		$this->scheduledAction6 = $scheduledAction6;
		$this->queryParameters["ScheduledAction.6"]=$scheduledAction6;
	}

	public function getScheduledAction5() {
		return $this->scheduledAction5;
	}

	public function setScheduledAction5($scheduledAction5) {
		$this->scheduledAction5 = $scheduledAction5;
		$this->queryParameters["ScheduledAction.5"]=$scheduledAction5;
	}

	public function getScheduledAction4() {
		return $this->scheduledAction4;
	}

	public function setScheduledAction4($scheduledAction4) {
		$this->scheduledAction4 = $scheduledAction4;
		$this->queryParameters["ScheduledAction.4"]=$scheduledAction4;
	}

	public function getScheduledAction3() {
		return $this->scheduledAction3;
	}

	public function setScheduledAction3($scheduledAction3) {
		$this->scheduledAction3 = $scheduledAction3;
		$this->queryParameters["ScheduledAction.3"]=$scheduledAction3;
	}

	public function getScheduledAction9() {
		return $this->scheduledAction9;
	}

	public function setScheduledAction9($scheduledAction9) {
		$this->scheduledAction9 = $scheduledAction9;
		$this->queryParameters["ScheduledAction.9"]=$scheduledAction9;
	}

	public function getScheduledAction8() {
		return $this->scheduledAction8;
	}

	public function setScheduledAction8($scheduledAction8) {
		$this->scheduledAction8 = $scheduledAction8;
		$this->queryParameters["ScheduledAction.8"]=$scheduledAction8;
	}

	public function getScheduledAction7() {
		return $this->scheduledAction7;
	}

	public function setScheduledAction7($scheduledAction7) {
		$this->scheduledAction7 = $scheduledAction7;
		$this->queryParameters["ScheduledAction.7"]=$scheduledAction7;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getScheduledTaskName20() {
		return $this->scheduledTaskName20;
	}

	public function setScheduledTaskName20($scheduledTaskName20) {
		$this->scheduledTaskName20 = $scheduledTaskName20;
		$this->queryParameters["ScheduledTaskName.20"]=$scheduledTaskName20;
	}

	public function getScheduledTaskName19() {
		return $this->scheduledTaskName19;
	}

	public function setScheduledTaskName19($scheduledTaskName19) {
		$this->scheduledTaskName19 = $scheduledTaskName19;
		$this->queryParameters["ScheduledTaskName.19"]=$scheduledTaskName19;
	}

	public function getScheduledTaskName18() {
		return $this->scheduledTaskName18;
	}

	public function setScheduledTaskName18($scheduledTaskName18) {
		$this->scheduledTaskName18 = $scheduledTaskName18;
		$this->queryParameters["ScheduledTaskName.18"]=$scheduledTaskName18;
	}

	public function getScheduledTaskId20() {
		return $this->scheduledTaskId20;
	}

	public function setScheduledTaskId20($scheduledTaskId20) {
		$this->scheduledTaskId20 = $scheduledTaskId20;
		$this->queryParameters["ScheduledTaskId.20"]=$scheduledTaskId20;
	}

	public function getScheduledTaskName13() {
		return $this->scheduledTaskName13;
	}

	public function setScheduledTaskName13($scheduledTaskName13) {
		$this->scheduledTaskName13 = $scheduledTaskName13;
		$this->queryParameters["ScheduledTaskName.13"]=$scheduledTaskName13;
	}

	public function getScheduledTaskName12() {
		return $this->scheduledTaskName12;
	}

	public function setScheduledTaskName12($scheduledTaskName12) {
		$this->scheduledTaskName12 = $scheduledTaskName12;
		$this->queryParameters["ScheduledTaskName.12"]=$scheduledTaskName12;
	}

	public function getScheduledTaskName11() {
		return $this->scheduledTaskName11;
	}

	public function setScheduledTaskName11($scheduledTaskName11) {
		$this->scheduledTaskName11 = $scheduledTaskName11;
		$this->queryParameters["ScheduledTaskName.11"]=$scheduledTaskName11;
	}

	public function getScheduledTaskName10() {
		return $this->scheduledTaskName10;
	}

	public function setScheduledTaskName10($scheduledTaskName10) {
		$this->scheduledTaskName10 = $scheduledTaskName10;
		$this->queryParameters["ScheduledTaskName.10"]=$scheduledTaskName10;
	}

	public function getScheduledTaskName17() {
		return $this->scheduledTaskName17;
	}

	public function setScheduledTaskName17($scheduledTaskName17) {
		$this->scheduledTaskName17 = $scheduledTaskName17;
		$this->queryParameters["ScheduledTaskName.17"]=$scheduledTaskName17;
	}

	public function getScheduledTaskName16() {
		return $this->scheduledTaskName16;
	}

	public function setScheduledTaskName16($scheduledTaskName16) {
		$this->scheduledTaskName16 = $scheduledTaskName16;
		$this->queryParameters["ScheduledTaskName.16"]=$scheduledTaskName16;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getScheduledTaskName15() {
		return $this->scheduledTaskName15;
	}

	public function setScheduledTaskName15($scheduledTaskName15) {
		$this->scheduledTaskName15 = $scheduledTaskName15;
		$this->queryParameters["ScheduledTaskName.15"]=$scheduledTaskName15;
	}

	public function getScheduledTaskName14() {
		return $this->scheduledTaskName14;
	}

	public function setScheduledTaskName14($scheduledTaskName14) {
		$this->scheduledTaskName14 = $scheduledTaskName14;
		$this->queryParameters["ScheduledTaskName.14"]=$scheduledTaskName14;
	}

	public function getScheduledTaskId2() {
		return $this->scheduledTaskId2;
	}

	public function setScheduledTaskId2($scheduledTaskId2) {
		$this->scheduledTaskId2 = $scheduledTaskId2;
		$this->queryParameters["ScheduledTaskId.2"]=$scheduledTaskId2;
	}

	public function getScheduledTaskId1() {
		return $this->scheduledTaskId1;
	}

	public function setScheduledTaskId1($scheduledTaskId1) {
		$this->scheduledTaskId1 = $scheduledTaskId1;
		$this->queryParameters["ScheduledTaskId.1"]=$scheduledTaskId1;
	}

	public function getScheduledTaskId4() {
		return $this->scheduledTaskId4;
	}

	public function setScheduledTaskId4($scheduledTaskId4) {
		$this->scheduledTaskId4 = $scheduledTaskId4;
		$this->queryParameters["ScheduledTaskId.4"]=$scheduledTaskId4;
	}

	public function getScheduledTaskId18() {
		return $this->scheduledTaskId18;
	}

	public function setScheduledTaskId18($scheduledTaskId18) {
		$this->scheduledTaskId18 = $scheduledTaskId18;
		$this->queryParameters["ScheduledTaskId.18"]=$scheduledTaskId18;
	}

	public function getScheduledTaskId3() {
		return $this->scheduledTaskId3;
	}

	public function setScheduledTaskId3($scheduledTaskId3) {
		$this->scheduledTaskId3 = $scheduledTaskId3;
		$this->queryParameters["ScheduledTaskId.3"]=$scheduledTaskId3;
	}

	public function getScheduledTaskId19() {
		return $this->scheduledTaskId19;
	}

	public function setScheduledTaskId19($scheduledTaskId19) {
		$this->scheduledTaskId19 = $scheduledTaskId19;
		$this->queryParameters["ScheduledTaskId.19"]=$scheduledTaskId19;
	}

	public function getScheduledTaskId6() {
		return $this->scheduledTaskId6;
	}

	public function setScheduledTaskId6($scheduledTaskId6) {
		$this->scheduledTaskId6 = $scheduledTaskId6;
		$this->queryParameters["ScheduledTaskId.6"]=$scheduledTaskId6;
	}

	public function getScheduledTaskId5() {
		return $this->scheduledTaskId5;
	}

	public function setScheduledTaskId5($scheduledTaskId5) {
		$this->scheduledTaskId5 = $scheduledTaskId5;
		$this->queryParameters["ScheduledTaskId.5"]=$scheduledTaskId5;
	}

	public function getScheduledTaskId8() {
		return $this->scheduledTaskId8;
	}

	public function setScheduledTaskId8($scheduledTaskId8) {
		$this->scheduledTaskId8 = $scheduledTaskId8;
		$this->queryParameters["ScheduledTaskId.8"]=$scheduledTaskId8;
	}

	public function getScheduledTaskName9() {
		return $this->scheduledTaskName9;
	}

	public function setScheduledTaskName9($scheduledTaskName9) {
		$this->scheduledTaskName9 = $scheduledTaskName9;
		$this->queryParameters["ScheduledTaskName.9"]=$scheduledTaskName9;
	}

	public function getScheduledAction20() {
		return $this->scheduledAction20;
	}

	public function setScheduledAction20($scheduledAction20) {
		$this->scheduledAction20 = $scheduledAction20;
		$this->queryParameters["ScheduledAction.20"]=$scheduledAction20;
	}

	public function getScheduledTaskId7() {
		return $this->scheduledTaskId7;
	}

	public function setScheduledTaskId7($scheduledTaskId7) {
		$this->scheduledTaskId7 = $scheduledTaskId7;
		$this->queryParameters["ScheduledTaskId.7"]=$scheduledTaskId7;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getScheduledTaskId12() {
		return $this->scheduledTaskId12;
	}

	public function setScheduledTaskId12($scheduledTaskId12) {
		$this->scheduledTaskId12 = $scheduledTaskId12;
		$this->queryParameters["ScheduledTaskId.12"]=$scheduledTaskId12;
	}

	public function getScheduledTaskName7() {
		return $this->scheduledTaskName7;
	}

	public function setScheduledTaskName7($scheduledTaskName7) {
		$this->scheduledTaskName7 = $scheduledTaskName7;
		$this->queryParameters["ScheduledTaskName.7"]=$scheduledTaskName7;
	}

	public function getScheduledTaskId9() {
		return $this->scheduledTaskId9;
	}

	public function setScheduledTaskId9($scheduledTaskId9) {
		$this->scheduledTaskId9 = $scheduledTaskId9;
		$this->queryParameters["ScheduledTaskId.9"]=$scheduledTaskId9;
	}

	public function getScheduledTaskId13() {
		return $this->scheduledTaskId13;
	}

	public function setScheduledTaskId13($scheduledTaskId13) {
		$this->scheduledTaskId13 = $scheduledTaskId13;
		$this->queryParameters["ScheduledTaskId.13"]=$scheduledTaskId13;
	}

	public function getScheduledTaskName8() {
		return $this->scheduledTaskName8;
	}

	public function setScheduledTaskName8($scheduledTaskName8) {
		$this->scheduledTaskName8 = $scheduledTaskName8;
		$this->queryParameters["ScheduledTaskName.8"]=$scheduledTaskName8;
	}

	public function getScheduledTaskId10() {
		return $this->scheduledTaskId10;
	}

	public function setScheduledTaskId10($scheduledTaskId10) {
		$this->scheduledTaskId10 = $scheduledTaskId10;
		$this->queryParameters["ScheduledTaskId.10"]=$scheduledTaskId10;
	}

	public function getScheduledTaskName5() {
		return $this->scheduledTaskName5;
	}

	public function setScheduledTaskName5($scheduledTaskName5) {
		$this->scheduledTaskName5 = $scheduledTaskName5;
		$this->queryParameters["ScheduledTaskName.5"]=$scheduledTaskName5;
	}

	public function getScheduledTaskId11() {
		return $this->scheduledTaskId11;
	}

	public function setScheduledTaskId11($scheduledTaskId11) {
		$this->scheduledTaskId11 = $scheduledTaskId11;
		$this->queryParameters["ScheduledTaskId.11"]=$scheduledTaskId11;
	}

	public function getScheduledTaskName6() {
		return $this->scheduledTaskName6;
	}

	public function setScheduledTaskName6($scheduledTaskName6) {
		$this->scheduledTaskName6 = $scheduledTaskName6;
		$this->queryParameters["ScheduledTaskName.6"]=$scheduledTaskName6;
	}

	public function getScheduledTaskId16() {
		return $this->scheduledTaskId16;
	}

	public function setScheduledTaskId16($scheduledTaskId16) {
		$this->scheduledTaskId16 = $scheduledTaskId16;
		$this->queryParameters["ScheduledTaskId.16"]=$scheduledTaskId16;
	}

	public function getScheduledTaskName3() {
		return $this->scheduledTaskName3;
	}

	public function setScheduledTaskName3($scheduledTaskName3) {
		$this->scheduledTaskName3 = $scheduledTaskName3;
		$this->queryParameters["ScheduledTaskName.3"]=$scheduledTaskName3;
	}

	public function getScheduledTaskId17() {
		return $this->scheduledTaskId17;
	}

	public function setScheduledTaskId17($scheduledTaskId17) {
		$this->scheduledTaskId17 = $scheduledTaskId17;
		$this->queryParameters["ScheduledTaskId.17"]=$scheduledTaskId17;
	}

	public function getScheduledTaskName4() {
		return $this->scheduledTaskName4;
	}

	public function setScheduledTaskName4($scheduledTaskName4) {
		$this->scheduledTaskName4 = $scheduledTaskName4;
		$this->queryParameters["ScheduledTaskName.4"]=$scheduledTaskName4;
	}

	public function getScheduledTaskId14() {
		return $this->scheduledTaskId14;
	}

	public function setScheduledTaskId14($scheduledTaskId14) {
		$this->scheduledTaskId14 = $scheduledTaskId14;
		$this->queryParameters["ScheduledTaskId.14"]=$scheduledTaskId14;
	}

	public function getScheduledTaskName1() {
		return $this->scheduledTaskName1;
	}

	public function setScheduledTaskName1($scheduledTaskName1) {
		$this->scheduledTaskName1 = $scheduledTaskName1;
		$this->queryParameters["ScheduledTaskName.1"]=$scheduledTaskName1;
	}

	public function getScheduledTaskId15() {
		return $this->scheduledTaskId15;
	}

	public function setScheduledTaskId15($scheduledTaskId15) {
		$this->scheduledTaskId15 = $scheduledTaskId15;
		$this->queryParameters["ScheduledTaskId.15"]=$scheduledTaskId15;
	}

	public function getScheduledTaskName2() {
		return $this->scheduledTaskName2;
	}

	public function setScheduledTaskName2($scheduledTaskName2) {
		$this->scheduledTaskName2 = $scheduledTaskName2;
		$this->queryParameters["ScheduledTaskName.2"]=$scheduledTaskName2;
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

	public function getScheduledAction18() {
		return $this->scheduledAction18;
	}

	public function setScheduledAction18($scheduledAction18) {
		$this->scheduledAction18 = $scheduledAction18;
		$this->queryParameters["ScheduledAction.18"]=$scheduledAction18;
	}

	public function getScheduledAction19() {
		return $this->scheduledAction19;
	}

	public function setScheduledAction19($scheduledAction19) {
		$this->scheduledAction19 = $scheduledAction19;
		$this->queryParameters["ScheduledAction.19"]=$scheduledAction19;
	}

	public function getScheduledAction16() {
		return $this->scheduledAction16;
	}

	public function setScheduledAction16($scheduledAction16) {
		$this->scheduledAction16 = $scheduledAction16;
		$this->queryParameters["ScheduledAction.16"]=$scheduledAction16;
	}

	public function getScheduledAction17() {
		return $this->scheduledAction17;
	}

	public function setScheduledAction17($scheduledAction17) {
		$this->scheduledAction17 = $scheduledAction17;
		$this->queryParameters["ScheduledAction.17"]=$scheduledAction17;
	}

	public function getScheduledAction14() {
		return $this->scheduledAction14;
	}

	public function setScheduledAction14($scheduledAction14) {
		$this->scheduledAction14 = $scheduledAction14;
		$this->queryParameters["ScheduledAction.14"]=$scheduledAction14;
	}

	public function getScheduledAction15() {
		return $this->scheduledAction15;
	}

	public function setScheduledAction15($scheduledAction15) {
		$this->scheduledAction15 = $scheduledAction15;
		$this->queryParameters["ScheduledAction.15"]=$scheduledAction15;
	}

	public function getScheduledAction12() {
		return $this->scheduledAction12;
	}

	public function setScheduledAction12($scheduledAction12) {
		$this->scheduledAction12 = $scheduledAction12;
		$this->queryParameters["ScheduledAction.12"]=$scheduledAction12;
	}

	public function getScheduledAction13() {
		return $this->scheduledAction13;
	}

	public function setScheduledAction13($scheduledAction13) {
		$this->scheduledAction13 = $scheduledAction13;
		$this->queryParameters["ScheduledAction.13"]=$scheduledAction13;
	}

	public function getScheduledAction10() {
		return $this->scheduledAction10;
	}

	public function setScheduledAction10($scheduledAction10) {
		$this->scheduledAction10 = $scheduledAction10;
		$this->queryParameters["ScheduledAction.10"]=$scheduledAction10;
	}

	public function getScheduledAction11() {
		return $this->scheduledAction11;
	}

	public function setScheduledAction11($scheduledAction11) {
		$this->scheduledAction11 = $scheduledAction11;
		$this->queryParameters["ScheduledAction.11"]=$scheduledAction11;
	}
	
}