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
namespace LinkFace\Request\V20180720;

class RegisterFaceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("LinkFace", "2018-07-20", "RegisterFace");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $image;

	private  $groupId;

	private  $userId;

	private  $userInfo;

	public function getImage() {
		return $this->image;
	}

	public function setImage($image) {
		$this->image = $image;
		}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		}

	public function getUserId() {
		return $this->userId;
	}

	public function setUserId($userId) {
		$this->userId = $userId;
		}

	public function getUserInfo() {
		return $this->userInfo;
	}

	public function setUserInfo($userInfo) {
		$this->userInfo = $userInfo;
		}
	
}