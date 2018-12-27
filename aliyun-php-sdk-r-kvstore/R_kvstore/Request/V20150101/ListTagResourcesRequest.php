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
namespace R_kvstore\Request\V20150101;

class ListTagResourcesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("R-kvstore", "2015-01-01", "ListTagResources", "redisa", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceId47;

	private  $resourceId48;

	private  $resourceOwnerId;

	private  $resourceId49;

	private  $resourceId40;

	private  $resourceId41;

	private  $resourceId42;

	private  $tagKey9;

	private  $resourceId1;

	private  $resourceId43;

	private  $resourceId2;

	private  $resourceId44;

	private  $resourceId3;

	private  $resourceId45;

	private  $resourceId4;

	private  $resourceId46;

	private  $resourceId5;

	private  $tagKey4;

	private  $resourceId6;

	private  $tagKey3;

	private  $resourceId7;

	private  $tagKey2;

	private  $resourceId8;

	private  $tagKey1;

	private  $resourceId9;

	private  $tagKey8;

	private  $tagKey20;

	private  $securityToken;

	private  $tagKey7;

	private  $tagKey6;

	private  $tagKey5;

	private  $resourceId36;

	private  $resourceId37;

	private  $resourceId38;

	private  $resourceId39;

	private  $resourceId30;

	private  $resourceId31;

	private  $ownerId;

	private  $resourceId32;

	private  $resourceId33;

	private  $resourceId34;

	private  $resourceId35;

	private  $resourceId25;

	private  $resourceId26;

	private  $resourceId27;

	private  $resourceId28;

	private  $resourceId29;

	private  $resourceId20;

	private  $resourceId21;

	private  $resourceId22;

	private  $resourceId23;

	private  $resourceId24;

	private  $nextToken;

	private  $scope;

	private  $resourceId14;

	private  $resourceId15;

	private  $resourceId16;

	private  $tagKey19;

	private  $resourceId17;

	private  $tagKey18;

	private  $resourceId18;

	private  $resourceOwnerAccount;

	private  $resourceId19;

	private  $ownerAccount;

	private  $resourceId50;

	private  $resourceId10;

	private  $resourceType;

	private  $resourceId11;

	private  $resourceId12;

	private  $resourceId13;

	private  $tagKey13;

	private  $tagKey12;

	private  $tagKey11;

	private  $tagKey10;

	private  $tagKey17;

	private  $tagKey16;

	private  $tagKey15;

	private  $tagKey14;

	public function getResourceId47() {
		return $this->resourceId47;
	}

	public function setResourceId47($resourceId47) {
		$this->resourceId47 = $resourceId47;
		$this->queryParameters["ResourceId.47"]=$resourceId47;
	}

	public function getResourceId48() {
		return $this->resourceId48;
	}

	public function setResourceId48($resourceId48) {
		$this->resourceId48 = $resourceId48;
		$this->queryParameters["ResourceId.48"]=$resourceId48;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceId49() {
		return $this->resourceId49;
	}

	public function setResourceId49($resourceId49) {
		$this->resourceId49 = $resourceId49;
		$this->queryParameters["ResourceId.49"]=$resourceId49;
	}

	public function getResourceId40() {
		return $this->resourceId40;
	}

	public function setResourceId40($resourceId40) {
		$this->resourceId40 = $resourceId40;
		$this->queryParameters["ResourceId.40"]=$resourceId40;
	}

	public function getResourceId41() {
		return $this->resourceId41;
	}

	public function setResourceId41($resourceId41) {
		$this->resourceId41 = $resourceId41;
		$this->queryParameters["ResourceId.41"]=$resourceId41;
	}

	public function getResourceId42() {
		return $this->resourceId42;
	}

	public function setResourceId42($resourceId42) {
		$this->resourceId42 = $resourceId42;
		$this->queryParameters["ResourceId.42"]=$resourceId42;
	}

	public function getTagKey9() {
		return $this->tagKey9;
	}

	public function setTagKey9($tagKey9) {
		$this->tagKey9 = $tagKey9;
		$this->queryParameters["TagKey.9"]=$tagKey9;
	}

	public function getResourceId1() {
		return $this->resourceId1;
	}

	public function setResourceId1($resourceId1) {
		$this->resourceId1 = $resourceId1;
		$this->queryParameters["ResourceId.1"]=$resourceId1;
	}

	public function getResourceId43() {
		return $this->resourceId43;
	}

	public function setResourceId43($resourceId43) {
		$this->resourceId43 = $resourceId43;
		$this->queryParameters["ResourceId.43"]=$resourceId43;
	}

	public function getResourceId2() {
		return $this->resourceId2;
	}

	public function setResourceId2($resourceId2) {
		$this->resourceId2 = $resourceId2;
		$this->queryParameters["ResourceId.2"]=$resourceId2;
	}

	public function getResourceId44() {
		return $this->resourceId44;
	}

	public function setResourceId44($resourceId44) {
		$this->resourceId44 = $resourceId44;
		$this->queryParameters["ResourceId.44"]=$resourceId44;
	}

	public function getResourceId3() {
		return $this->resourceId3;
	}

	public function setResourceId3($resourceId3) {
		$this->resourceId3 = $resourceId3;
		$this->queryParameters["ResourceId.3"]=$resourceId3;
	}

	public function getResourceId45() {
		return $this->resourceId45;
	}

	public function setResourceId45($resourceId45) {
		$this->resourceId45 = $resourceId45;
		$this->queryParameters["ResourceId.45"]=$resourceId45;
	}

	public function getResourceId4() {
		return $this->resourceId4;
	}

	public function setResourceId4($resourceId4) {
		$this->resourceId4 = $resourceId4;
		$this->queryParameters["ResourceId.4"]=$resourceId4;
	}

	public function getResourceId46() {
		return $this->resourceId46;
	}

	public function setResourceId46($resourceId46) {
		$this->resourceId46 = $resourceId46;
		$this->queryParameters["ResourceId.46"]=$resourceId46;
	}

	public function getResourceId5() {
		return $this->resourceId5;
	}

	public function setResourceId5($resourceId5) {
		$this->resourceId5 = $resourceId5;
		$this->queryParameters["ResourceId.5"]=$resourceId5;
	}

	public function getTagKey4() {
		return $this->tagKey4;
	}

	public function setTagKey4($tagKey4) {
		$this->tagKey4 = $tagKey4;
		$this->queryParameters["TagKey.4"]=$tagKey4;
	}

	public function getResourceId6() {
		return $this->resourceId6;
	}

	public function setResourceId6($resourceId6) {
		$this->resourceId6 = $resourceId6;
		$this->queryParameters["ResourceId.6"]=$resourceId6;
	}

	public function getTagKey3() {
		return $this->tagKey3;
	}

	public function setTagKey3($tagKey3) {
		$this->tagKey3 = $tagKey3;
		$this->queryParameters["TagKey.3"]=$tagKey3;
	}

	public function getResourceId7() {
		return $this->resourceId7;
	}

	public function setResourceId7($resourceId7) {
		$this->resourceId7 = $resourceId7;
		$this->queryParameters["ResourceId.7"]=$resourceId7;
	}

	public function getTagKey2() {
		return $this->tagKey2;
	}

	public function setTagKey2($tagKey2) {
		$this->tagKey2 = $tagKey2;
		$this->queryParameters["TagKey.2"]=$tagKey2;
	}

	public function getResourceId8() {
		return $this->resourceId8;
	}

	public function setResourceId8($resourceId8) {
		$this->resourceId8 = $resourceId8;
		$this->queryParameters["ResourceId.8"]=$resourceId8;
	}

	public function getTagKey1() {
		return $this->tagKey1;
	}

	public function setTagKey1($tagKey1) {
		$this->tagKey1 = $tagKey1;
		$this->queryParameters["TagKey.1"]=$tagKey1;
	}

	public function getResourceId9() {
		return $this->resourceId9;
	}

	public function setResourceId9($resourceId9) {
		$this->resourceId9 = $resourceId9;
		$this->queryParameters["ResourceId.9"]=$resourceId9;
	}

	public function getTagKey8() {
		return $this->tagKey8;
	}

	public function setTagKey8($tagKey8) {
		$this->tagKey8 = $tagKey8;
		$this->queryParameters["TagKey.8"]=$tagKey8;
	}

	public function getTagKey20() {
		return $this->tagKey20;
	}

	public function setTagKey20($tagKey20) {
		$this->tagKey20 = $tagKey20;
		$this->queryParameters["TagKey.20"]=$tagKey20;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getTagKey7() {
		return $this->tagKey7;
	}

	public function setTagKey7($tagKey7) {
		$this->tagKey7 = $tagKey7;
		$this->queryParameters["TagKey.7"]=$tagKey7;
	}

	public function getTagKey6() {
		return $this->tagKey6;
	}

	public function setTagKey6($tagKey6) {
		$this->tagKey6 = $tagKey6;
		$this->queryParameters["TagKey.6"]=$tagKey6;
	}

	public function getTagKey5() {
		return $this->tagKey5;
	}

	public function setTagKey5($tagKey5) {
		$this->tagKey5 = $tagKey5;
		$this->queryParameters["TagKey.5"]=$tagKey5;
	}

	public function getResourceId36() {
		return $this->resourceId36;
	}

	public function setResourceId36($resourceId36) {
		$this->resourceId36 = $resourceId36;
		$this->queryParameters["ResourceId.36"]=$resourceId36;
	}

	public function getResourceId37() {
		return $this->resourceId37;
	}

	public function setResourceId37($resourceId37) {
		$this->resourceId37 = $resourceId37;
		$this->queryParameters["ResourceId.37"]=$resourceId37;
	}

	public function getResourceId38() {
		return $this->resourceId38;
	}

	public function setResourceId38($resourceId38) {
		$this->resourceId38 = $resourceId38;
		$this->queryParameters["ResourceId.38"]=$resourceId38;
	}

	public function getResourceId39() {
		return $this->resourceId39;
	}

	public function setResourceId39($resourceId39) {
		$this->resourceId39 = $resourceId39;
		$this->queryParameters["ResourceId.39"]=$resourceId39;
	}

	public function getResourceId30() {
		return $this->resourceId30;
	}

	public function setResourceId30($resourceId30) {
		$this->resourceId30 = $resourceId30;
		$this->queryParameters["ResourceId.30"]=$resourceId30;
	}

	public function getResourceId31() {
		return $this->resourceId31;
	}

	public function setResourceId31($resourceId31) {
		$this->resourceId31 = $resourceId31;
		$this->queryParameters["ResourceId.31"]=$resourceId31;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceId32() {
		return $this->resourceId32;
	}

	public function setResourceId32($resourceId32) {
		$this->resourceId32 = $resourceId32;
		$this->queryParameters["ResourceId.32"]=$resourceId32;
	}

	public function getResourceId33() {
		return $this->resourceId33;
	}

	public function setResourceId33($resourceId33) {
		$this->resourceId33 = $resourceId33;
		$this->queryParameters["ResourceId.33"]=$resourceId33;
	}

	public function getResourceId34() {
		return $this->resourceId34;
	}

	public function setResourceId34($resourceId34) {
		$this->resourceId34 = $resourceId34;
		$this->queryParameters["ResourceId.34"]=$resourceId34;
	}

	public function getResourceId35() {
		return $this->resourceId35;
	}

	public function setResourceId35($resourceId35) {
		$this->resourceId35 = $resourceId35;
		$this->queryParameters["ResourceId.35"]=$resourceId35;
	}

	public function getResourceId25() {
		return $this->resourceId25;
	}

	public function setResourceId25($resourceId25) {
		$this->resourceId25 = $resourceId25;
		$this->queryParameters["ResourceId.25"]=$resourceId25;
	}

	public function getResourceId26() {
		return $this->resourceId26;
	}

	public function setResourceId26($resourceId26) {
		$this->resourceId26 = $resourceId26;
		$this->queryParameters["ResourceId.26"]=$resourceId26;
	}

	public function getResourceId27() {
		return $this->resourceId27;
	}

	public function setResourceId27($resourceId27) {
		$this->resourceId27 = $resourceId27;
		$this->queryParameters["ResourceId.27"]=$resourceId27;
	}

	public function getResourceId28() {
		return $this->resourceId28;
	}

	public function setResourceId28($resourceId28) {
		$this->resourceId28 = $resourceId28;
		$this->queryParameters["ResourceId.28"]=$resourceId28;
	}

	public function getResourceId29() {
		return $this->resourceId29;
	}

	public function setResourceId29($resourceId29) {
		$this->resourceId29 = $resourceId29;
		$this->queryParameters["ResourceId.29"]=$resourceId29;
	}

	public function getResourceId20() {
		return $this->resourceId20;
	}

	public function setResourceId20($resourceId20) {
		$this->resourceId20 = $resourceId20;
		$this->queryParameters["ResourceId.20"]=$resourceId20;
	}

	public function getResourceId21() {
		return $this->resourceId21;
	}

	public function setResourceId21($resourceId21) {
		$this->resourceId21 = $resourceId21;
		$this->queryParameters["ResourceId.21"]=$resourceId21;
	}

	public function getResourceId22() {
		return $this->resourceId22;
	}

	public function setResourceId22($resourceId22) {
		$this->resourceId22 = $resourceId22;
		$this->queryParameters["ResourceId.22"]=$resourceId22;
	}

	public function getResourceId23() {
		return $this->resourceId23;
	}

	public function setResourceId23($resourceId23) {
		$this->resourceId23 = $resourceId23;
		$this->queryParameters["ResourceId.23"]=$resourceId23;
	}

	public function getResourceId24() {
		return $this->resourceId24;
	}

	public function setResourceId24($resourceId24) {
		$this->resourceId24 = $resourceId24;
		$this->queryParameters["ResourceId.24"]=$resourceId24;
	}

	public function getNextToken() {
		return $this->nextToken;
	}

	public function setNextToken($nextToken) {
		$this->nextToken = $nextToken;
		$this->queryParameters["NextToken"]=$nextToken;
	}

	public function getScope() {
		return $this->scope;
	}

	public function setScope($scope) {
		$this->scope = $scope;
		$this->queryParameters["Scope"]=$scope;
	}

	public function getResourceId14() {
		return $this->resourceId14;
	}

	public function setResourceId14($resourceId14) {
		$this->resourceId14 = $resourceId14;
		$this->queryParameters["ResourceId.14"]=$resourceId14;
	}

	public function getResourceId15() {
		return $this->resourceId15;
	}

	public function setResourceId15($resourceId15) {
		$this->resourceId15 = $resourceId15;
		$this->queryParameters["ResourceId.15"]=$resourceId15;
	}

	public function getResourceId16() {
		return $this->resourceId16;
	}

	public function setResourceId16($resourceId16) {
		$this->resourceId16 = $resourceId16;
		$this->queryParameters["ResourceId.16"]=$resourceId16;
	}

	public function getTagKey19() {
		return $this->tagKey19;
	}

	public function setTagKey19($tagKey19) {
		$this->tagKey19 = $tagKey19;
		$this->queryParameters["TagKey.19"]=$tagKey19;
	}

	public function getResourceId17() {
		return $this->resourceId17;
	}

	public function setResourceId17($resourceId17) {
		$this->resourceId17 = $resourceId17;
		$this->queryParameters["ResourceId.17"]=$resourceId17;
	}

	public function getTagKey18() {
		return $this->tagKey18;
	}

	public function setTagKey18($tagKey18) {
		$this->tagKey18 = $tagKey18;
		$this->queryParameters["TagKey.18"]=$tagKey18;
	}

	public function getResourceId18() {
		return $this->resourceId18;
	}

	public function setResourceId18($resourceId18) {
		$this->resourceId18 = $resourceId18;
		$this->queryParameters["ResourceId.18"]=$resourceId18;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getResourceId19() {
		return $this->resourceId19;
	}

	public function setResourceId19($resourceId19) {
		$this->resourceId19 = $resourceId19;
		$this->queryParameters["ResourceId.19"]=$resourceId19;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getResourceId50() {
		return $this->resourceId50;
	}

	public function setResourceId50($resourceId50) {
		$this->resourceId50 = $resourceId50;
		$this->queryParameters["ResourceId.50"]=$resourceId50;
	}

	public function getResourceId10() {
		return $this->resourceId10;
	}

	public function setResourceId10($resourceId10) {
		$this->resourceId10 = $resourceId10;
		$this->queryParameters["ResourceId.10"]=$resourceId10;
	}

	public function getResourceType() {
		return $this->resourceType;
	}

	public function setResourceType($resourceType) {
		$this->resourceType = $resourceType;
		$this->queryParameters["ResourceType"]=$resourceType;
	}

	public function getResourceId11() {
		return $this->resourceId11;
	}

	public function setResourceId11($resourceId11) {
		$this->resourceId11 = $resourceId11;
		$this->queryParameters["ResourceId.11"]=$resourceId11;
	}

	public function getResourceId12() {
		return $this->resourceId12;
	}

	public function setResourceId12($resourceId12) {
		$this->resourceId12 = $resourceId12;
		$this->queryParameters["ResourceId.12"]=$resourceId12;
	}

	public function getResourceId13() {
		return $this->resourceId13;
	}

	public function setResourceId13($resourceId13) {
		$this->resourceId13 = $resourceId13;
		$this->queryParameters["ResourceId.13"]=$resourceId13;
	}

	public function getTagKey13() {
		return $this->tagKey13;
	}

	public function setTagKey13($tagKey13) {
		$this->tagKey13 = $tagKey13;
		$this->queryParameters["TagKey.13"]=$tagKey13;
	}

	public function getTagKey12() {
		return $this->tagKey12;
	}

	public function setTagKey12($tagKey12) {
		$this->tagKey12 = $tagKey12;
		$this->queryParameters["TagKey.12"]=$tagKey12;
	}

	public function getTagKey11() {
		return $this->tagKey11;
	}

	public function setTagKey11($tagKey11) {
		$this->tagKey11 = $tagKey11;
		$this->queryParameters["TagKey.11"]=$tagKey11;
	}

	public function getTagKey10() {
		return $this->tagKey10;
	}

	public function setTagKey10($tagKey10) {
		$this->tagKey10 = $tagKey10;
		$this->queryParameters["TagKey.10"]=$tagKey10;
	}

	public function getTagKey17() {
		return $this->tagKey17;
	}

	public function setTagKey17($tagKey17) {
		$this->tagKey17 = $tagKey17;
		$this->queryParameters["TagKey.17"]=$tagKey17;
	}

	public function getTagKey16() {
		return $this->tagKey16;
	}

	public function setTagKey16($tagKey16) {
		$this->tagKey16 = $tagKey16;
		$this->queryParameters["TagKey.16"]=$tagKey16;
	}

	public function getTagKey15() {
		return $this->tagKey15;
	}

	public function setTagKey15($tagKey15) {
		$this->tagKey15 = $tagKey15;
		$this->queryParameters["TagKey.15"]=$tagKey15;
	}

	public function getTagKey14() {
		return $this->tagKey14;
	}

	public function setTagKey14($tagKey14) {
		$this->tagKey14 = $tagKey14;
		$this->queryParameters["TagKey.14"]=$tagKey14;
	}
	
}