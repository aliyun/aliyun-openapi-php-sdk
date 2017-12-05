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
namespace Cloudauth\Request\V20171117;

class SubmitMaterialsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cloudauth", "2017-11-17", "SubmitMaterials", "cloudauth", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $Materials;

	private  $verifyToken;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getMaterials() {
		return $this->Materials;
	}

	public function setMaterials($Materials) {
		$this->Materials = $Materials;
		for ($i = 0; $i < count($Materials); $i ++) {	
			$this->queryParameters['Material.' . ($i + 1) . '.MaterialType'] = $Materials[$i]['MaterialType'];
			$this->queryParameters['Material.' . ($i + 1) . '.Value'] = $Materials[$i]['Value'];

		}
	}

	public function getVerifyToken() {
		return $this->verifyToken;
	}

	public function setVerifyToken($verifyToken) {
		$this->verifyToken = $verifyToken;
		$this->queryParameters["VerifyToken"]=$verifyToken;
	}
	
}