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
namespace Domain_intl\Request\V20171218;

class QueryTaskInfoHistoryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain-intl", "2017-12-18", "QueryTaskInfoHistory", "domain", "openAPI");
		$this->setMethod("POST");
	}

	private  $beginCreateTime;

	private  $endCreateTime;

	private  $taskNoCursor;

	private  $userClientIp;

	private  $pageSize;

	private  $lang;

	private  $createTimeCursor;

	public function getBeginCreateTime() {
		return $this->beginCreateTime;
	}

	public function setBeginCreateTime($beginCreateTime) {
		$this->beginCreateTime = $beginCreateTime;
		$this->queryParameters["BeginCreateTime"]=$beginCreateTime;
	}

	public function getEndCreateTime() {
		return $this->endCreateTime;
	}

	public function setEndCreateTime($endCreateTime) {
		$this->endCreateTime = $endCreateTime;
		$this->queryParameters["EndCreateTime"]=$endCreateTime;
	}

	public function getTaskNoCursor() {
		return $this->taskNoCursor;
	}

	public function setTaskNoCursor($taskNoCursor) {
		$this->taskNoCursor = $taskNoCursor;
		$this->queryParameters["TaskNoCursor"]=$taskNoCursor;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getCreateTimeCursor() {
		return $this->createTimeCursor;
	}

	public function setCreateTimeCursor($createTimeCursor) {
		$this->createTimeCursor = $createTimeCursor;
		$this->queryParameters["CreateTimeCursor"]=$createTimeCursor;
	}
	
}