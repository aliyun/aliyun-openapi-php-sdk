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
namespace Ram\Request\V20150501;

class SetPasswordPolicyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ram", "2015-05-01", "SetPasswordPolicy");
		$this->setProtocol("https");
	}

	private  $minimumPasswordLength;

	private  $requireLowercaseCharacters;

	private  $requireUppercaseCharacters;

	private  $requireNumbers;

	private  $requireSymbols;

	public function getMinimumPasswordLength() {
		return $this->minimumPasswordLength;
	}

	public function setMinimumPasswordLength($minimumPasswordLength) {
		$this->minimumPasswordLength = $minimumPasswordLength;
		$this->queryParameters["MinimumPasswordLength"]=$minimumPasswordLength;
	}

	public function getRequireLowercaseCharacters() {
		return $this->requireLowercaseCharacters;
	}

	public function setRequireLowercaseCharacters($requireLowercaseCharacters) {
		$this->requireLowercaseCharacters = $requireLowercaseCharacters;
		$this->queryParameters["RequireLowercaseCharacters"]=$requireLowercaseCharacters;
	}

	public function getRequireUppercaseCharacters() {
		return $this->requireUppercaseCharacters;
	}

	public function setRequireUppercaseCharacters($requireUppercaseCharacters) {
		$this->requireUppercaseCharacters = $requireUppercaseCharacters;
		$this->queryParameters["RequireUppercaseCharacters"]=$requireUppercaseCharacters;
	}

	public function getRequireNumbers() {
		return $this->requireNumbers;
	}

	public function setRequireNumbers($requireNumbers) {
		$this->requireNumbers = $requireNumbers;
		$this->queryParameters["RequireNumbers"]=$requireNumbers;
	}

	public function getRequireSymbols() {
		return $this->requireSymbols;
	}

	public function setRequireSymbols($requireSymbols) {
		$this->requireSymbols = $requireSymbols;
		$this->queryParameters["RequireSymbols"]=$requireSymbols;
	}
	
}