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

class TagResourcesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("R-kvstore", "2015-01-01", "TagResources", "redisa", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceId47;

	private  $resourceId48;

	private  $resourceId49;

	private  $tag2Key;

	private  $tag12Value;

	private  $resourceId40;

	private  $resourceId41;

	private  $resourceId42;

	private  $resourceId1;

	private  $resourceId43;

	private  $resourceId2;

	private  $resourceId44;

	private  $resourceId3;

	private  $resourceId45;

	private  $resourceId4;

	private  $resourceId46;

	private  $resourceId5;

	private  $resourceId6;

	private  $resourceId7;

	private  $resourceId8;

	private  $resourceId9;

	private  $tag15Value;

	private  $tag18Key;

	private  $tag8Value;

	private  $tag18Value;

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

	private  $tag16Key;

	private  $tag4Key;

	private  $resourceId25;

	private  $resourceId26;

	private  $resourceId27;

	private  $resourceId28;

	private  $resourceId29;

	private  $tag7Key;

	private  $tag12Key;

	private  $tag6Value;

	private  $resourceId20;

	private  $resourceId21;

	private  $resourceId22;

	private  $resourceId23;

	private  $resourceId24;

	private  $tag14Key;

	private  $tag13Value;

	private  $resourceId14;

	private  $resourceId15;

	private  $tag10Key;

	private  $resourceId16;

	private  $resourceId17;

	private  $resourceId18;

	private  $resourceOwnerAccount;

	private  $resourceId19;

	private  $tag19Key;

	private  $resourceId10;

	private  $resourceType;

	private  $resourceId11;

	private  $tag5Value;

	private  $resourceId12;

	private  $resourceId13;

	private  $tag9Key;

	private  $tag19Value;

	private  $tag4Value;

	private  $resourceOwnerId;

	private  $tag17Key;

	private  $tag3Key;

	private  $tag1Value;

	private  $securityToken;

	private  $tag15Key;

	private  $tag11Value;

	private  $tag5Key;

	private  $tag14Value;

	private  $tag7Value;

	private  $tag20Key;

	private  $tag20Value;

	private  $tag17Value;

	private  $tag13Key;

	private  $tag9Value;

	private  $tag6Key;

	private  $scope;

	private  $tag10Value;

	private  $tag3Value;

	private  $ownerAccount;

	private  $resourceId50;

	private  $tag16Value;

	private  $tag1Key;

	private  $tag8Key;

	private  $tag11Key;

	private  $tag2Value;

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

	public function getResourceId49() {
		return $this->resourceId49;
	}

	public function setResourceId49($resourceId49) {
		$this->resourceId49 = $resourceId49;
		$this->queryParameters["ResourceId.49"]=$resourceId49;
	}

	public function getTag2Key() {
		return $this->tag2Key;
	}

	public function setTag2Key($tag2Key) {
		$this->tag2Key = $tag2Key;
		$this->queryParameters["Tag.2.Key"]=$tag2Key;
	}

	public function getTag12Value() {
		return $this->tag12Value;
	}

	public function setTag12Value($tag12Value) {
		$this->tag12Value = $tag12Value;
		$this->queryParameters["Tag.12.Value"]=$tag12Value;
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

	public function getResourceId6() {
		return $this->resourceId6;
	}

	public function setResourceId6($resourceId6) {
		$this->resourceId6 = $resourceId6;
		$this->queryParameters["ResourceId.6"]=$resourceId6;
	}

	public function getResourceId7() {
		return $this->resourceId7;
	}

	public function setResourceId7($resourceId7) {
		$this->resourceId7 = $resourceId7;
		$this->queryParameters["ResourceId.7"]=$resourceId7;
	}

	public function getResourceId8() {
		return $this->resourceId8;
	}

	public function setResourceId8($resourceId8) {
		$this->resourceId8 = $resourceId8;
		$this->queryParameters["ResourceId.8"]=$resourceId8;
	}

	public function getResourceId9() {
		return $this->resourceId9;
	}

	public function setResourceId9($resourceId9) {
		$this->resourceId9 = $resourceId9;
		$this->queryParameters["ResourceId.9"]=$resourceId9;
	}

	public function getTag15Value() {
		return $this->tag15Value;
	}

	public function setTag15Value($tag15Value) {
		$this->tag15Value = $tag15Value;
		$this->queryParameters["Tag.15.Value"]=$tag15Value;
	}

	public function getTag18Key() {
		return $this->tag18Key;
	}

	public function setTag18Key($tag18Key) {
		$this->tag18Key = $tag18Key;
		$this->queryParameters["Tag.18.Key"]=$tag18Key;
	}

	public function getTag8Value() {
		return $this->tag8Value;
	}

	public function setTag8Value($tag8Value) {
		$this->tag8Value = $tag8Value;
		$this->queryParameters["Tag.8.Value"]=$tag8Value;
	}

	public function getTag18Value() {
		return $this->tag18Value;
	}

	public function setTag18Value($tag18Value) {
		$this->tag18Value = $tag18Value;
		$this->queryParameters["Tag.18.Value"]=$tag18Value;
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

	public function getTag16Key() {
		return $this->tag16Key;
	}

	public function setTag16Key($tag16Key) {
		$this->tag16Key = $tag16Key;
		$this->queryParameters["Tag.16.Key"]=$tag16Key;
	}

	public function getTag4Key() {
		return $this->tag4Key;
	}

	public function setTag4Key($tag4Key) {
		$this->tag4Key = $tag4Key;
		$this->queryParameters["Tag.4.Key"]=$tag4Key;
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

	public function getTag7Key() {
		return $this->tag7Key;
	}

	public function setTag7Key($tag7Key) {
		$this->tag7Key = $tag7Key;
		$this->queryParameters["Tag.7.Key"]=$tag7Key;
	}

	public function getTag12Key() {
		return $this->tag12Key;
	}

	public function setTag12Key($tag12Key) {
		$this->tag12Key = $tag12Key;
		$this->queryParameters["Tag.12.Key"]=$tag12Key;
	}

	public function getTag6Value() {
		return $this->tag6Value;
	}

	public function setTag6Value($tag6Value) {
		$this->tag6Value = $tag6Value;
		$this->queryParameters["Tag.6.Value"]=$tag6Value;
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

	public function getTag14Key() {
		return $this->tag14Key;
	}

	public function setTag14Key($tag14Key) {
		$this->tag14Key = $tag14Key;
		$this->queryParameters["Tag.14.Key"]=$tag14Key;
	}

	public function getTag13Value() {
		return $this->tag13Value;
	}

	public function setTag13Value($tag13Value) {
		$this->tag13Value = $tag13Value;
		$this->queryParameters["Tag.13.Value"]=$tag13Value;
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

	public function getTag10Key() {
		return $this->tag10Key;
	}

	public function setTag10Key($tag10Key) {
		$this->tag10Key = $tag10Key;
		$this->queryParameters["Tag.10.Key"]=$tag10Key;
	}

	public function getResourceId16() {
		return $this->resourceId16;
	}

	public function setResourceId16($resourceId16) {
		$this->resourceId16 = $resourceId16;
		$this->queryParameters["ResourceId.16"]=$resourceId16;
	}

	public function getResourceId17() {
		return $this->resourceId17;
	}

	public function setResourceId17($resourceId17) {
		$this->resourceId17 = $resourceId17;
		$this->queryParameters["ResourceId.17"]=$resourceId17;
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

	public function getTag19Key() {
		return $this->tag19Key;
	}

	public function setTag19Key($tag19Key) {
		$this->tag19Key = $tag19Key;
		$this->queryParameters["Tag.19.Key"]=$tag19Key;
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

	public function getTag5Value() {
		return $this->tag5Value;
	}

	public function setTag5Value($tag5Value) {
		$this->tag5Value = $tag5Value;
		$this->queryParameters["Tag.5.Value"]=$tag5Value;
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

	public function getTag9Key() {
		return $this->tag9Key;
	}

	public function setTag9Key($tag9Key) {
		$this->tag9Key = $tag9Key;
		$this->queryParameters["Tag.9.Key"]=$tag9Key;
	}

	public function getTag19Value() {
		return $this->tag19Value;
	}

	public function setTag19Value($tag19Value) {
		$this->tag19Value = $tag19Value;
		$this->queryParameters["Tag.19.Value"]=$tag19Value;
	}

	public function getTag4Value() {
		return $this->tag4Value;
	}

	public function setTag4Value($tag4Value) {
		$this->tag4Value = $tag4Value;
		$this->queryParameters["Tag.4.Value"]=$tag4Value;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getTag17Key() {
		return $this->tag17Key;
	}

	public function setTag17Key($tag17Key) {
		$this->tag17Key = $tag17Key;
		$this->queryParameters["Tag.17.Key"]=$tag17Key;
	}

	public function getTag3Key() {
		return $this->tag3Key;
	}

	public function setTag3Key($tag3Key) {
		$this->tag3Key = $tag3Key;
		$this->queryParameters["Tag.3.Key"]=$tag3Key;
	}

	public function getTag1Value() {
		return $this->tag1Value;
	}

	public function setTag1Value($tag1Value) {
		$this->tag1Value = $tag1Value;
		$this->queryParameters["Tag.1.Value"]=$tag1Value;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getTag15Key() {
		return $this->tag15Key;
	}

	public function setTag15Key($tag15Key) {
		$this->tag15Key = $tag15Key;
		$this->queryParameters["Tag.15.Key"]=$tag15Key;
	}

	public function getTag11Value() {
		return $this->tag11Value;
	}

	public function setTag11Value($tag11Value) {
		$this->tag11Value = $tag11Value;
		$this->queryParameters["Tag.11.Value"]=$tag11Value;
	}

	public function getTag5Key() {
		return $this->tag5Key;
	}

	public function setTag5Key($tag5Key) {
		$this->tag5Key = $tag5Key;
		$this->queryParameters["Tag.5.Key"]=$tag5Key;
	}

	public function getTag14Value() {
		return $this->tag14Value;
	}

	public function setTag14Value($tag14Value) {
		$this->tag14Value = $tag14Value;
		$this->queryParameters["Tag.14.Value"]=$tag14Value;
	}

	public function getTag7Value() {
		return $this->tag7Value;
	}

	public function setTag7Value($tag7Value) {
		$this->tag7Value = $tag7Value;
		$this->queryParameters["Tag.7.Value"]=$tag7Value;
	}

	public function getTag20Key() {
		return $this->tag20Key;
	}

	public function setTag20Key($tag20Key) {
		$this->tag20Key = $tag20Key;
		$this->queryParameters["Tag.20.Key"]=$tag20Key;
	}

	public function getTag20Value() {
		return $this->tag20Value;
	}

	public function setTag20Value($tag20Value) {
		$this->tag20Value = $tag20Value;
		$this->queryParameters["Tag.20.Value"]=$tag20Value;
	}

	public function getTag17Value() {
		return $this->tag17Value;
	}

	public function setTag17Value($tag17Value) {
		$this->tag17Value = $tag17Value;
		$this->queryParameters["Tag.17.Value"]=$tag17Value;
	}

	public function getTag13Key() {
		return $this->tag13Key;
	}

	public function setTag13Key($tag13Key) {
		$this->tag13Key = $tag13Key;
		$this->queryParameters["Tag.13.Key"]=$tag13Key;
	}

	public function getTag9Value() {
		return $this->tag9Value;
	}

	public function setTag9Value($tag9Value) {
		$this->tag9Value = $tag9Value;
		$this->queryParameters["Tag.9.Value"]=$tag9Value;
	}

	public function getTag6Key() {
		return $this->tag6Key;
	}

	public function setTag6Key($tag6Key) {
		$this->tag6Key = $tag6Key;
		$this->queryParameters["Tag.6.Key"]=$tag6Key;
	}

	public function getScope() {
		return $this->scope;
	}

	public function setScope($scope) {
		$this->scope = $scope;
		$this->queryParameters["Scope"]=$scope;
	}

	public function getTag10Value() {
		return $this->tag10Value;
	}

	public function setTag10Value($tag10Value) {
		$this->tag10Value = $tag10Value;
		$this->queryParameters["Tag.10.Value"]=$tag10Value;
	}

	public function getTag3Value() {
		return $this->tag3Value;
	}

	public function setTag3Value($tag3Value) {
		$this->tag3Value = $tag3Value;
		$this->queryParameters["Tag.3.Value"]=$tag3Value;
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

	public function getTag16Value() {
		return $this->tag16Value;
	}

	public function setTag16Value($tag16Value) {
		$this->tag16Value = $tag16Value;
		$this->queryParameters["Tag.16.Value"]=$tag16Value;
	}

	public function getTag1Key() {
		return $this->tag1Key;
	}

	public function setTag1Key($tag1Key) {
		$this->tag1Key = $tag1Key;
		$this->queryParameters["Tag.1.Key"]=$tag1Key;
	}

	public function getTag8Key() {
		return $this->tag8Key;
	}

	public function setTag8Key($tag8Key) {
		$this->tag8Key = $tag8Key;
		$this->queryParameters["Tag.8.Key"]=$tag8Key;
	}

	public function getTag11Key() {
		return $this->tag11Key;
	}

	public function setTag11Key($tag11Key) {
		$this->tag11Key = $tag11Key;
		$this->queryParameters["Tag.11.Key"]=$tag11Key;
	}

	public function getTag2Value() {
		return $this->tag2Value;
	}

	public function setTag2Value($tag2Value) {
		$this->tag2Value = $tag2Value;
		$this->queryParameters["Tag.2.Value"]=$tag2Value;
	}
	
}