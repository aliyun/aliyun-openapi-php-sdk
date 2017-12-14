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
namespace Cms\Request\V20170301;

class ListAlarmHistoryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "ListAlarmHistory", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $cursor;

	private  $callby_cms_owner;

	private  $size;

	private  $endTime;

	private  $id;

	private  $startTime;

	public function getCursor() {
		return $this->cursor;
	}

	public function setCursor($cursor) {
		$this->cursor = $cursor;
		$this->queryParameters["Cursor"]=$cursor;
	}

	public function getcallby_cms_owner() {
		return $this->callby_cms_owner;
	}

	public function setcallby_cms_owner($callby_cms_owner) {
		$this->callby_cms_owner = $callby_cms_owner;
		$this->queryParameters["callby_cms_owner"]=$callby_cms_owner;
	}

	public function getSize() {
		return $this->size;
	}

	public function setSize($size) {
		$this->size = $size;
		$this->queryParameters["Size"]=$size;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
		$this->queryParameters["Id"]=$id;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}
	
}