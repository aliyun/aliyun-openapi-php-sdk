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
namespace Ubsms\Request\V20150623;

class NotifyUserBusinessCommandRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ubsms", "2015-06-23", "NotifyUserBusinessCommand");
	}

	private  $uid;

	private  $serviceCode;

	private  $cmd;

	public function getUid() {
		return $this->uid;
	}

	public function setUid($uid) {
		$this->uid = $uid;
		$this->queryParameters["Uid"]=$uid;
	}

	public function getServiceCode() {
		return $this->serviceCode;
	}

	public function setServiceCode($serviceCode) {
		$this->serviceCode = $serviceCode;
		$this->queryParameters["ServiceCode"]=$serviceCode;
	}

	public function getCmd() {
		return $this->cmd;
	}

	public function setCmd($cmd) {
		$this->cmd = $cmd;
		$this->queryParameters["Cmd"]=$cmd;
	}
	
}