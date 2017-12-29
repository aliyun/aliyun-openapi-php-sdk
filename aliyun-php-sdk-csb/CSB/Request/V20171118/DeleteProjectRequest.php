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
namespace CSB\Request\V20171118;

class DeleteProjectRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CSB", "2017-11-18", "DeleteProject", "CSB", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $csbId;

	private  $projectId;

	public function getCsbId() {
		return $this->csbId;
	}

	public function setCsbId($csbId) {
		$this->csbId = $csbId;
		$this->queryParameters["CsbId"]=$csbId;
	}

	public function getProjectId() {
		return $this->projectId;
	}

	public function setProjectId($projectId) {
		$this->projectId = $projectId;
		$this->queryParameters["ProjectId"]=$projectId;
	}
	
}