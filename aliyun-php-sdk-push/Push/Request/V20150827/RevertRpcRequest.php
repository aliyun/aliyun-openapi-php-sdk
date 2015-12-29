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
namespace Push\Request\V20150827;

class RevertRpcRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2015-08-27", "RevertRpc");
	}

	private  $appId;

	private  $deviceId;

	private  $rpcContent;

	private  $timeOut;

	public function getAppId() {
		return $this->appId;
	}

	public function setAppId($appId) {
		$this->appId = $appId;
		$this->queryParameters["AppId"]=$appId;
	}

	public function getDeviceId() {
		return $this->deviceId;
	}

	public function setDeviceId($deviceId) {
		$this->deviceId = $deviceId;
		$this->queryParameters["DeviceId"]=$deviceId;
	}

	public function getRpcContent() {
		return $this->rpcContent;
	}

	public function setRpcContent($rpcContent) {
		$this->rpcContent = $rpcContent;
		$this->queryParameters["RpcContent"]=$rpcContent;
	}

	public function getTimeOut() {
		return $this->timeOut;
	}

	public function setTimeOut($timeOut) {
		$this->timeOut = $timeOut;
		$this->queryParameters["TimeOut"]=$timeOut;
	}
	
}