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
namespace MoPen\Request\V20180211;

class MoPenQueryCanvasRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("MoPen", "2018-02-11", "MoPenQueryCanvas");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $deviceName;

	private  $sessionId;

	private  $pageId;

	private  $status;

	public function getDeviceName() {
		return $this->deviceName;
	}

	public function setDeviceName($deviceName) {
		$this->deviceName = $deviceName;
		}

	public function getSessionId() {
		return $this->sessionId;
	}

	public function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
		}

	public function getPageId() {
		return $this->pageId;
	}

	public function setPageId($pageId) {
		$this->pageId = $pageId;
		}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		}
	
}