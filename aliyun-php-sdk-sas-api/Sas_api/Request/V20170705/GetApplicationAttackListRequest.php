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
namespace Sas_api\Request\V20170705;

class GetApplicationAttackListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Sas-api", "2017-07-05", "GetApplicationAttackList");
		$this->setMethod("POST");
	}

	private  $start;

	private  $limit;

	public function getStart() {
		return $this->start;
	}

	public function setStart($start) {
		$this->start = $start;
		$this->queryParameters["Start"]=$start;
	}

	public function getLimit() {
		return $this->limit;
	}

	public function setLimit($limit) {
		$this->limit = $limit;
		$this->queryParameters["Limit"]=$limit;
	}
	
}