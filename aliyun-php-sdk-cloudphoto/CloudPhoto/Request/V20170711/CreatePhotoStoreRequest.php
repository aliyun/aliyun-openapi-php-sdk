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
namespace CloudPhoto\Request\V20170711;

class CreatePhotoStoreRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "CreatePhotoStore", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $bucketName;

	private  $storeName;

	private  $remark;

	private  $defaultQuota;

	public function getBucketName() {
		return $this->bucketName;
	}

	public function setBucketName($bucketName) {
		$this->bucketName = $bucketName;
		$this->queryParameters["BucketName"]=$bucketName;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getRemark() {
		return $this->remark;
	}

	public function setRemark($remark) {
		$this->remark = $remark;
		$this->queryParameters["Remark"]=$remark;
	}

	public function getDefaultQuota() {
		return $this->defaultQuota;
	}

	public function setDefaultQuota($defaultQuota) {
		$this->defaultQuota = $defaultQuota;
		$this->queryParameters["DefaultQuota"]=$defaultQuota;
	}
	
}