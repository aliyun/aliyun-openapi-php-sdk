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
namespace CS\Request\V20151215;

class CallBackAgilityClusterRequest extends \RoaAcsRequest
{
	function  __construct()
	{
		parent::__construct("CS", "2015-12-15", "CallBackAgilityCluster");
		$this->setUriPattern("/agility/token/[Token]/req_once/[ReqOnce]/callback");
		$this->setMethod("POST");
	}

	private  $reqOnce;

	private  $token;

	public function getReqOnce() {
		return $this->reqOnce;
	}

	public function setReqOnce($reqOnce) {
		$this->reqOnce = $reqOnce;
		$this->pathParameters["ReqOnce"]=$reqOnce;
	}

	public function getToken() {
		return $this->token;
	}

	public function setToken($token) {
		$this->token = $token;
		$this->pathParameters["Token"]=$token;
	}
	
}