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

class CreateDocIndexTaskRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("imm", "2017-09-06", "CreateDocIndexTask", "imm", "openAPI");
		$this->setMethod("POST");
	}

	private  $customKey1;

	private  $set;

	private  $customKey5;

	private  $customKey4;

	private  $customKey3;

	private  $customKey2;

	private  $project;

	private  $customKey6;

	private  $contentType;

	private  $name;

	private  $srcUri;

	private  $uniqueId;

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

	public function getCustomKey5() {
		return $this->customKey5;
	}

	public function setCustomKey5($customKey5) {
		$this->customKey5 = $customKey5;
		$this->queryParameters["CustomKey5"]=$customKey5;
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

	public function getCustomKey6() {
		return $this->customKey6;
	}

	public function setCustomKey6($customKey6) {
		$this->customKey6 = $customKey6;
		$this->queryParameters["CustomKey6"]=$customKey6;
	}

	public function getContentType() {
		return $this->contentType;
	}

	public function setContentType($contentType) {
		$this->contentType = $contentType;
		$this->queryParameters["ContentType"]=$contentType;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getSrcUri() {
		return $this->srcUri;
	}

	public function setSrcUri($srcUri) {
		$this->srcUri = $srcUri;
		$this->queryParameters["SrcUri"]=$srcUri;
	}

	public function getUniqueId() {
		return $this->uniqueId;
	}

	public function setUniqueId($uniqueId) {
		$this->uniqueId = $uniqueId;
		$this->queryParameters["UniqueId"]=$uniqueId;
	}
	
}