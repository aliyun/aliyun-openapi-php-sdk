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
namespace Green\Request\V20160923;

class PluginAntispamResultsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Green", "2016-09-23", "PluginAntispamResults");
		$this->setMethod("POST");
	}

	private  $bizScene;

	private  $clientVersion;

	private  $postContentType;

	private  $pageIndex;

	private  $pageSize;

	public function getBizScene() {
		return $this->bizScene;
	}

	public function setBizScene($bizScene) {
		$this->bizScene = $bizScene;
		$this->queryParameters["BizScene"]=$bizScene;
	}

	public function getClientVersion() {
		return $this->clientVersion;
	}

	public function setClientVersion($clientVersion) {
		$this->clientVersion = $clientVersion;
		$this->queryParameters["ClientVersion"]=$clientVersion;
	}

	public function getPostContentType() {
		return $this->postContentType;
	}

	public function setPostContentType($postContentType) {
		$this->postContentType = $postContentType;
		$this->queryParameters["PostContentType"]=$postContentType;
	}

	public function getPageIndex() {
		return $this->pageIndex;
	}

	public function setPageIndex($pageIndex) {
		$this->pageIndex = $pageIndex;
		$this->queryParameters["PageIndex"]=$pageIndex;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}
	
}