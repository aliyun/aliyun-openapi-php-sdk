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
namespace rtc\Request\V20180111;

class CreateTemplateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("rtc", "2018-01-11", "CreateTemplate", "rtc", "openAPI");
		$this->setMethod("POST");
	}

	private  $serviceMode;

	private  $LiveConfigs;

	private  $mediaConfig;

	private  $maxMixStreamCount;

	private  $RecordConfigs;

	private  $ownerId;

	private  $LayOuts;

	private  $appId;

	private  $callBack;

	private  $mixMode;

	public function getServiceMode() {
		return $this->serviceMode;
	}

	public function setServiceMode($serviceMode) {
		$this->serviceMode = $serviceMode;
		$this->queryParameters["ServiceMode"]=$serviceMode;
	}

	public function getLiveConfigs() {
		return $this->LiveConfigs;
	}

	public function setLiveConfigs($LiveConfigs) {
		$this->LiveConfigs = $LiveConfigs;
		for ($i = 0; $i < count($LiveConfigs); $i ++) {	
			$this->queryParameters['LiveConfig.' . ($i + 1) . '.DomainName'] = $LiveConfigs[$i]['DomainName'];
			$this->queryParameters['LiveConfig.' . ($i + 1) . '.AppName'] = $LiveConfigs[$i]['AppName'];

		}
	}

	public function getMediaConfig() {
		return $this->mediaConfig;
	}

	public function setMediaConfig($mediaConfig) {
		$this->mediaConfig = $mediaConfig;
		$this->queryParameters["MediaConfig"]=$mediaConfig;
	}

	public function getMaxMixStreamCount() {
		return $this->maxMixStreamCount;
	}

	public function setMaxMixStreamCount($maxMixStreamCount) {
		$this->maxMixStreamCount = $maxMixStreamCount;
		$this->queryParameters["MaxMixStreamCount"]=$maxMixStreamCount;
	}

	public function getRecordConfigs() {
		return $this->RecordConfigs;
	}

	public function setRecordConfigs($RecordConfigs) {
		$this->RecordConfigs = $RecordConfigs;
		for ($i = 0; $i < count($RecordConfigs); $i ++) {	
			$this->queryParameters['RecordConfig.' . ($i + 1) . '.StorageType'] = $RecordConfigs[$i]['StorageType'];
			$this->queryParameters['RecordConfig.' . ($i + 1) . '.FileFormat'] = $RecordConfigs[$i]['FileFormat'];
			$this->queryParameters['RecordConfig.' . ($i + 1) . '.OssEndPoint'] = $RecordConfigs[$i]['OssEndPoint'];
			$this->queryParameters['RecordConfig.' . ($i + 1) . '.OssBucket'] = $RecordConfigs[$i]['OssBucket'];
			$this->queryParameters['RecordConfig.' . ($i + 1) . '.VodTransCodeGroupId'] = $RecordConfigs[$i]['VodTransCodeGroupId'];

		}
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getLayOuts() {
		return $this->LayOuts;
	}

	public function setLayOuts($LayOuts) {
		$this->LayOuts = $LayOuts;
		for ($i = 0; $i < count($LayOuts); $i ++) {	
			$this->queryParameters['LayOut.' . ($i + 1) . '.Color'] = $LayOuts[$i]['Color'];
			$this->queryParameters['LayOut.' . ($i + 1) . '.CutMode'] = $LayOuts[$i]['CutMode'];
			$this->queryParameters['LayOut.' . ($i + 1) . '.LayOutId'] = $LayOuts[$i]['LayOutId'];

		}
	}

	public function getAppId() {
		return $this->appId;
	}

	public function setAppId($appId) {
		$this->appId = $appId;
		$this->queryParameters["AppId"]=$appId;
	}

	public function getCallBack() {
		return $this->callBack;
	}

	public function setCallBack($callBack) {
		$this->callBack = $callBack;
		$this->queryParameters["CallBack"]=$callBack;
	}

	public function getMixMode() {
		return $this->mixMode;
	}

	public function setMixMode($mixMode) {
		$this->mixMode = $mixMode;
		$this->queryParameters["MixMode"]=$mixMode;
	}
	
}