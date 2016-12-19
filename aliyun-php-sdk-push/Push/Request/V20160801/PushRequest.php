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
namespace Push\Request\V20160801;

class PushRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2016-08-01", "Push");
	}

	private  $appKey;

	private  $target;

	private  $targetValue;

	private  $pushType;

	private  $deviceType;

	private  $title;

	private  $body;

	private  $pushTime;

	private  $expireTime;

	private  $storeOffline;

	private  $batchNumber;

	private  $androidNotifyType;

	private  $androidOpenType;

	private  $androidActivity;

	private  $androidOpenUrl;

	private  $androidXiaoMiActivity;

	private  $androidXiaoMiNotifyTitle;

	private  $androidXiaoMiNotifyBody;

	private  $androidMusic;

	private  $androidNotificationBarType;

	private  $androidNotificationBarPriority;

	private  $androidExtParameters;

	private  $iOSApnsEnv;

	private  $iOSRemind;

	private  $iOSRemindBody;

	private  $iOSMusic;

	private  $iOSBadge;

	private  $iOSSilentNotification;

	private  $iOSSubtitle;

	private  $iOSNotificationCategory;

	private  $iOSMutableContent;

	private  $iOSExtParameters;

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

	public function getPushType() {
		return $this->pushType;
	}

	public function setPushType($pushType) {
		$this->pushType = $pushType;
		$this->queryParameters["PushType"]=$pushType;
	}

	public function getDeviceType() {
		return $this->deviceType;
	}

	public function setDeviceType($deviceType) {
		$this->deviceType = $deviceType;
		$this->queryParameters["DeviceType"]=$deviceType;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->queryParameters["Title"]=$title;
	}

	public function getBody() {
		return $this->body;
	}

	public function setBody($body) {
		$this->body = $body;
		$this->queryParameters["Body"]=$body;
	}

	public function getPushTime() {
		return $this->pushTime;
	}

	public function setPushTime($pushTime) {
		$this->pushTime = $pushTime;
		$this->queryParameters["PushTime"]=$pushTime;
	}

	public function getExpireTime() {
		return $this->expireTime;
	}

	public function setExpireTime($expireTime) {
		$this->expireTime = $expireTime;
		$this->queryParameters["ExpireTime"]=$expireTime;
	}

	public function getStoreOffline() {
		return $this->storeOffline;
	}

	public function setStoreOffline($storeOffline) {
		$this->storeOffline = $storeOffline;
		$this->queryParameters["StoreOffline"]=$storeOffline;
	}

	public function getBatchNumber() {
		return $this->batchNumber;
	}

	public function setBatchNumber($batchNumber) {
		$this->batchNumber = $batchNumber;
		$this->queryParameters["BatchNumber"]=$batchNumber;
	}

	public function getAndroidNotifyType() {
		return $this->androidNotifyType;
	}

	public function setAndroidNotifyType($androidNotifyType) {
		$this->androidNotifyType = $androidNotifyType;
		$this->queryParameters["AndroidNotifyType"]=$androidNotifyType;
	}

	public function getAndroidOpenType() {
		return $this->androidOpenType;
	}

	public function setAndroidOpenType($androidOpenType) {
		$this->androidOpenType = $androidOpenType;
		$this->queryParameters["AndroidOpenType"]=$androidOpenType;
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

	public function getAndroidXiaoMiActivity() {
		return $this->androidXiaoMiActivity;
	}

	public function setAndroidXiaoMiActivity($androidXiaoMiActivity) {
		$this->androidXiaoMiActivity = $androidXiaoMiActivity;
		$this->queryParameters["AndroidXiaoMiActivity"]=$androidXiaoMiActivity;
	}

	public function getAndroidXiaoMiNotifyTitle() {
		return $this->androidXiaoMiNotifyTitle;
	}

	public function setAndroidXiaoMiNotifyTitle($androidXiaoMiNotifyTitle) {
		$this->androidXiaoMiNotifyTitle = $androidXiaoMiNotifyTitle;
		$this->queryParameters["AndroidXiaoMiNotifyTitle"]=$androidXiaoMiNotifyTitle;
	}

	public function getAndroidXiaoMiNotifyBody() {
		return $this->androidXiaoMiNotifyBody;
	}

	public function setAndroidXiaoMiNotifyBody($androidXiaoMiNotifyBody) {
		$this->androidXiaoMiNotifyBody = $androidXiaoMiNotifyBody;
		$this->queryParameters["AndroidXiaoMiNotifyBody"]=$androidXiaoMiNotifyBody;
	}

	public function getAndroidMusic() {
		return $this->androidMusic;
	}

	public function setAndroidMusic($androidMusic) {
		$this->androidMusic = $androidMusic;
		$this->queryParameters["AndroidMusic"]=$androidMusic;
	}

	public function getAndroidNotificationBarType() {
		return $this->androidNotificationBarType;
	}

	public function setAndroidNotificationBarType($androidNotificationBarType) {
		$this->androidNotificationBarType = $androidNotificationBarType;
		$this->queryParameters["AndroidNotificationBarType"]=$androidNotificationBarType;
	}

	public function getAndroidNotificationBarPriority() {
		return $this->androidNotificationBarPriority;
	}

	public function setAndroidNotificationBarPriority($androidNotificationBarPriority) {
		$this->androidNotificationBarPriority = $androidNotificationBarPriority;
		$this->queryParameters["AndroidNotificationBarPriority"]=$androidNotificationBarPriority;
	}

	public function getAndroidExtParameters() {
		return $this->androidExtParameters;
	}

	public function setAndroidExtParameters($androidExtParameters) {
		$this->androidExtParameters = $androidExtParameters;
		$this->queryParameters["AndroidExtParameters"]=$androidExtParameters;
	}

	public function getiOSApnsEnv() {
		return $this->iOSApnsEnv;
	}

	public function setiOSApnsEnv($iOSApnsEnv) {
		$this->iOSApnsEnv = $iOSApnsEnv;
		$this->queryParameters["iOSApnsEnv"]=$iOSApnsEnv;
	}

	public function getiOSRemind() {
		return $this->iOSRemind;
	}

	public function setiOSRemind($iOSRemind) {
		$this->iOSRemind = $iOSRemind;
		$this->queryParameters["iOSRemind"]=$iOSRemind;
	}

	public function getiOSRemindBody() {
		return $this->iOSRemindBody;
	}

	public function setiOSRemindBody($iOSRemindBody) {
		$this->iOSRemindBody = $iOSRemindBody;
		$this->queryParameters["iOSRemindBody"]=$iOSRemindBody;
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

	public function getiOSSilentNotification() {
		return $this->iOSSilentNotification;
	}

	public function setiOSSilentNotification($iOSSilentNotification) {
		$this->iOSSilentNotification = $iOSSilentNotification;
		$this->queryParameters["iOSSilentNotification"]=$iOSSilentNotification;
	}

	public function getiOSSubtitle() {
		return $this->iOSSubtitle;
	}

	public function setiOSSubtitle($iOSSubtitle) {
		$this->iOSSubtitle = $iOSSubtitle;
		$this->queryParameters["iOSSubtitle"]=$iOSSubtitle;
	}

	public function getiOSNotificationCategory() {
		return $this->iOSNotificationCategory;
	}

	public function setiOSNotificationCategory($iOSNotificationCategory) {
		$this->iOSNotificationCategory = $iOSNotificationCategory;
		$this->queryParameters["iOSNotificationCategory"]=$iOSNotificationCategory;
	}

	public function getiOSMutableContent() {
		return $this->iOSMutableContent;
	}

	public function setiOSMutableContent($iOSMutableContent) {
		$this->iOSMutableContent = $iOSMutableContent;
		$this->queryParameters["iOSMutableContent"]=$iOSMutableContent;
	}

	public function getiOSExtParameters() {
		return $this->iOSExtParameters;
	}

	public function setiOSExtParameters($iOSExtParameters) {
		$this->iOSExtParameters = $iOSExtParameters;
		$this->queryParameters["iOSExtParameters"]=$iOSExtParameters;
	}
	
}