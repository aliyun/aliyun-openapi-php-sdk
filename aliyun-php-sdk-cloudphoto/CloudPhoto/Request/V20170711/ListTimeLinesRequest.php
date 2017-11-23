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
namespace CloudPhoto\Request\V20170711;

class ListTimeLinesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "ListTimeLines", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $cursor;

	private  $photoSize;

	private  $timeLineCount;

	private  $libraryId;

	private  $storeName;

	private  $timeLineUnit;

	private  $filterBy;

	private  $direction;

	private  $order;

	public function getCursor() {
		return $this->cursor;
	}

	public function setCursor($cursor) {
		$this->cursor = $cursor;
		$this->queryParameters["Cursor"]=$cursor;
	}

	public function getPhotoSize() {
		return $this->photoSize;
	}

	public function setPhotoSize($photoSize) {
		$this->photoSize = $photoSize;
		$this->queryParameters["PhotoSize"]=$photoSize;
	}

	public function getTimeLineCount() {
		return $this->timeLineCount;
	}

	public function setTimeLineCount($timeLineCount) {
		$this->timeLineCount = $timeLineCount;
		$this->queryParameters["TimeLineCount"]=$timeLineCount;
	}

	public function getLibraryId() {
		return $this->libraryId;
	}

	public function setLibraryId($libraryId) {
		$this->libraryId = $libraryId;
		$this->queryParameters["LibraryId"]=$libraryId;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getTimeLineUnit() {
		return $this->timeLineUnit;
	}

	public function setTimeLineUnit($timeLineUnit) {
		$this->timeLineUnit = $timeLineUnit;
		$this->queryParameters["TimeLineUnit"]=$timeLineUnit;
	}

	public function getFilterBy() {
		return $this->filterBy;
	}

	public function setFilterBy($filterBy) {
		$this->filterBy = $filterBy;
		$this->queryParameters["FilterBy"]=$filterBy;
	}

	public function getDirection() {
		return $this->direction;
	}

	public function setDirection($direction) {
		$this->direction = $direction;
		$this->queryParameters["Direction"]=$direction;
	}

	public function getOrder() {
		return $this->order;
	}

	public function setOrder($order) {
		$this->order = $order;
		$this->queryParameters["Order"]=$order;
	}
	
}