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
namespace Ots\Request\V20160620;

class UnbindInstance2VpcRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ots", "2016-06-20", "UnbindInstance2Vpc", "ots", "openAPI");
		$this->setMethod("POST");
	}

	private  $access_key_id;

	private  $instanceVpcName;

	private  $resourceOwnerId;

	private  $instanceName;

	private  $regionNo;

	public function getaccess_key_id() {
		return $this->access_key_id;
	}

	public function setaccess_key_id($access_key_id) {
		$this->access_key_id = $access_key_id;
		$this->queryParameters["access_key_id"]=$access_key_id;
	}

	public function getInstanceVpcName() {
		return $this->instanceVpcName;
	}

	public function setInstanceVpcName($instanceVpcName) {
		$this->instanceVpcName = $instanceVpcName;
		$this->queryParameters["InstanceVpcName"]=$instanceVpcName;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getInstanceName() {
		return $this->instanceName;
	}

	public function setInstanceName($instanceName) {
		$this->instanceName = $instanceName;
		$this->queryParameters["InstanceName"]=$instanceName;
	}

	public function getRegionNo() {
		return $this->regionNo;
	}

	public function setRegionNo($regionNo) {
		$this->regionNo = $regionNo;
		$this->queryParameters["RegionNo"]=$regionNo;
	}
	
}