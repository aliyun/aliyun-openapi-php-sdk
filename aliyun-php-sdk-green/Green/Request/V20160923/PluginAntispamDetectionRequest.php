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

class PluginAntispamDetectionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Green", "2016-09-23", "PluginAntispamDetection");
		$this->setMethod("POST");
	}

	private  $bizScene;

	private  $clientVersion;

	private  $userId;

	private  $topicId;

	private  $feedId;

	private  $title;

	private  $postTime;

	private  $postContent;

	private  $postContentType;

	private  $dynamicProp;

	public function getBizScene() {
		return $this->bizScene;
	}

	public function setBizScene($bizScene) {
		$this->bizScene = $bizScene;
		$this->queryParameters["BizScene"]=$bizScene;
	}

	public function getClientVersion() {
		return $this->clientVersion;
	}

	public function setClientVersion($clientVersion) {
		$this->clientVersion = $clientVersion;
		$this->queryParameters["ClientVersion"]=$clientVersion;
	}

	public function getUserId() {
		return $this->userId;
	}

	public function setUserId($userId) {
		$this->userId = $userId;
		$this->queryParameters["UserId"]=$userId;
	}

	public function getTopicId() {
		return $this->topicId;
	}

	public function setTopicId($topicId) {
		$this->topicId = $topicId;
		$this->queryParameters["TopicId"]=$topicId;
	}

	public function getFeedId() {
		return $this->feedId;
	}

	public function setFeedId($feedId) {
		$this->feedId = $feedId;
		$this->queryParameters["FeedId"]=$feedId;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->queryParameters["Title"]=$title;
	}

	public function getPostTime() {
		return $this->postTime;
	}

	public function setPostTime($postTime) {
		$this->postTime = $postTime;
		$this->queryParameters["PostTime"]=$postTime;
	}

	public function getPostContent() {
		return $this->postContent;
	}

	public function setPostContent($postContent) {
		$this->postContent = $postContent;
		$this->queryParameters["PostContent"]=$postContent;
	}

	public function getPostContentType() {
		return $this->postContentType;
	}

	public function setPostContentType($postContentType) {
		$this->postContentType = $postContentType;
		$this->queryParameters["PostContentType"]=$postContentType;
	}

	public function getDynamicProp() {
		return $this->dynamicProp;
	}

	public function setDynamicProp($dynamicProp) {
		$this->dynamicProp = $dynamicProp;
		$this->queryParameters["DynamicProp"]=$dynamicProp;
	}
	
}