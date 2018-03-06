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
namespace CloudPhoto\Request\V20170711;

class EditEventRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "EditEvent", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $eventId;

	private  $bannerPhotoId;

	private  $watermarkPhotoId;

	private  $splashPhotoId;

	private  $libraryId;

	private  $weixinTitle;

	private  $storeName;

	private  $remark;

	private  $title;

	private  $endAt;

	private  $startAt;

	public function getEventId() {
		return $this->eventId;
	}

	public function setEventId($eventId) {
		$this->eventId = $eventId;
		$this->queryParameters["EventId"]=$eventId;
	}

	public function getBannerPhotoId() {
		return $this->bannerPhotoId;
	}

	public function setBannerPhotoId($bannerPhotoId) {
		$this->bannerPhotoId = $bannerPhotoId;
		$this->queryParameters["BannerPhotoId"]=$bannerPhotoId;
	}

	public function getWatermarkPhotoId() {
		return $this->watermarkPhotoId;
	}

	public function setWatermarkPhotoId($watermarkPhotoId) {
		$this->watermarkPhotoId = $watermarkPhotoId;
		$this->queryParameters["WatermarkPhotoId"]=$watermarkPhotoId;
	}

	public function getSplashPhotoId() {
		return $this->splashPhotoId;
	}

	public function setSplashPhotoId($splashPhotoId) {
		$this->splashPhotoId = $splashPhotoId;
		$this->queryParameters["SplashPhotoId"]=$splashPhotoId;
	}

	public function getLibraryId() {
		return $this->libraryId;
	}

	public function setLibraryId($libraryId) {
		$this->libraryId = $libraryId;
		$this->queryParameters["LibraryId"]=$libraryId;
	}

	public function getWeixinTitle() {
		return $this->weixinTitle;
	}

	public function setWeixinTitle($weixinTitle) {
		$this->weixinTitle = $weixinTitle;
		$this->queryParameters["WeixinTitle"]=$weixinTitle;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getRemark() {
		return $this->remark;
	}

	public function setRemark($remark) {
		$this->remark = $remark;
		$this->queryParameters["Remark"]=$remark;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->queryParameters["Title"]=$title;
	}

	public function getEndAt() {
		return $this->endAt;
	}

	public function setEndAt($endAt) {
		$this->endAt = $endAt;
		$this->queryParameters["EndAt"]=$endAt;
	}

	public function getStartAt() {
		return $this->startAt;
	}

	public function setStartAt($startAt) {
		$this->startAt = $startAt;
		$this->queryParameters["StartAt"]=$startAt;
	}
	
}