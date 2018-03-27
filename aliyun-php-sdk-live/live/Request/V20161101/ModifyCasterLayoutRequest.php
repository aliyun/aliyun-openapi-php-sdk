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

class ModifyCasterLayoutRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "ModifyCasterLayout", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $BlendLists;

	private  $AudioLayers;

	private  $VideoLayers;

	private  $casterId;

	private  $MixLists;

	private  $ownerId;

	private  $layoutId;

	public function getBlendLists() {
		return $this->BlendLists;
	}

	public function setBlendLists($BlendLists) {
		$this->BlendLists = $BlendLists;
		for ($i = 0; $i < count($BlendLists); $i ++) {	
			$this->queryParameters["BlendList.".($i+1)] = $BlendLists[$i];
		}
	}

	public function getAudioLayers() {
		return $this->AudioLayers;
	}

	public function setAudioLayers($AudioLayers) {
		$this->AudioLayers = $AudioLayers;
		for ($i = 0; $i < count($AudioLayers); $i ++) {	
			$this->queryParameters['AudioLayer.' . ($i + 1) . '.VolumeRate'] = $AudioLayers[$i]['VolumeRate'];
			$this->queryParameters['AudioLayer.' . ($i + 1) . '.ValidChannel'] = $AudioLayers[$i]['ValidChannel'];
			$this->queryParameters['AudioLayer.' . ($i + 1) . '.FixedDelayDuration'] = $AudioLayers[$i]['FixedDelayDuration'];

		}
	}

	public function getVideoLayers() {
		return $this->VideoLayers;
	}

	public function setVideoLayers($VideoLayers) {
		$this->VideoLayers = $VideoLayers;
		for ($i = 0; $i < count($VideoLayers); $i ++) {	
			$this->queryParameters['VideoLayer.' . ($i + 1) . '.HeightNormalized'] = $VideoLayers[$i]['HeightNormalized'];
			$this->queryParameters['VideoLayer.' . ($i + 1) . '.WidthNormalized'] = $VideoLayers[$i]['WidthNormalized'];
			$this->queryParameters['VideoLayer.' . ($i + 1) . '.PositionRefer'] = $VideoLayers[$i]['PositionRefer'];
			for ($j = 0; $j < count($VideoLayers[$i]['PositionNormalizeds']); $j ++) {
				$this->queryParameters['VideoLayer.' . ($i + 1) . '.PositionNormalized.' . ($j + 1)] = $VideoLayers[$i]['PositionNormalizeds'][$j];
			}
			$this->queryParameters['VideoLayer.' . ($i + 1) . '.FixedDelayDuration'] = $VideoLayers[$i]['FixedDelayDuration'];

		}
	}

	public function getCasterId() {
		return $this->casterId;
	}

	public function setCasterId($casterId) {
		$this->casterId = $casterId;
		$this->queryParameters["CasterId"]=$casterId;
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

	public function getLayoutId() {
		return $this->layoutId;
	}

	public function setLayoutId($layoutId) {
		$this->layoutId = $layoutId;
		$this->queryParameters["LayoutId"]=$layoutId;
	}
	
}