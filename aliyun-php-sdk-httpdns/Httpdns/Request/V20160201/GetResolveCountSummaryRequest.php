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
namespace Httpdns\Request\V20160201;

class GetResolveCountSummaryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Httpdns", "2016-02-01", "GetResolveCountSummary");
		$this->setMethod("POST");
	}

	private  $granularity;

	private  $timeSpan;

	public function getGranularity() {
		return $this->granularity;
	}

	public function setGranularity($granularity) {
		$this->granularity = $granularity;
		$this->queryParameters["Granularity"]=$granularity;
	}

	public function getTimeSpan() {
		return $this->timeSpan;
	}

	public function setTimeSpan($timeSpan) {
		$this->timeSpan = $timeSpan;
		$this->queryParameters["TimeSpan"]=$timeSpan;
	}
	
}