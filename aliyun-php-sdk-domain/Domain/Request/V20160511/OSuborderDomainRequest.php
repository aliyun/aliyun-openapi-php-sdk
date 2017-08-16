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
namespace Domain\Request\V20160511;

class OSuborderDomainRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2016-05-11", "OSuborderDomain");
		$this->setMethod("POST");
	}

	private  $endDate;

	private  $pageSize;

	private  $type;

	private  $startDate;

	private  $pageNum;

	public function getendDate() {
		return $this->endDate;
	}

	public function setendDate($endDate) {
		$this->endDate = $endDate;
		$this->queryParameters["endDate"]=$endDate;
	}

	public function getpageSize() {
		return $this->pageSize;
	}

	public function setpageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["pageSize"]=$pageSize;
	}

	public function gettype() {
		return $this->type;
	}

	public function settype($type) {
		$this->type = $type;
		$this->queryParameters["type"]=$type;
	}

	public function getstartDate() {
		return $this->startDate;
	}

	public function setstartDate($startDate) {
		$this->startDate = $startDate;
		$this->queryParameters["startDate"]=$startDate;
	}

	public function getpageNum() {
		return $this->pageNum;
	}

	public function setpageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["pageNum"]=$pageNum;
	}
	
}