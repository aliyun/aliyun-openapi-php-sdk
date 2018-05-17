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
namespace pvtz\Request\V20180101;

class DescribeChangeLogsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("pvtz", "2018-01-01", "DescribeChangeLogs", "pvtz", "openAPI");
		$this->setMethod("POST");
	}

	private  $entityType;

	private  $pageSize;

	private  $userClientIp;

	private  $zoneId;

	private  $keyword;

	private  $lang;

	private  $startTimestamp;

	private  $pageNumber;

	private  $endTimestamp;

	public function getEntityType() {
		return $this->entityType;
	}

	public function setEntityType($entityType) {
		$this->entityType = $entityType;
		$this->queryParameters["EntityType"]=$entityType;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getKeyword() {
		return $this->keyword;
	}

	public function setKeyword($keyword) {
		$this->keyword = $keyword;
		$this->queryParameters["Keyword"]=$keyword;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getStartTimestamp() {
		return $this->startTimestamp;
	}

	public function setStartTimestamp($startTimestamp) {
		$this->startTimestamp = $startTimestamp;
		$this->queryParameters["StartTimestamp"]=$startTimestamp;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getEndTimestamp() {
		return $this->endTimestamp;
	}

	public function setEndTimestamp($endTimestamp) {
		$this->endTimestamp = $endTimestamp;
		$this->queryParameters["EndTimestamp"]=$endTimestamp;
	}
	
}