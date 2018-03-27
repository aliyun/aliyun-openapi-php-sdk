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
namespace live\Request\V20161101;

class AddCasterVideoResourceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "AddCasterVideoResource", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $beginOffset;

	private  $vodUrl;

	private  $liveStreamUrl;

	private  $locationId;

	private  $casterId;

	private  $endOffset;

	private  $resourceName;

	private  $repeatNum;

	private  $ownerId;

	private  $materialId;

	public function getBeginOffset() {
		return $this->beginOffset;
	}

	public function setBeginOffset($beginOffset) {
		$this->beginOffset = $beginOffset;
		$this->queryParameters["BeginOffset"]=$beginOffset;
	}

	public function getVodUrl() {
		return $this->vodUrl;
	}

	public function setVodUrl($vodUrl) {
		$this->vodUrl = $vodUrl;
		$this->queryParameters["VodUrl"]=$vodUrl;
	}

	public function getLiveStreamUrl() {
		return $this->liveStreamUrl;
	}

	public function setLiveStreamUrl($liveStreamUrl) {
		$this->liveStreamUrl = $liveStreamUrl;
		$this->queryParameters["LiveStreamUrl"]=$liveStreamUrl;
	}

	public function getLocationId() {
		return $this->locationId;
	}

	public function setLocationId($locationId) {
		$this->locationId = $locationId;
		$this->queryParameters["LocationId"]=$locationId;
	}

	public function getCasterId() {
		return $this->casterId;
	}

	public function setCasterId($casterId) {
		$this->casterId = $casterId;
		$this->queryParameters["CasterId"]=$casterId;
	}

	public function getEndOffset() {
		return $this->endOffset;
	}

	public function setEndOffset($endOffset) {
		$this->endOffset = $endOffset;
		$this->queryParameters["EndOffset"]=$endOffset;
	}

	public function getResourceName() {
		return $this->resourceName;
	}

	public function setResourceName($resourceName) {
		$this->resourceName = $resourceName;
		$this->queryParameters["ResourceName"]=$resourceName;
	}

	public function getRepeatNum() {
		return $this->repeatNum;
	}

	public function setRepeatNum($repeatNum) {
		$this->repeatNum = $repeatNum;
		$this->queryParameters["RepeatNum"]=$repeatNum;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getMaterialId() {
		return $this->materialId;
	}

	public function setMaterialId($materialId) {
		$this->materialId = $materialId;
		$this->queryParameters["MaterialId"]=$materialId;
	}
	
}