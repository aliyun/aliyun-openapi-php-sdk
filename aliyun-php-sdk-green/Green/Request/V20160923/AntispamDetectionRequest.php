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
namespace Green\Request\V20160923;

class AntispamDetectionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Green", "2016-09-23", "AntispamDetection");
		$this->setMethod("POST");
	}

	private  $imageUrl;

	private  $dataId;

	private  $postId;

	private  $sceneId;

	private  $postNick;

	private  $postIp;

	private  $postMac;

	private  $postTime;

	private  $machineCode;

	private  $parentDataId;

	private  $title;

	private  $postContent;

	public function getImageUrl() {
		return $this->imageUrl;
	}

	public function setImageUrl($imageUrl) {
		$this->imageUrl = $imageUrl;
		$this->queryParameters["ImageUrl"]=$imageUrl;
	}

	public function getDataId() {
		return $this->dataId;
	}

	public function setDataId($dataId) {
		$this->dataId = $dataId;
		$this->queryParameters["DataId"]=$dataId;
	}

	public function getPostId() {
		return $this->postId;
	}

	public function setPostId($postId) {
		$this->postId = $postId;
		$this->queryParameters["PostId"]=$postId;
	}

	public function getSceneId() {
		return $this->sceneId;
	}

	public function setSceneId($sceneId) {
		$this->sceneId = $sceneId;
		$this->queryParameters["SceneId"]=$sceneId;
	}

	public function getPostNick() {
		return $this->postNick;
	}

	public function setPostNick($postNick) {
		$this->postNick = $postNick;
		$this->queryParameters["PostNick"]=$postNick;
	}

	public function getPostIp() {
		return $this->postIp;
	}

	public function setPostIp($postIp) {
		$this->postIp = $postIp;
		$this->queryParameters["PostIp"]=$postIp;
	}

	public function getPostMac() {
		return $this->postMac;
	}

	public function setPostMac($postMac) {
		$this->postMac = $postMac;
		$this->queryParameters["PostMac"]=$postMac;
	}

	public function getPostTime() {
		return $this->postTime;
	}

	public function setPostTime($postTime) {
		$this->postTime = $postTime;
		$this->queryParameters["PostTime"]=$postTime;
	}

	public function getMachineCode() {
		return $this->machineCode;
	}

	public function setMachineCode($machineCode) {
		$this->machineCode = $machineCode;
		$this->queryParameters["MachineCode"]=$machineCode;
	}

	public function getParentDataId() {
		return $this->parentDataId;
	}

	public function setParentDataId($parentDataId) {
		$this->parentDataId = $parentDataId;
		$this->queryParameters["ParentDataId"]=$parentDataId;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->queryParameters["Title"]=$title;
	}

	public function getPostContent() {
		return $this->postContent;
	}

	public function setPostContent($postContent) {
		$this->postContent = $postContent;
		$this->queryParameters["PostContent"]=$postContent;
	}
	
}