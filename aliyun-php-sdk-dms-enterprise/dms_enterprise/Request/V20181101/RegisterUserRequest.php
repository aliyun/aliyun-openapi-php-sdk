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
namespace dms_enterprise\Request\V20181101;

class RegisterUserRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("dms-enterprise", "2018-11-01", "RegisterUser", "dmsenterprise", "openAPI");
		$this->setMethod("POST");
	}

	private  $roleNames;

	private  $uid;

	private  $userNick;

	private  $tid;

	public function getRoleNames() {
		return $this->roleNames;
	}

	public function setRoleNames($roleNames) {
		$this->roleNames = $roleNames;
		$this->queryParameters["RoleNames"]=$roleNames;
	}

	public function getUid() {
		return $this->uid;
	}

	public function setUid($uid) {
		$this->uid = $uid;
		$this->queryParameters["Uid"]=$uid;
	}

	public function getUserNick() {
		return $this->userNick;
	}

	public function setUserNick($userNick) {
		$this->userNick = $userNick;
		$this->queryParameters["UserNick"]=$userNick;
	}

	public function getTid() {
		return $this->tid;
	}

	public function setTid($tid) {
		$this->tid = $tid;
		$this->queryParameters["Tid"]=$tid;
	}
	
}