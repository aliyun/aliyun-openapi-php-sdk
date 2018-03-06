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

class ListEventsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "ListEvents", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $cursor;

	private  $size;

	private  $storeName;

	private  $state;

	private  $direction;

	public function getCursor() {
		return $this->cursor;
	}

	public function setCursor($cursor) {
		$this->cursor = $cursor;
		$this->queryParameters["Cursor"]=$cursor;
	}

	public function getSize() {
		return $this->size;
	}

	public function setSize($size) {
		$this->size = $size;
		$this->queryParameters["Size"]=$size;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getState() {
		return $this->state;
	}

	public function setState($state) {
		$this->state = $state;
		$this->queryParameters["State"]=$state;
	}

	public function getDirection() {
		return $this->direction;
	}

	public function setDirection($direction) {
		$this->direction = $direction;
		$this->queryParameters["Direction"]=$direction;
	}
	
}