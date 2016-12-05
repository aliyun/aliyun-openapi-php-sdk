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
namespace Push\Request\V20160801;

class ModifyAppConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2016-08-01", "ModifyAppConfig");
	}

	private  $appKey;

	private  $packageName;

	private  $devCertKey;

	private  $devCertPass;

	private  $productCertKey;

	private  $productCertPass;

	private  $bundleId;

	private  $boxFlag;

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getPackageName() {
		return $this->packageName;
	}

	public function setPackageName($packageName) {
		$this->packageName = $packageName;
		$this->queryParameters["PackageName"]=$packageName;
	}

	public function getDevCertKey() {
		return $this->devCertKey;
	}

	public function setDevCertKey($devCertKey) {
		$this->devCertKey = $devCertKey;
		$this->queryParameters["DevCertKey"]=$devCertKey;
	}

	public function getDevCertPass() {
		return $this->devCertPass;
	}

	public function setDevCertPass($devCertPass) {
		$this->devCertPass = $devCertPass;
		$this->queryParameters["DevCertPass"]=$devCertPass;
	}

	public function getProductCertKey() {
		return $this->productCertKey;
	}

	public function setProductCertKey($productCertKey) {
		$this->productCertKey = $productCertKey;
		$this->queryParameters["ProductCertKey"]=$productCertKey;
	}

	public function getProductCertPass() {
		return $this->productCertPass;
	}

	public function setProductCertPass($productCertPass) {
		$this->productCertPass = $productCertPass;
		$this->queryParameters["ProductCertPass"]=$productCertPass;
	}

	public function getBundleId() {
		return $this->bundleId;
	}

	public function setBundleId($bundleId) {
		$this->bundleId = $bundleId;
		$this->queryParameters["BundleId"]=$bundleId;
	}

	public function getBoxFlag() {
		return $this->boxFlag;
	}

	public function setBoxFlag($boxFlag) {
		$this->boxFlag = $boxFlag;
		$this->queryParameters["BoxFlag"]=$boxFlag;
	}
	
}