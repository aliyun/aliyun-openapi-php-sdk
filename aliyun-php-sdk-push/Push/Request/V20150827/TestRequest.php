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
namespace Push\Request\V20150827;

class TestRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2015-08-27", "Test");
	}

	private  $appKey;

	private  $target;

	private  $targetValue;

	private  $my_name;

	private  $my_age;

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getTarget() {
		return $this->target;
	}

	public function setTarget($target) {
		$this->target = $target;
		$this->queryParameters["Target"]=$target;
	}

	public function getTargetValue() {
		return $this->targetValue;
	}

	public function setTargetValue($targetValue) {
		$this->targetValue = $targetValue;
		$this->queryParameters["TargetValue"]=$targetValue;
	}

	public function getmy_name() {
		return $this->my_name;
	}

	public function setmy_name($my_name) {
		$this->my_name = $my_name;
		$this->queryParameters["my_name"]=$my_name;
	}

	public function getmy_age() {
		return $this->my_age;
	}

	public function setmy_age($my_age) {
		$this->my_age = $my_age;
		$this->queryParameters["my_age"]=$my_age;
	}
	
}