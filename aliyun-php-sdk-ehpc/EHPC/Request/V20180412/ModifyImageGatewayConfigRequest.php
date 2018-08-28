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
namespace EHPC\Request\V20180412;

class ModifyImageGatewayConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "ModifyImageGatewayConfig", "ehs", "openAPI");
	}

	private  $defaultRepoLocation;

	private  $dBPassword;

	private  $Repos;

	private  $dBType;

	private  $dBUsername;

	private  $dBServerInfo;

	private  $pullUpdateTimeout;

	private  $clusterId;

	private  $imageExpirationTimeout;

	public function getDefaultRepoLocation() {
		return $this->defaultRepoLocation;
	}

	public function setDefaultRepoLocation($defaultRepoLocation) {
		$this->defaultRepoLocation = $defaultRepoLocation;
		$this->queryParameters["DefaultRepoLocation"]=$defaultRepoLocation;
	}

	public function getDBPassword() {
		return $this->dBPassword;
	}

	public function setDBPassword($dBPassword) {
		$this->dBPassword = $dBPassword;
		$this->queryParameters["DBPassword"]=$dBPassword;
	}

	public function getRepos() {
		return $this->Repos;
	}

	public function setRepos($Repos) {
		$this->Repos = $Repos;
		for ($i = 0; $i < count($Repos); $i ++) {	
			$this->queryParameters['Repo.' . ($i + 1) . '.Auth'] = $Repos[$i]['Auth'];
			$this->queryParameters['Repo.' . ($i + 1) . '.Location'] = $Repos[$i]['Location'];
			$this->queryParameters['Repo.' . ($i + 1) . '.URL'] = $Repos[$i]['URL'];

		}
	}

	public function getDBType() {
		return $this->dBType;
	}

	public function setDBType($dBType) {
		$this->dBType = $dBType;
		$this->queryParameters["DBType"]=$dBType;
	}

	public function getDBUsername() {
		return $this->dBUsername;
	}

	public function setDBUsername($dBUsername) {
		$this->dBUsername = $dBUsername;
		$this->queryParameters["DBUsername"]=$dBUsername;
	}

	public function getDBServerInfo() {
		return $this->dBServerInfo;
	}

	public function setDBServerInfo($dBServerInfo) {
		$this->dBServerInfo = $dBServerInfo;
		$this->queryParameters["DBServerInfo"]=$dBServerInfo;
	}

	public function getPullUpdateTimeout() {
		return $this->pullUpdateTimeout;
	}

	public function setPullUpdateTimeout($pullUpdateTimeout) {
		$this->pullUpdateTimeout = $pullUpdateTimeout;
		$this->queryParameters["PullUpdateTimeout"]=$pullUpdateTimeout;
	}

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->queryParameters["ClusterId"]=$clusterId;
	}

	public function getImageExpirationTimeout() {
		return $this->imageExpirationTimeout;
	}

	public function setImageExpirationTimeout($imageExpirationTimeout) {
		$this->imageExpirationTimeout = $imageExpirationTimeout;
		$this->queryParameters["ImageExpirationTimeout"]=$imageExpirationTimeout;
	}
	
}