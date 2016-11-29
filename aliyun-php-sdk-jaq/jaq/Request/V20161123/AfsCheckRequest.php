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
namespace jaq\Request\V20161123;

class AfsCheckRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("jaq", "2016-11-23", "AfsCheck");
	}

	private  $callerName;

	private  $session;

	private  $token;

	private  $sig;

	private  $platform;

	private  $scene;

	public function getCallerName() {
		return $this->callerName;
	}

	public function setCallerName($callerName) {
		$this->callerName = $callerName;
		$this->queryParameters["CallerName"]=$callerName;
	}

	public function getSession() {
		return $this->session;
	}

	public function setSession($session) {
		$this->session = $session;
		$this->queryParameters["Session"]=$session;
	}

	public function getToken() {
		return $this->token;
	}

	public function setToken($token) {
		$this->token = $token;
		$this->queryParameters["Token"]=$token;
	}

	public function getSig() {
		return $this->sig;
	}

	public function setSig($sig) {
		$this->sig = $sig;
		$this->queryParameters["Sig"]=$sig;
	}

	public function getPlatform() {
		return $this->platform;
	}

	public function setPlatform($platform) {
		$this->platform = $platform;
		$this->queryParameters["Platform"]=$platform;
	}

	public function getScene() {
		return $this->scene;
	}

	public function setScene($scene) {
		$this->scene = $scene;
		$this->queryParameters["Scene"]=$scene;
	}
	
}