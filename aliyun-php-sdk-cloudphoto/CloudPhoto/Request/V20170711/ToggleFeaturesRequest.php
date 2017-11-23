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

class ToggleFeaturesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "ToggleFeatures", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $DisabledFeaturess;

	private  $storeName;

	private  $EnabledFeaturess;

	public function getDisabledFeaturess() {
		return $this->DisabledFeaturess;
	}

	public function setDisabledFeaturess($DisabledFeaturess) {
		$this->DisabledFeaturess = $DisabledFeaturess;
		for ($i = 0; $i < count($DisabledFeaturess); $i ++) {	
			$this->queryParameters["DisabledFeatures.".($i+1)] = $DisabledFeaturess[$i];
		}
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}

	public function getEnabledFeaturess() {
		return $this->EnabledFeaturess;
	}

	public function setEnabledFeaturess($EnabledFeaturess) {
		$this->EnabledFeaturess = $EnabledFeaturess;
		for ($i = 0; $i < count($EnabledFeaturess); $i ++) {	
			$this->queryParameters["EnabledFeatures.".($i+1)] = $EnabledFeaturess[$i];
		}
	}
	
}