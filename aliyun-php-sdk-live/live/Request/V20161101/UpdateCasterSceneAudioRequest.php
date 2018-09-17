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

class UpdateCasterSceneAudioRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "UpdateCasterSceneAudio", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $AudioLayers;

	private  $casterId;

	private  $sceneId;

	private  $MixLists;

	private  $ownerId;

	private  $followEnable;

	public function getAudioLayers() {
		return $this->AudioLayers;
	}

	public function setAudioLayers($AudioLayers) {
		$this->AudioLayers = $AudioLayers;
		for ($i = 0; $i < count($AudioLayers); $i ++) {	
			$this->queryParameters['AudioLayer.' . ($i + 1) . '.FixedDelayDuration'] = $AudioLayers[$i]['FixedDelayDuration'];
			$this->queryParameters['AudioLayer.' . ($i + 1) . '.VolumeRate'] = $AudioLayers[$i]['VolumeRate'];
			$this->queryParameters['AudioLayer.' . ($i + 1) . '.ValidChannel'] = $AudioLayers[$i]['ValidChannel'];

		}
	}

	public function getCasterId() {
		return $this->casterId;
	}

	public function setCasterId($casterId) {
		$this->casterId = $casterId;
		$this->queryParameters["CasterId"]=$casterId;
	}

	public function getSceneId() {
		return $this->sceneId;
	}

	public function setSceneId($sceneId) {
		$this->sceneId = $sceneId;
		$this->queryParameters["SceneId"]=$sceneId;
	}

	public function getMixLists() {
		return $this->MixLists;
	}

	public function setMixLists($MixLists) {
		$this->MixLists = $MixLists;
		for ($i = 0; $i < count($MixLists); $i ++) {	
			$this->queryParameters["MixList.".($i+1)] = $MixLists[$i];
		}
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getFollowEnable() {
		return $this->followEnable;
	}

	public function setFollowEnable($followEnable) {
		$this->followEnable = $followEnable;
		$this->queryParameters["FollowEnable"]=$followEnable;
	}
	
}