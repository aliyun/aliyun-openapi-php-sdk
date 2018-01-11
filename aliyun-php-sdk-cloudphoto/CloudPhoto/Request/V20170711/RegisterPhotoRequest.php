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

class RegisterPhotoRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "RegisterPhoto", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $libraryId;

	private  $latitude;

	private  $photoTitle;

	private  $storeName;

	private  $isVideo;

	private  $remark;

	private  $size;

	private  $takenAt;

	private  $width;

	private  $location;

	private  $longitude;

	private  $height;

	private  $md5;

	public function getLibraryId() {
		return $this->libraryId;
	}

	public function setLibraryId($libraryId) {
		$this->libraryId = $libraryId;
		$this->queryParameters["LibraryId"]=$libraryId;
	}

	public function getLatitude() {
		return $this->latitude;
	}

	public function setLatitude($latitude) {
		$this->latitude = $latitude;
		$this->queryParameters["Latitude"]=$latitude;
	}

	public function getPhotoTitle() {
		return $this->photoTitle;
	}

	public function setPhotoTitle($photoTitle) {
		$this->photoTitle = $photoTitle;
		$this->queryParameters["PhotoTitle"]=$photoTitle;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getIsVideo() {
		return $this->isVideo;
	}

	public function setIsVideo($isVideo) {
		$this->isVideo = $isVideo;
		$this->queryParameters["IsVideo"]=$isVideo;
	}

	public function getRemark() {
		return $this->remark;
	}

	public function setRemark($remark) {
		$this->remark = $remark;
		$this->queryParameters["Remark"]=$remark;
	}

	public function getSize() {
		return $this->size;
	}

	public function setSize($size) {
		$this->size = $size;
		$this->queryParameters["Size"]=$size;
	}

	public function getTakenAt() {
		return $this->takenAt;
	}

	public function setTakenAt($takenAt) {
		$this->takenAt = $takenAt;
		$this->queryParameters["TakenAt"]=$takenAt;
	}

	public function getWidth() {
		return $this->width;
	}

	public function setWidth($width) {
		$this->width = $width;
		$this->queryParameters["Width"]=$width;
	}

	public function getLocation() {
		return $this->location;
	}

	public function setLocation($location) {
		$this->location = $location;
		$this->queryParameters["Location"]=$location;
	}

	public function getLongitude() {
		return $this->longitude;
	}

	public function setLongitude($longitude) {
		$this->longitude = $longitude;
		$this->queryParameters["Longitude"]=$longitude;
	}

	public function getHeight() {
		return $this->height;
	}

	public function setHeight($height) {
		$this->height = $height;
		$this->queryParameters["Height"]=$height;
	}

	public function getMd5() {
		return $this->md5;
	}

	public function setMd5($md5) {
		$this->md5 = $md5;
		$this->queryParameters["Md5"]=$md5;
	}
	
}