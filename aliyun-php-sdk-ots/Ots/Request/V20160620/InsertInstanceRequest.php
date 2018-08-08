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

class InsertInstanceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ots", "2016-06-20", "InsertInstance", "ots", "openAPI");
		$this->setMethod("POST");
	}

	private  $access_key_id;

	private  $clusterType;

	private  $resourceOwnerId;

	private  $instanceName;

	private  $description;

	private  $TagInfos;

	private  $network;

	public function getaccess_key_id() {
		return $this->access_key_id;
	}

	public function setaccess_key_id($access_key_id) {
		$this->access_key_id = $access_key_id;
		$this->queryParameters["access_key_id"]=$access_key_id;
	}

	public function getClusterType() {
		return $this->clusterType;
	}

	public function setClusterType($clusterType) {
		$this->clusterType = $clusterType;
		$this->queryParameters["ClusterType"]=$clusterType;
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

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getTagInfos() {
		return $this->TagInfos;
	}

	public function setTagInfos($TagInfos) {
		$this->TagInfos = $TagInfos;
		for ($i = 0; $i < count($TagInfos); $i ++) {	
			$this->queryParameters['TagInfo.' . ($i + 1) . '.TagKey'] = $TagInfos[$i]['TagKey'];
			$this->queryParameters['TagInfo.' . ($i + 1) . '.TagValue'] = $TagInfos[$i]['TagValue'];

		}
	}

	public function getNetwork() {
		return $this->network;
	}

	public function setNetwork($network) {
		$this->network = $network;
		$this->queryParameters["Network"]=$network;
	}
	
}