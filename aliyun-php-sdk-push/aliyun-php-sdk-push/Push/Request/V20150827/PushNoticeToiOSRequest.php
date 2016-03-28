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

class PushNoticeToiOSRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2015-08-27", "PushNoticeToiOS");
	}

	private  $appKey;

	private  $target;

	private  $targetValue;

	private  $ext;

	private  $env;

	private  $summary;

	private  $iOSExtParameters;

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getTarget() {
		return $this->target;
	}

	public function setTarget($target) {
		$this->target = $target;
		$this->queryParameters["Target"]=$target;
	}

	public function getTargetValue() {
		return $this->targetValue;
	}

	public function setTargetValue($targetValue) {
		$this->targetValue = $targetValue;
		$this->queryParameters["TargetValue"]=$targetValue;
	}

	public function getExt() {
		return $this->ext;
	}

	public function setExt($ext) {
		$this->ext = $ext;
		$this->queryParameters["Ext"]=$ext;
	}

	public function getEnv() {
		return $this->env;
	}

	public function setEnv($env) {
		$this->env = $env;
		$this->queryParameters["Env"]=$env;
	}

	public function getSummary() {
		return $this->summary;
	}

	public function setSummary($summary) {
		$this->summary = $summary;
		$this->queryParameters["Summary"]=$summary;
	}

	public function getiOSExtParameters() {
		return $this->iOSExtParameters;
	}

	public function setiOSExtParameters($iOSExtParameters) {
		$this->iOSExtParameters = $iOSExtParameters;
		$this->queryParameters["iOSExtParameters"]=$iOSExtParameters;
	}
	
}