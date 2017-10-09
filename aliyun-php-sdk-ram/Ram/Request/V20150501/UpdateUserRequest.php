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
namespace Ram\Request\V20150501;

class UpdateUserRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ram", "2015-05-01", "UpdateUser");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $newUserName;

	private  $newDisplayName;

	private  $newMobilePhone;

	private  $newComments;

	private  $newEmail;

	private  $userName;

	public function getNewUserName() {
		return $this->newUserName;
	}

	public function setNewUserName($newUserName) {
		$this->newUserName = $newUserName;
		$this->queryParameters["NewUserName"]=$newUserName;
	}

	public function getNewDisplayName() {
		return $this->newDisplayName;
	}

	public function setNewDisplayName($newDisplayName) {
		$this->newDisplayName = $newDisplayName;
		$this->queryParameters["NewDisplayName"]=$newDisplayName;
	}

	public function getNewMobilePhone() {
		return $this->newMobilePhone;
	}

	public function setNewMobilePhone($newMobilePhone) {
		$this->newMobilePhone = $newMobilePhone;
		$this->queryParameters["NewMobilePhone"]=$newMobilePhone;
	}

	public function getNewComments() {
		return $this->newComments;
	}

	public function setNewComments($newComments) {
		$this->newComments = $newComments;
		$this->queryParameters["NewComments"]=$newComments;
	}

	public function getNewEmail() {
		return $this->newEmail;
	}

	public function setNewEmail($newEmail) {
		$this->newEmail = $newEmail;
		$this->queryParameters["NewEmail"]=$newEmail;
	}

	public function getUserName() {
		return $this->userName;
	}

	public function setUserName($userName) {
		$this->userName = $userName;
		$this->queryParameters["UserName"]=$userName;
	}
	
}