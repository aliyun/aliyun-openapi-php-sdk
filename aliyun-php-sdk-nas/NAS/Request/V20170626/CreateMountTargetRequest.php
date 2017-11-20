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
namespace NAS\Request\V20170626;

class CreateMountTargetRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("NAS", "2017-06-26", "CreateMountTarget", "nas", "openAPI");
		$this->setMethod("POST");
	}

	private  $vSwitchId;

	private  $vpcId;

	private  $networkType;

	private  $accessGroupName;

	private  $fileSystemId;

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getNetworkType() {
		return $this->networkType;
	}

	public function setNetworkType($networkType) {
		$this->networkType = $networkType;
		$this->queryParameters["NetworkType"]=$networkType;
	}

	public function getAccessGroupName() {
		return $this->accessGroupName;
	}

	public function setAccessGroupName($accessGroupName) {
		$this->accessGroupName = $accessGroupName;
		$this->queryParameters["AccessGroupName"]=$accessGroupName;
	}

	public function getFileSystemId() {
		return $this->fileSystemId;
	}

	public function setFileSystemId($fileSystemId) {
		$this->fileSystemId = $fileSystemId;
		$this->queryParameters["FileSystemId"]=$fileSystemId;
	}
	
}