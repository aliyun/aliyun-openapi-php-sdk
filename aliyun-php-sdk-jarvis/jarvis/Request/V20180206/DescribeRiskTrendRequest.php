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
namespace jarvis\Request\V20180206;

class DescribeRiskTrendRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("jarvis", "2018-02-06", "DescribeRiskTrend");
		$this->setMethod("POST");
	}

	private  $sourceIp;

	private  $queryProduct;

	private  $lang;

	private  $peroid;

	private  $sourceCode;

	private  $queryRegionId;

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getQueryProduct() {
		return $this->queryProduct;
	}

	public function setQueryProduct($queryProduct) {
		$this->queryProduct = $queryProduct;
		$this->queryParameters["QueryProduct"]=$queryProduct;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getPeroid() {
		return $this->peroid;
	}

	public function setPeroid($peroid) {
		$this->peroid = $peroid;
		$this->queryParameters["Peroid"]=$peroid;
	}

	public function getSourceCode() {
		return $this->sourceCode;
	}

	public function setSourceCode($sourceCode) {
		$this->sourceCode = $sourceCode;
		$this->queryParameters["SourceCode"]=$sourceCode;
	}

	public function getQueryRegionId() {
		return $this->queryRegionId;
	}

	public function setQueryRegionId($queryRegionId) {
		$this->queryRegionId = $queryRegionId;
		$this->queryParameters["QueryRegionId"]=$queryRegionId;
	}
	
}