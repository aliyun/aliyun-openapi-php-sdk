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
namespace CCC\Request\V20170705;

class ListCallDetailRecordsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "ListCallDetailRecords", "CCC", "openAPI");
		$this->setMethod("POST");
	}

	private  $instanceId;

	private  $contactDisposition;

	private  $contactType;

	private  $criteria;

	private  $phoneNumber;

	private  $pageSize;

	private  $startTime;

	private  $stopTime;

	private  $pageNumber;

	private  $withRecording;

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getContactDisposition() {
		return $this->contactDisposition;
	}

	public function setContactDisposition($contactDisposition) {
		$this->contactDisposition = $contactDisposition;
		$this->queryParameters["ContactDisposition"]=$contactDisposition;
	}

	public function getContactType() {
		return $this->contactType;
	}

	public function setContactType($contactType) {
		$this->contactType = $contactType;
		$this->queryParameters["ContactType"]=$contactType;
	}

	public function getCriteria() {
		return $this->criteria;
	}

	public function setCriteria($criteria) {
		$this->criteria = $criteria;
		$this->queryParameters["Criteria"]=$criteria;
	}

	public function getPhoneNumber() {
		return $this->phoneNumber;
	}

	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
		$this->queryParameters["PhoneNumber"]=$phoneNumber;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getStopTime() {
		return $this->stopTime;
	}

	public function setStopTime($stopTime) {
		$this->stopTime = $stopTime;
		$this->queryParameters["StopTime"]=$stopTime;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getWithRecording() {
		return $this->withRecording;
	}

	public function setWithRecording($withRecording) {
		$this->withRecording = $withRecording;
		$this->queryParameters["WithRecording"]=$withRecording;
	}
	
}