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
namespace Kms\Request\V20160120;

class CreateKeyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Kms", "2016-01-20", "CreateKey", "kms", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $keyUsage;

	private  $origin;

	private  $description;

	private  $sTSToken;

	public function getKeyUsage() {
		return $this->keyUsage;
	}

	public function setKeyUsage($keyUsage) {
		$this->keyUsage = $keyUsage;
		$this->queryParameters["KeyUsage"]=$keyUsage;
	}

	public function getOrigin() {
		return $this->origin;
	}

	public function setOrigin($origin) {
		$this->origin = $origin;
		$this->queryParameters["Origin"]=$origin;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getSTSToken() {
		return $this->sTSToken;
	}

	public function setSTSToken($sTSToken) {
		$this->sTSToken = $sTSToken;
		$this->queryParameters["STSToken"]=$sTSToken;
	}
	
}