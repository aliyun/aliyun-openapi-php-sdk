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

class ImageDetectionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Green", "2016-09-23", "ImageDetection");
		$this->setMethod("POST");
	}

	private  $imageUrl;

	private  $scene;

	private  $async;

	private  $notifyUrl;

	private  $notifySeed;

	public function getImageUrl() {
		return $this->imageUrl;
	}

	public function setImageUrl($imageUrl) {
		$this->imageUrl = $imageUrl;
		$this->queryParameters["ImageUrl"]=$imageUrl;
	}

	public function getScene() {
		return $this->scene;
	}

	public function setScene($scene) {
		$this->scene = $scene;
		$this->queryParameters["Scene"]=$scene;
	}

	public function getAsync() {
		return $this->async;
	}

	public function setAsync($async) {
		$this->async = $async;
		$this->queryParameters["Async"]=$async;
	}

	public function getNotifyUrl() {
		return $this->notifyUrl;
	}

	public function setNotifyUrl($notifyUrl) {
		$this->notifyUrl = $notifyUrl;
		$this->queryParameters["NotifyUrl"]=$notifyUrl;
	}

	public function getNotifySeed() {
		return $this->notifySeed;
	}

	public function setNotifySeed($notifySeed) {
		$this->notifySeed = $notifySeed;
		$this->queryParameters["NotifySeed"]=$notifySeed;
	}
	
}