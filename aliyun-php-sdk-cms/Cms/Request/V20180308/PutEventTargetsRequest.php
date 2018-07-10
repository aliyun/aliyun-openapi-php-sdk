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
namespace Cms\Request\V20180308;

class PutEventTargetsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "PutEventTargets", "cms", "openAPI");
	}

	private  $WebhookParameterss;

	private  $ContactParameterss;

	private  $FcParameterss;

	private  $ruleName;

	private  $MnsParameterss;

	public function getWebhookParameterss() {
		return $this->WebhookParameterss;
	}

	public function setWebhookParameterss($WebhookParameterss) {
		$this->WebhookParameterss = $WebhookParameterss;
		for ($i = 0; $i < count($WebhookParameterss); $i ++) {	
			$this->queryParameters['WebhookParameters.' . ($i + 1) . '.Id'] = $WebhookParameterss[$i]['Id'];
			$this->queryParameters['WebhookParameters.' . ($i + 1) . '.Protocol'] = $WebhookParameterss[$i]['Protocol'];
			$this->queryParameters['WebhookParameters.' . ($i + 1) . '.Url'] = $WebhookParameterss[$i]['Url'];
			$this->queryParameters['WebhookParameters.' . ($i + 1) . '.Method'] = $WebhookParameterss[$i]['Method'];

		}
	}

	public function getContactParameterss() {
		return $this->ContactParameterss;
	}

	public function setContactParameterss($ContactParameterss) {
		$this->ContactParameterss = $ContactParameterss;
		for ($i = 0; $i < count($ContactParameterss); $i ++) {	
			$this->queryParameters['ContactParameters.' . ($i + 1) . '.Id'] = $ContactParameterss[$i]['Id'];
			$this->queryParameters['ContactParameters.' . ($i + 1) . '.ContactGroupName'] = $ContactParameterss[$i]['ContactGroupName'];
			$this->queryParameters['ContactParameters.' . ($i + 1) . '.Level'] = $ContactParameterss[$i]['Level'];

		}
	}

	public function getFcParameterss() {
		return $this->FcParameterss;
	}

	public function setFcParameterss($FcParameterss) {
		$this->FcParameterss = $FcParameterss;
		for ($i = 0; $i < count($FcParameterss); $i ++) {	
			$this->queryParameters['FcParameters.' . ($i + 1) . '.Id'] = $FcParameterss[$i]['Id'];
			$this->queryParameters['FcParameters.' . ($i + 1) . '.Region'] = $FcParameterss[$i]['Region'];
			$this->queryParameters['FcParameters.' . ($i + 1) . '.ServiceName'] = $FcParameterss[$i]['ServiceName'];
			$this->queryParameters['FcParameters.' . ($i + 1) . '.FunctionName'] = $FcParameterss[$i]['FunctionName'];

		}
	}

	public function getRuleName() {
		return $this->ruleName;
	}

	public function setRuleName($ruleName) {
		$this->ruleName = $ruleName;
		$this->queryParameters["RuleName"]=$ruleName;
	}

	public function getMnsParameterss() {
		return $this->MnsParameterss;
	}

	public function setMnsParameterss($MnsParameterss) {
		$this->MnsParameterss = $MnsParameterss;
		for ($i = 0; $i < count($MnsParameterss); $i ++) {	
			$this->queryParameters['MnsParameters.' . ($i + 1) . '.Id'] = $MnsParameterss[$i]['Id'];
			$this->queryParameters['MnsParameters.' . ($i + 1) . '.Region'] = $MnsParameterss[$i]['Region'];
			$this->queryParameters['MnsParameters.' . ($i + 1) . '.Queue'] = $MnsParameterss[$i]['Queue'];

		}
	}
	
}