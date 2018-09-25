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
namespace Ccs\Request\V20171001;

class QueryHotlineRecordRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ccs", "2017-10-01", "QueryHotlineRecord", "ccs", "openAPI");
		$this->setMethod("POST");
	}

	private  $agentId;

	private  $maxTalkDuration;

	private  $groupId;

	private  $endTime;

	private  $startTime;

	private  $pageNum;

	private  $satisfaction;

	private  $minTalkDuratoin;

	private  $categoryIds;

	private  $visitorProvince;

	private  $pageSize;

	private  $callType;

	private  $ccsInstanceId;

	private  $visitorPhone;

	private  $visitorId;

	private  $status;

	public function getAgentId() {
		return $this->agentId;
	}

	public function setAgentId($agentId) {
		$this->agentId = $agentId;
		$this->queryParameters["AgentId"]=$agentId;
	}

	public function getMaxTalkDuration() {
		return $this->maxTalkDuration;
	}

	public function setMaxTalkDuration($maxTalkDuration) {
		$this->maxTalkDuration = $maxTalkDuration;
		$this->queryParameters["MaxTalkDuration"]=$maxTalkDuration;
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}

	public function getSatisfaction() {
		return $this->satisfaction;
	}

	public function setSatisfaction($satisfaction) {
		$this->satisfaction = $satisfaction;
		$this->queryParameters["Satisfaction"]=$satisfaction;
	}

	public function getMinTalkDuratoin() {
		return $this->minTalkDuratoin;
	}

	public function setMinTalkDuratoin($minTalkDuratoin) {
		$this->minTalkDuratoin = $minTalkDuratoin;
		$this->queryParameters["MinTalkDuratoin"]=$minTalkDuratoin;
	}

	public function getCategoryIds() {
		return $this->categoryIds;
	}

	public function setCategoryIds($categoryIds) {
		$this->categoryIds = $categoryIds;
		$this->queryParameters["CategoryIds"]=$categoryIds;
	}

	public function getVisitorProvince() {
		return $this->visitorProvince;
	}

	public function setVisitorProvince($visitorProvince) {
		$this->visitorProvince = $visitorProvince;
		$this->queryParameters["VisitorProvince"]=$visitorProvince;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getCallType() {
		return $this->callType;
	}

	public function setCallType($callType) {
		$this->callType = $callType;
		$this->queryParameters["CallType"]=$callType;
	}

	public function getCcsInstanceId() {
		return $this->ccsInstanceId;
	}

	public function setCcsInstanceId($ccsInstanceId) {
		$this->ccsInstanceId = $ccsInstanceId;
		$this->queryParameters["CcsInstanceId"]=$ccsInstanceId;
	}

	public function getVisitorPhone() {
		return $this->visitorPhone;
	}

	public function setVisitorPhone($visitorPhone) {
		$this->visitorPhone = $visitorPhone;
		$this->queryParameters["VisitorPhone"]=$visitorPhone;
	}

	public function getVisitorId() {
		return $this->visitorId;
	}

	public function setVisitorId($visitorId) {
		$this->visitorId = $visitorId;
		$this->queryParameters["VisitorId"]=$visitorId;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}