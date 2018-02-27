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

class DeleteClusterNodeRequest extends \RoaAcsRequest
{
	function  __construct()
	{
		parent::__construct("CS", "2015-12-15", "DeleteClusterNode");
		$this->setUriPattern("/clusters/[ClusterId]/ip/[Ip]");
		$this->setMethod("DELETE");
	}

	private  $releaseInstance;

	private  $ip;

	private  $force;

	private  $clusterId;

	public function getreleaseInstance() {
		return $this->releaseInstance;
	}

	public function setreleaseInstance($releaseInstance) {
		$this->releaseInstance = $releaseInstance;
		$this->queryParameters["releaseInstance"]=$releaseInstance;
	}

	public function getIp() {
		return $this->ip;
	}

	public function setIp($ip) {
		$this->ip = $ip;
		$this->pathParameters["Ip"]=$ip;
	}

	public function getforce() {
		return $this->force;
	}

	public function setforce($force) {
		$this->force = $force;
		$this->queryParameters["force"]=$force;
	}

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->pathParameters["ClusterId"]=$clusterId;
	}
	
}