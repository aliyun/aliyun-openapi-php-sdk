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
namespace Airec\Request\V20181012;

class RecommendRequest extends \RoaAcsRequest
{
	function  __construct()
	{
		parent::__construct("Airec", "2018-10-12", "Recommend", "airec", "openAPI");
		$this->setUriPattern("/openapi/instances/[InstanceId]/actions/recommend");
		$this->setMethod("GET");
	}

	private  $returnCount;

	private  $instanceId;

	private  $ip;

	private  $sceneId;

	private  $imei;

	private  $userId;

	public function getReturnCount() {
		return $this->returnCount;
	}

	public function setReturnCount($returnCount) {
		$this->returnCount = $returnCount;
		$this->queryParameters["ReturnCount"]=$returnCount;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->pathParameters["InstanceId"]=$instanceId;
	}

	public function getIp() {
		return $this->ip;
	}

	public function setIp($ip) {
		$this->ip = $ip;
		$this->queryParameters["Ip"]=$ip;
	}

	public function getSceneId() {
		return $this->sceneId;
	}

	public function setSceneId($sceneId) {
		$this->sceneId = $sceneId;
		$this->queryParameters["SceneId"]=$sceneId;
	}

	public function getImei() {
		return $this->imei;
	}

	public function setImei($imei) {
		$this->imei = $imei;
		$this->queryParameters["Imei"]=$imei;
	}

	public function getUserId() {
		return $this->userId;
	}

	public function setUserId($userId) {
		$this->userId = $userId;
		$this->queryParameters["UserId"]=$userId;
	}
	
}