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
namespace Chatbot\Request\V20171011;

class QueryIntentsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Chatbot", "2017-10-11", "QueryIntents", "beebot", "openAPI");
		$this->setMethod("POST");
	}

	private  $intentName;

	private  $pageSize;

	private  $dialogId;

	private  $pageNumber;

	public function getIntentName() {
		return $this->intentName;
	}

	public function setIntentName($intentName) {
		$this->intentName = $intentName;
		$this->queryParameters["IntentName"]=$intentName;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getDialogId() {
		return $this->dialogId;
	}

	public function setDialogId($dialogId) {
		$this->dialogId = $dialogId;
		$this->queryParameters["DialogId"]=$dialogId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}
	
}