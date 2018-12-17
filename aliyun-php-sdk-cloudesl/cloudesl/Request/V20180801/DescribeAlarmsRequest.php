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
namespace cloudesl\Request\V20180801;

class DescribeAlarmsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("cloudesl", "2018-08-01", "DescribeAlarms");
		$this->setMethod("POST");
	}

	private  $errorType;

	private  $toAlarmTime;

	private  $alarmType;

	private  $fromAlarmTime;

	private  $alarmId;

	private  $pageSize;

	private  $storeId;

	private  $pageNumber;

	private  $alarmStatus;

	public function getErrorType() {
		return $this->errorType;
	}

	public function setErrorType($errorType) {
		$this->errorType = $errorType;
		$this->queryParameters["ErrorType"]=$errorType;
	}

	public function getToAlarmTime() {
		return $this->toAlarmTime;
	}

	public function setToAlarmTime($toAlarmTime) {
		$this->toAlarmTime = $toAlarmTime;
		$this->queryParameters["ToAlarmTime"]=$toAlarmTime;
	}

	public function getAlarmType() {
		return $this->alarmType;
	}

	public function setAlarmType($alarmType) {
		$this->alarmType = $alarmType;
		$this->queryParameters["AlarmType"]=$alarmType;
	}

	public function getFromAlarmTime() {
		return $this->fromAlarmTime;
	}

	public function setFromAlarmTime($fromAlarmTime) {
		$this->fromAlarmTime = $fromAlarmTime;
		$this->queryParameters["FromAlarmTime"]=$fromAlarmTime;
	}

	public function getAlarmId() {
		return $this->alarmId;
	}

	public function setAlarmId($alarmId) {
		$this->alarmId = $alarmId;
		$this->queryParameters["AlarmId"]=$alarmId;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
		$this->queryParameters["StoreId"]=$storeId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getAlarmStatus() {
		return $this->alarmStatus;
	}

	public function setAlarmStatus($alarmStatus) {
		$this->alarmStatus = $alarmStatus;
		$this->queryParameters["AlarmStatus"]=$alarmStatus;
	}
	
}