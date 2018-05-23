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
namespace Drds\Request\V20171016;

class QueryInstanceInfoByConnRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Drds", "2017-10-16", "QueryInstanceInfoByConn");
		$this->setMethod("POST");
	}

	private  $port;

	private  $host;

	private  $userName;

	public function getPort() {
		return $this->port;
	}

	public function setPort($port) {
		$this->port = $port;
		$this->queryParameters["Port"]=$port;
	}

	public function getHost() {
		return $this->host;
	}

	public function setHost($host) {
		$this->host = $host;
		$this->queryParameters["Host"]=$host;
	}

	public function getUserName() {
		return $this->userName;
	}

	public function setUserName($userName) {
		$this->userName = $userName;
		$this->queryParameters["UserName"]=$userName;
	}
	
}