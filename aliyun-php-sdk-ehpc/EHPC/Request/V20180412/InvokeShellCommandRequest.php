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

class InvokeShellCommandRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "InvokeShellCommand", "ehs", "openAPI");
	}

	private  $Instances;

	private  $workingDir;

	private  $clusterId;

	private  $command;

	private  $timeout;

	public function getInstances() {
		return $this->Instances;
	}

	public function setInstances($Instances) {
		$this->Instances = $Instances;
		for ($i = 0; $i < count($Instances); $i ++) {	
			$this->queryParameters['Instance.' . ($i + 1) . '.Id'] = $Instances[$i]['Id'];

		}
	}

	public function getWorkingDir() {
		return $this->workingDir;
	}

	public function setWorkingDir($workingDir) {
		$this->workingDir = $workingDir;
		$this->queryParameters["WorkingDir"]=$workingDir;
	}

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->queryParameters["ClusterId"]=$clusterId;
	}

	public function getCommand() {
		return $this->command;
	}

	public function setCommand($command) {
		$this->command = $command;
		$this->queryParameters["Command"]=$command;
	}

	public function getTimeout() {
		return $this->timeout;
	}

	public function setTimeout($timeout) {
		$this->timeout = $timeout;
		$this->queryParameters["Timeout"]=$timeout;
	}
	
}