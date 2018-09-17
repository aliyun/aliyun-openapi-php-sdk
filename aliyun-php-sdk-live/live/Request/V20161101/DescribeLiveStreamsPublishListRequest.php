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
namespace live\Request\V20161101;

class DescribeLiveStreamsPublishListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "DescribeLiveStreamsPublishList", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $streamType;

	private  $domainName;

	private  $endTime;

	private  $orderBy;

	private  $startTime;

	private  $ownerId;

	private  $pageNumber;

	private  $appName;

	private  $pageSize;

	private  $streamName;

	private  $queryType;

	public function getStreamType() {
		return $this->streamType;
	}

	public function setStreamType($streamType) {
		$this->streamType = $streamType;
		$this->queryParameters["StreamType"]=$streamType;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getOrderBy() {
		return $this->orderBy;
	}

	public function setOrderBy($orderBy) {
		$this->orderBy = $orderBy;
		$this->queryParameters["OrderBy"]=$orderBy;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getAppName() {
		return $this->appName;
	}

	public function setAppName($appName) {
		$this->appName = $appName;
		$this->queryParameters["AppName"]=$appName;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getStreamName() {
		return $this->streamName;
	}

	public function setStreamName($streamName) {
		$this->streamName = $streamName;
		$this->queryParameters["StreamName"]=$streamName;
	}

	public function getQueryType() {
		return $this->queryType;
	}

	public function setQueryType($queryType) {
		$this->queryType = $queryType;
		$this->queryParameters["QueryType"]=$queryType;
	}
	
}