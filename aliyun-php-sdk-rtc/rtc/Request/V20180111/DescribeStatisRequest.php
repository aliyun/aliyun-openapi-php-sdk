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

class DescribeStatisRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("rtc", "2018-01-11", "DescribeStatis", "rtc", "openAPI");
		$this->setMethod("POST");
	}

	private  $sortType;

	private  $startTime;

	private  $dataType;

	private  $serviceArea;

	private  $endTime;

	private  $ownerId;

	private  $appId;

	private  $interval;

	public function getSortType() {
		return $this->sortType;
	}

	public function setSortType($sortType) {
		$this->sortType = $sortType;
		$this->queryParameters["SortType"]=$sortType;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getDataType() {
		return $this->dataType;
	}

	public function setDataType($dataType) {
		$this->dataType = $dataType;
		$this->queryParameters["DataType"]=$dataType;
	}

	public function getServiceArea() {
		return $this->serviceArea;
	}

	public function setServiceArea($serviceArea) {
		$this->serviceArea = $serviceArea;
		$this->queryParameters["ServiceArea"]=$serviceArea;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getAppId() {
		return $this->appId;
	}

	public function setAppId($appId) {
		$this->appId = $appId;
		$this->queryParameters["AppId"]=$appId;
	}

	public function getInterval() {
		return $this->interval;
	}

	public function setInterval($interval) {
		$this->interval = $interval;
		$this->queryParameters["Interval"]=$interval;
	}
	
}