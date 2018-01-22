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
namespace CSB\Request\V20171118;

class PublishUnionCasServiceRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CSB", "2017-11-18", "PublishUnionCasService", "CSB", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $casCsbName;

	private  $data;

	public function getCasCsbName() {
		return $this->casCsbName;
	}

	public function setCasCsbName($casCsbName) {
		$this->casCsbName = $casCsbName;
		$this->queryParameters["CasCsbName"]=$casCsbName;
	}

	public function getData() {
		return $this->data;
	}

	public function setData($data) {
		$this->data = $data;
		}
	
}