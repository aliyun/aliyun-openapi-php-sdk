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
namespace Cloudauth\Request\V20180916;

class DetectFaceAttributesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cloudauth", "2018-09-16", "DetectFaceAttributes", "cloudauth", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $maxNumPhotosPerCategory;

	private  $maxFaceNum;

	private  $resourceOwnerId;

	private  $sourceIp;

	private  $retAttributes;

	private  $materialValue;

	private  $dontSaveDB;

	private  $clientTag;

	public function getMaxNumPhotosPerCategory() {
		return $this->maxNumPhotosPerCategory;
	}

	public function setMaxNumPhotosPerCategory($maxNumPhotosPerCategory) {
		$this->maxNumPhotosPerCategory = $maxNumPhotosPerCategory;
		}

	public function getMaxFaceNum() {
		return $this->maxFaceNum;
	}

	public function setMaxFaceNum($maxFaceNum) {
		$this->maxFaceNum = $maxFaceNum;
		}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getRetAttributes() {
		return $this->retAttributes;
	}

	public function setRetAttributes($retAttributes) {
		$this->retAttributes = $retAttributes;
		}

	public function getMaterialValue() {
		return $this->materialValue;
	}

	public function setMaterialValue($materialValue) {
		$this->materialValue = $materialValue;
		}

	public function getDontSaveDB() {
		return $this->dontSaveDB;
	}

	public function setDontSaveDB($dontSaveDB) {
		$this->dontSaveDB = $dontSaveDB;
		}

	public function getClientTag() {
		return $this->clientTag;
	}

	public function setClientTag($clientTag) {
		$this->clientTag = $clientTag;
		}
	
}