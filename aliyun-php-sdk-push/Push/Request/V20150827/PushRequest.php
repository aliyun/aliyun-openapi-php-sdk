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
namespace Push\Request\V20150827;

class PushRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2015-08-27", "Push");
	}

	private  $appKey;

	private  $target;

	private  $targetValue;

	private  $type;

	private  $title;

	private  $remind;

	private  $storeOffline;

	private  $body;

	private  $deviceType;

	private  $timeOut;

	private  $summary;

	private  $androidActivity;

	private  $androidOpenUrl;

	private  $androidExtParameters;

	private  $androidOpenType;

	private  $androidMusic;

	private  $batchNumber;

	private  $iOSMusic;

	private  $iOSBadge;

	private  $iOSExtParameters;

	private  $pushTime;

	private  $apnsEnv;

	private  $expireTime;

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getTarget() {
		return $this->target;
	}

	public function setTarget($target) {
		$this->target = $target;
		$this->queryParameters["Target"]=$target;
	}

	public function getTargetValue() {
		return $this->targetValue;
	}

	public function setTargetValue($targetValue) {
		$this->targetValue = $targetValue;
		$this->queryParameters["TargetValue"]=$targetValue;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->queryParameters["Title"]=$title;
	}

	public function getRemind() {
		return $this->remind;
	}

	public function setRemind($remind) {
		$this->remind = $remind;
		$this->queryParameters["Remind"]=$remind;
	}

	public function getStoreOffline() {
		return $this->storeOffline;
	}

	public function setStoreOffline($storeOffline) {
		$this->storeOffline = $storeOffline;
		$this->queryParameters["StoreOffline"]=$storeOffline;
	}

	public function getBody() {
		return $this->body;
	}

	public function setBody($body) {
		$this->body = $body;
		$this->queryParameters["Body"]=$body;
	}

	public function getDeviceType() {
		return $this->deviceType;
	}

	public function setDeviceType($deviceType) {
		$this->deviceType = $deviceType;
		$this->queryParameters["DeviceType"]=$deviceType;
	}

	public function getTimeOut() {
		return $this->timeOut;
	}

	public function setTimeOut($timeOut) {
		$this->timeOut = $timeOut;
		$this->queryParameters["TimeOut"]=$timeOut;
	}

	public function getSummary() {
		return $this->summary;
	}

	public function setSummary($summary) {
		$this->summary = $summary;
		$this->queryParameters["Summary"]=$summary;
	}

	public function getAndroidActivity() {
		return $this->androidActivity;
	}

	public function setAndroidActivity($androidActivity) {
		$this->androidActivity = $androidActivity;
		$this->queryParameters["AndroidActivity"]=$androidActivity;
	}

	public function getAndroidOpenUrl() {
		return $this->androidOpenUrl;
	}

	public function setAndroidOpenUrl($androidOpenUrl) {
		$this->androidOpenUrl = $androidOpenUrl;
		$this->queryParameters["AndroidOpenUrl"]=$androidOpenUrl;
	}

	public function getAndroidExtParameters() {
		return $this->androidExtParameters;
	}

	public function setAndroidExtParameters($androidExtParameters) {
		$this->androidExtParameters = $androidExtParameters;
		$this->queryParameters["AndroidExtParameters"]=$androidExtParameters;
	}

	public function getAndroidOpenType() {
		return $this->androidOpenType;
	}

	public function setAndroidOpenType($androidOpenType) {
		$this->androidOpenType = $androidOpenType;
		$this->queryParameters["AndroidOpenType"]=$androidOpenType;
	}

	public function getAndroidMusic() {
		return $this->androidMusic;
	}

	public function setAndroidMusic($androidMusic) {
		$this->androidMusic = $androidMusic;
		$this->queryParameters["AndroidMusic"]=$androidMusic;
	}

	public function getBatchNumber() {
		return $this->batchNumber;
	}

	public function setBatchNumber($batchNumber) {
		$this->batchNumber = $batchNumber;
		$this->queryParameters["BatchNumber"]=$batchNumber;
	}

	public function getiOSMusic() {
		return $this->iOSMusic;
	}

	public function setiOSMusic($iOSMusic) {
		$this->iOSMusic = $iOSMusic;
		$this->queryParameters["iOSMusic"]=$iOSMusic;
	}

	public function getiOSBadge() {
		return $this->iOSBadge;
	}

	public function setiOSBadge($iOSBadge) {
		$this->iOSBadge = $iOSBadge;
		$this->queryParameters["iOSBadge"]=$iOSBadge;
	}

	public function getiOSExtParameters() {
		return $this->iOSExtParameters;
	}

	public function setiOSExtParameters($iOSExtParameters) {
		$this->iOSExtParameters = $iOSExtParameters;
		$this->queryParameters["iOSExtParameters"]=$iOSExtParameters;
	}

	public function getPushTime() {
		return $this->pushTime;
	}

	public function setPushTime($pushTime) {
		$this->pushTime = $pushTime;
		$this->queryParameters["PushTime"]=$pushTime;
	}

	public function getApnsEnv() {
		return $this->apnsEnv;
	}

	public function setApnsEnv($apnsEnv) {
		$this->apnsEnv = $apnsEnv;
		$this->queryParameters["ApnsEnv"]=$apnsEnv;
	}

	public function getExpireTime() {
		return $this->expireTime;
	}

	public function setExpireTime($expireTime) {
		$this->expireTime = $expireTime;
		$this->queryParameters["ExpireTime"]=$expireTime;
	}
	
}