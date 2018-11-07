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
namespace rtc\Request\V20180111;

class UpdateTaskParamRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("rtc", "2018-01-11", "UpdateTaskParam", "rtc", "openAPI");
		$this->setMethod("POST");
	}

	private  $MixPaness;

	private  $taskId;

	private  $ownerId;

	private  $templateId;

	private  $appId;

	private  $channelId;

	public function getMixPaness() {
		return $this->MixPaness;
	}

	public function setMixPaness($MixPaness) {
		$this->MixPaness = $MixPaness;
		for ($i = 0; $i < count($MixPaness); $i ++) {	
			$this->queryParameters['MixPanes.' . ($i + 1) . '.PaneId'] = $MixPaness[$i]['PaneId'];
			$this->queryParameters['MixPanes.' . ($i + 1) . '.UserId'] = $MixPaness[$i]['UserId'];
			$this->queryParameters['MixPanes.' . ($i + 1) . '.SourceType'] = $MixPaness[$i]['SourceType'];

		}
	}

	public function getTaskId() {
		return $this->taskId;
	}

	public function setTaskId($taskId) {
		$this->taskId = $taskId;
		$this->queryParameters["TaskId"]=$taskId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getTemplateId() {
		return $this->templateId;
	}

	public function setTemplateId($templateId) {
		$this->templateId = $templateId;
		$this->queryParameters["TemplateId"]=$templateId;
	}

	public function getAppId() {
		return $this->appId;
	}

	public function setAppId($appId) {
		$this->appId = $appId;
		$this->queryParameters["AppId"]=$appId;
	}

	public function getChannelId() {
		return $this->channelId;
	}

	public function setChannelId($channelId) {
		$this->channelId = $channelId;
		$this->queryParameters["ChannelId"]=$channelId;
	}
	
}