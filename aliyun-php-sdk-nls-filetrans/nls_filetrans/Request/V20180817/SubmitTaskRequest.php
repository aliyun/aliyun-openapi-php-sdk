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
namespace nls_filetrans\Request\V20180817;

class SubmitTaskRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("nls-filetrans", "2018-08-17", "SubmitTask");
		$this->setMethod("POST");
	}

	private  $task;

	private  $debug;

	public function getTask() {
		return $this->task;
	}

	public function setTask($task) {
		$this->task = $task;
		$this->queryParameters["Task"]=$task;
	}

	public function getDebug() {
		return $this->debug;
	}

	public function setDebug($debug) {
		$this->debug = $debug;
		$this->queryParameters["Debug"]=$debug;
	}
	
}