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

class CreatePhotoRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "CreatePhoto", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $takenAt;

	private  $photoTitle;

	private  $libraryId;

	private  $shareExpireTime;

	private  $storeName;

	private  $uploadType;

	private  $remark;

	private  $sessionId;

	private  $staging;

	private  $fileId;

	public function getTakenAt() {
		return $this->takenAt;
	}

	public function setTakenAt($takenAt) {
		$this->takenAt = $takenAt;
		$this->queryParameters["TakenAt"]=$takenAt;
	}

	public function getPhotoTitle() {
		return $this->photoTitle;
	}

	public function setPhotoTitle($photoTitle) {
		$this->photoTitle = $photoTitle;
		$this->queryParameters["PhotoTitle"]=$photoTitle;
	}

	public function getLibraryId() {
		return $this->libraryId;
	}

	public function setLibraryId($libraryId) {
		$this->libraryId = $libraryId;
		$this->queryParameters["LibraryId"]=$libraryId;
	}

	public function getShareExpireTime() {
		return $this->shareExpireTime;
	}

	public function setShareExpireTime($shareExpireTime) {
		$this->shareExpireTime = $shareExpireTime;
		$this->queryParameters["ShareExpireTime"]=$shareExpireTime;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getUploadType() {
		return $this->uploadType;
	}

	public function setUploadType($uploadType) {
		$this->uploadType = $uploadType;
		$this->queryParameters["UploadType"]=$uploadType;
	}

	public function getRemark() {
		return $this->remark;
	}

	public function setRemark($remark) {
		$this->remark = $remark;
		$this->queryParameters["Remark"]=$remark;
	}

	public function getSessionId() {
		return $this->sessionId;
	}

	public function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
		$this->queryParameters["SessionId"]=$sessionId;
	}

	public function getStaging() {
		return $this->staging;
	}

	public function setStaging($staging) {
		$this->staging = $staging;
		$this->queryParameters["Staging"]=$staging;
	}

	public function getFileId() {
		return $this->fileId;
	}

	public function setFileId($fileId) {
		$this->fileId = $fileId;
		$this->queryParameters["FileId"]=$fileId;
	}
	
}