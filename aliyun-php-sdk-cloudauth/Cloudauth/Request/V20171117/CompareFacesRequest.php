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

class CompareFacesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cloudauth", "2017-11-17", "CompareFaces", "cloudauth", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $sourceImageType;

	private  $resourceOwnerId;

	private  $targetImageType;

	private  $sourceImageValue;

	private  $targetImageValue;

	public function getSourceImageType() {
		return $this->sourceImageType;
	}

	public function setSourceImageType($sourceImageType) {
		$this->sourceImageType = $sourceImageType;
		$this->queryParameters["SourceImageType"]=$sourceImageType;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getTargetImageType() {
		return $this->targetImageType;
	}

	public function setTargetImageType($targetImageType) {
		$this->targetImageType = $targetImageType;
		$this->queryParameters["TargetImageType"]=$targetImageType;
	}

	public function getSourceImageValue() {
		return $this->sourceImageValue;
	}

	public function setSourceImageValue($sourceImageValue) {
		$this->sourceImageValue = $sourceImageValue;
		$this->queryParameters["SourceImageValue"]=$sourceImageValue;
	}

	public function getTargetImageValue() {
		return $this->targetImageValue;
	}

	public function setTargetImageValue($targetImageValue) {
		$this->targetImageValue = $targetImageValue;
		$this->queryParameters["TargetImageValue"]=$targetImageValue;
	}
	
}