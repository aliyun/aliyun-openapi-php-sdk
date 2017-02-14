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
namespace Green\Request\V20161216;

class TextAntispamDetectionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Green", "2016-12-16", "TextAntispamDetection");
		$this->setMethod("POST");
	}

	private  $customDict;

	private  $dataItems;

	public function getCustomDict() {
		return $this->customDict;
	}

	public function setCustomDict($customDict) {
		$this->customDict = $customDict;
		$this->queryParameters["CustomDict"]=$customDict;
	}

	public function getDataItems() {
		return $this->dataItems;
	}

	public function setDataItems($dataItems) {
		$this->dataItems = $dataItems;
		$this->queryParameters["DataItems"]=$dataItems;
	}
	
}