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
		$this->setMethod("POST");
	}

	private  $androidNotificationBarType;

	private  $smsSendPolicy;

	private  $androidExtParameters;

	private  $iOSBadge;

	private  $iOSBadgeAutoIncrement;

	private  $androidOpenType;

	private  $title;

	private  $body;

	private  $deviceType;

	private  $pushTime;

	private  $smsDelaySecs;

	private  $sendSpeed;

	private  $androidPopupActivity;

	private  $iOSRemindBody;

	private  $batchNumber;

	private  $iOSExtParameters;

	private  $androidNotifyType;

	private  $androidPopupTitle;

	private  $iOSMusic;

	private  $iOSApnsEnv;

	private  $iOSMutableContent;

	private  $androidNotificationBarPriority;

	private  $expireTime;

	private  $smsTemplateName;

	private  $androidPopupBody;

	private  $iOSNotificationCategory;

	private  $storeOffline;

	private  $iOSSilentNotification;

	private  $smsParams;

	private  $jobKey;

	private  $target;

	private  $androidOpenUrl;

	private  $androidNotificationChannel;

	private  $androidRemind;

	private  $androidActivity;

	private  $androidXiaoMiNotifyBody;

	private  $iOSSubtitle;

	private  $smsSignName;

	private  $iOSRemind;

	private  $appKey;

	private  $targetValue;

	private  $androidMusic;

	private  $androidXiaoMiActivity;

	private  $androidXiaoMiNotifyTitle;

	private  $pushType;

	public function getAndroidNotificationBarType() {
		return $this->androidNotificationBarType;
	}

	public function setAndroidNotificationBarType($androidNotificationBarType) {
		$this->androidNotificationBarType = $androidNotificationBarType;
		$this->queryParameters["AndroidNotificationBarType"]=$androidNotificationBarType;
	}

	public function getSmsSendPolicy() {
		return $this->smsSendPolicy;
	}

	public function setSmsSendPolicy($smsSendPolicy) {
		$this->smsSendPolicy = $smsSendPolicy;
		$this->queryParameters["SmsSendPolicy"]=$smsSendPolicy;
	}

	public function getAndroidExtParameters() {
		return $this->androidExtParameters;
	}

	public function setAndroidExtParameters($androidExtParameters) {
		$this->androidExtParameters = $androidExtParameters;
		$this->queryParameters["AndroidExtParameters"]=$androidExtParameters;
	}

	public function getiOSBadge() {
		return $this->iOSBadge;
	}

	public function setiOSBadge($iOSBadge) {
		$this->iOSBadge = $iOSBadge;
		$this->queryParameters["iOSBadge"]=$iOSBadge;
	}

	public function getiOSBadgeAutoIncrement() {
		return $this->iOSBadgeAutoIncrement;
	}

	public function setiOSBadgeAutoIncrement($iOSBadgeAutoIncrement) {
		$this->iOSBadgeAutoIncrement = $iOSBadgeAutoIncrement;
		$this->queryParameters["iOSBadgeAutoIncrement"]=$iOSBadgeAutoIncrement;
	}

	public function getAndroidOpenType() {
		return $this->androidOpenType;
	}

	public function setAndroidOpenType($androidOpenType) {
		$this->androidOpenType = $androidOpenType;
		$this->queryParameters["AndroidOpenType"]=$androidOpenType;
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

	public function getDeviceType() {
		return $this->deviceType;
	}

	public function setDeviceType($deviceType) {
		$this->deviceType = $deviceType;
		$this->queryParameters["DeviceType"]=$deviceType;
	}

	public function getPushTime() {
		return $this->pushTime;
	}

	public function setPushTime($pushTime) {
		$this->pushTime = $pushTime;
		$this->queryParameters["PushTime"]=$pushTime;
	}

	public function getSmsDelaySecs() {
		return $this->smsDelaySecs;
	}

	public function setSmsDelaySecs($smsDelaySecs) {
		$this->smsDelaySecs = $smsDelaySecs;
		$this->queryParameters["SmsDelaySecs"]=$smsDelaySecs;
	}

	public function getSendSpeed() {
		return $this->sendSpeed;
	}

	public function setSendSpeed($sendSpeed) {
		$this->sendSpeed = $sendSpeed;
		$this->queryParameters["SendSpeed"]=$sendSpeed;
	}

	public function getAndroidPopupActivity() {
		return $this->androidPopupActivity;
	}

	public function setAndroidPopupActivity($androidPopupActivity) {
		$this->androidPopupActivity = $androidPopupActivity;
		$this->queryParameters["AndroidPopupActivity"]=$androidPopupActivity;
	}

	public function getiOSRemindBody() {
		return $this->iOSRemindBody;
	}

	public function setiOSRemindBody($iOSRemindBody) {
		$this->iOSRemindBody = $iOSRemindBody;
		$this->queryParameters["iOSRemindBody"]=$iOSRemindBody;
	}

	public function getBatchNumber() {
		return $this->batchNumber;
	}

	public function setBatchNumber($batchNumber) {
		$this->batchNumber = $batchNumber;
		$this->queryParameters["BatchNumber"]=$batchNumber;
	}

	public function getiOSExtParameters() {
		return $this->iOSExtParameters;
	}

	public function setiOSExtParameters($iOSExtParameters) {
		$this->iOSExtParameters = $iOSExtParameters;
		$this->queryParameters["iOSExtParameters"]=$iOSExtParameters;
	}

	public function getAndroidNotifyType() {
		return $this->androidNotifyType;
	}

	public function setAndroidNotifyType($androidNotifyType) {
		$this->androidNotifyType = $androidNotifyType;
		$this->queryParameters["AndroidNotifyType"]=$androidNotifyType;
	}

	public function getAndroidPopupTitle() {
		return $this->androidPopupTitle;
	}

	public function setAndroidPopupTitle($androidPopupTitle) {
		$this->androidPopupTitle = $androidPopupTitle;
		$this->queryParameters["AndroidPopupTitle"]=$androidPopupTitle;
	}

	public function getiOSMusic() {
		return $this->iOSMusic;
	}

	public function setiOSMusic($iOSMusic) {
		$this->iOSMusic = $iOSMusic;
		$this->queryParameters["iOSMusic"]=$iOSMusic;
	}

	public function getiOSApnsEnv() {
		return $this->iOSApnsEnv;
	}

	public function setiOSApnsEnv($iOSApnsEnv) {
		$this->iOSApnsEnv = $iOSApnsEnv;
		$this->queryParameters["iOSApnsEnv"]=$iOSApnsEnv;
	}

	public function getiOSMutableContent() {
		return $this->iOSMutableContent;
	}

	public function setiOSMutableContent($iOSMutableContent) {
		$this->iOSMutableContent = $iOSMutableContent;
		$this->queryParameters["iOSMutableContent"]=$iOSMutableContent;
	}

	public function getAndroidNotificationBarPriority() {
		return $this->androidNotificationBarPriority;
	}

	public function setAndroidNotificationBarPriority($androidNotificationBarPriority) {
		$this->androidNotificationBarPriority = $androidNotificationBarPriority;
		$this->queryParameters["AndroidNotificationBarPriority"]=$androidNotificationBarPriority;
	}

	public function getExpireTime() {
		return $this->expireTime;
	}

	public function setExpireTime($expireTime) {
		$this->expireTime = $expireTime;
		$this->queryParameters["ExpireTime"]=$expireTime;
	}

	public function getSmsTemplateName() {
		return $this->smsTemplateName;
	}

	public function setSmsTemplateName($smsTemplateName) {
		$this->smsTemplateName = $smsTemplateName;
		$this->queryParameters["SmsTemplateName"]=$smsTemplateName;
	}

	public function getAndroidPopupBody() {
		return $this->androidPopupBody;
	}

	public function setAndroidPopupBody($androidPopupBody) {
		$this->androidPopupBody = $androidPopupBody;
		$this->queryParameters["AndroidPopupBody"]=$androidPopupBody;
	}

	public function getiOSNotificationCategory() {
		return $this->iOSNotificationCategory;
	}

	public function setiOSNotificationCategory($iOSNotificationCategory) {
		$this->iOSNotificationCategory = $iOSNotificationCategory;
		$this->queryParameters["iOSNotificationCategory"]=$iOSNotificationCategory;
	}

	public function getStoreOffline() {
		return $this->storeOffline;
	}

	public function setStoreOffline($storeOffline) {
		$this->storeOffline = $storeOffline;
		$this->queryParameters["StoreOffline"]=$storeOffline;
	}

	public function getiOSSilentNotification() {
		return $this->iOSSilentNotification;
	}

	public function setiOSSilentNotification($iOSSilentNotification) {
		$this->iOSSilentNotification = $iOSSilentNotification;
		$this->queryParameters["iOSSilentNotification"]=$iOSSilentNotification;
	}

	public function getSmsParams() {
		return $this->smsParams;
	}

	public function setSmsParams($smsParams) {
		$this->smsParams = $smsParams;
		$this->queryParameters["SmsParams"]=$smsParams;
	}

	public function getJobKey() {
		return $this->jobKey;
	}

	public function setJobKey($jobKey) {
		$this->jobKey = $jobKey;
		$this->queryParameters["JobKey"]=$jobKey;
	}

	public function getTarget() {
		return $this->target;
	}

	public function setTarget($target) {
		$this->target = $target;
		$this->queryParameters["Target"]=$target;
	}

	public function getAndroidOpenUrl() {
		return $this->androidOpenUrl;
	}

	public function setAndroidOpenUrl($androidOpenUrl) {
		$this->androidOpenUrl = $androidOpenUrl;
		$this->queryParameters["AndroidOpenUrl"]=$androidOpenUrl;
	}

	public function getAndroidNotificationChannel() {
		return $this->androidNotificationChannel;
	}

	public function setAndroidNotificationChannel($androidNotificationChannel) {
		$this->androidNotificationChannel = $androidNotificationChannel;
		$this->queryParameters["AndroidNotificationChannel"]=$androidNotificationChannel;
	}

	public function getAndroidRemind() {
		return $this->androidRemind;
	}

	public function setAndroidRemind($androidRemind) {
		$this->androidRemind = $androidRemind;
		$this->queryParameters["AndroidRemind"]=$androidRemind;
	}

	public function getAndroidActivity() {
		return $this->androidActivity;
	}

	public function setAndroidActivity($androidActivity) {
		$this->androidActivity = $androidActivity;
		$this->queryParameters["AndroidActivity"]=$androidActivity;
	}

	public function getAndroidXiaoMiNotifyBody() {
		return $this->androidXiaoMiNotifyBody;
	}

	public function setAndroidXiaoMiNotifyBody($androidXiaoMiNotifyBody) {
		$this->androidXiaoMiNotifyBody = $androidXiaoMiNotifyBody;
		$this->queryParameters["AndroidXiaoMiNotifyBody"]=$androidXiaoMiNotifyBody;
	}

	public function getiOSSubtitle() {
		return $this->iOSSubtitle;
	}

	public function setiOSSubtitle($iOSSubtitle) {
		$this->iOSSubtitle = $iOSSubtitle;
		$this->queryParameters["iOSSubtitle"]=$iOSSubtitle;
	}

	public function getSmsSignName() {
		return $this->smsSignName;
	}

	public function setSmsSignName($smsSignName) {
		$this->smsSignName = $smsSignName;
		$this->queryParameters["SmsSignName"]=$smsSignName;
	}

	public function getiOSRemind() {
		return $this->iOSRemind;
	}

	public function setiOSRemind($iOSRemind) {
		$this->iOSRemind = $iOSRemind;
		$this->queryParameters["iOSRemind"]=$iOSRemind;
	}

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getTargetValue() {
		return $this->targetValue;
	}

	public function setTargetValue($targetValue) {
		$this->targetValue = $targetValue;
		$this->queryParameters["TargetValue"]=$targetValue;
	}

	public function getAndroidMusic() {
		return $this->androidMusic;
	}

	public function setAndroidMusic($androidMusic) {
		$this->androidMusic = $androidMusic;
		$this->queryParameters["AndroidMusic"]=$androidMusic;
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

	public function getPushType() {
		return $this->pushType;
	}

	public function setPushType($pushType) {
		$this->pushType = $pushType;
		$this->queryParameters["PushType"]=$pushType;
	}
	
}