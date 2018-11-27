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
namespace imm\Request\V20170906;

class SearchDocIndexRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("imm", "2017-09-06", "SearchDocIndex", "imm", "openAPI");
		$this->setMethod("POST");
	}

	private  $modifiedTimeEnd;

	private  $customKey1;

	private  $set;

	private  $sizeLimitEnd;

	private  $customKey5;

	private  $offset;

	private  $customKey4;

	private  $customKey3;

	private  $customKey2;

	private  $project;

	private  $modifiedTimeStart;

	private  $pageNumLimitStart;

	private  $customKey6;

	private  $content;

	private  $pageNumLimitEnd;

	private  $contentType;

	private  $sizeLimitStart;

	private  $name;

	private  $limit;

	public function getModifiedTimeEnd() {
		return $this->modifiedTimeEnd;
	}

	public function setModifiedTimeEnd($modifiedTimeEnd) {
		$this->modifiedTimeEnd = $modifiedTimeEnd;
		$this->queryParameters["ModifiedTimeEnd"]=$modifiedTimeEnd;
	}

	public function getCustomKey1() {
		return $this->customKey1;
	}

	public function setCustomKey1($customKey1) {
		$this->customKey1 = $customKey1;
		$this->queryParameters["CustomKey1"]=$customKey1;
	}

	public function getSet() {
		return $this->set;
	}

	public function setSet($set) {
		$this->set = $set;
		$this->queryParameters["Set"]=$set;
	}

	public function getSizeLimitEnd() {
		return $this->sizeLimitEnd;
	}

	public function setSizeLimitEnd($sizeLimitEnd) {
		$this->sizeLimitEnd = $sizeLimitEnd;
		$this->queryParameters["SizeLimitEnd"]=$sizeLimitEnd;
	}

	public function getCustomKey5() {
		return $this->customKey5;
	}

	public function setCustomKey5($customKey5) {
		$this->customKey5 = $customKey5;
		$this->queryParameters["CustomKey5"]=$customKey5;
	}

	public function getOffset() {
		return $this->offset;
	}

	public function setOffset($offset) {
		$this->offset = $offset;
		$this->queryParameters["Offset"]=$offset;
	}

	public function getCustomKey4() {
		return $this->customKey4;
	}

	public function setCustomKey4($customKey4) {
		$this->customKey4 = $customKey4;
		$this->queryParameters["CustomKey4"]=$customKey4;
	}

	public function getCustomKey3() {
		return $this->customKey3;
	}

	public function setCustomKey3($customKey3) {
		$this->customKey3 = $customKey3;
		$this->queryParameters["CustomKey3"]=$customKey3;
	}

	public function getCustomKey2() {
		return $this->customKey2;
	}

	public function setCustomKey2($customKey2) {
		$this->customKey2 = $customKey2;
		$this->queryParameters["CustomKey2"]=$customKey2;
	}

	public function getProject() {
		return $this->project;
	}

	public function setProject($project) {
		$this->project = $project;
		$this->queryParameters["Project"]=$project;
	}

	public function getModifiedTimeStart() {
		return $this->modifiedTimeStart;
	}

	public function setModifiedTimeStart($modifiedTimeStart) {
		$this->modifiedTimeStart = $modifiedTimeStart;
		$this->queryParameters["ModifiedTimeStart"]=$modifiedTimeStart;
	}

	public function getPageNumLimitStart() {
		return $this->pageNumLimitStart;
	}

	public function setPageNumLimitStart($pageNumLimitStart) {
		$this->pageNumLimitStart = $pageNumLimitStart;
		$this->queryParameters["PageNumLimitStart"]=$pageNumLimitStart;
	}

	public function getCustomKey6() {
		return $this->customKey6;
	}

	public function setCustomKey6($customKey6) {
		$this->customKey6 = $customKey6;
		$this->queryParameters["CustomKey6"]=$customKey6;
	}

	public function getContent() {
		return $this->content;
	}

	public function setContent($content) {
		$this->content = $content;
		$this->queryParameters["Content"]=$content;
	}

	public function getPageNumLimitEnd() {
		return $this->pageNumLimitEnd;
	}

	public function setPageNumLimitEnd($pageNumLimitEnd) {
		$this->pageNumLimitEnd = $pageNumLimitEnd;
		$this->queryParameters["PageNumLimitEnd"]=$pageNumLimitEnd;
	}

	public function getContentType() {
		return $this->contentType;
	}

	public function setContentType($contentType) {
		$this->contentType = $contentType;
		$this->queryParameters["ContentType"]=$contentType;
	}

	public function getSizeLimitStart() {
		return $this->sizeLimitStart;
	}

	public function setSizeLimitStart($sizeLimitStart) {
		$this->sizeLimitStart = $sizeLimitStart;
		$this->queryParameters["SizeLimitStart"]=$sizeLimitStart;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getLimit() {
		return $this->limit;
	}

	public function setLimit($limit) {
		$this->limit = $limit;
		$this->queryParameters["Limit"]=$limit;
	}
	
}