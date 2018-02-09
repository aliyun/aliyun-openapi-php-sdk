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
namespace EHPC\Request\V20170714;

class ResetNodesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2017-07-14", "ResetNodes", "ehs", "openAPI");
	}

	private  $Instances;

	private  $clusterId;

	public function getInstances() {
		return $this->Instances;
	}

	public function setInstances($Instances) {
		$this->Instances = $Instances;
		for ($i = 0; $i < count($Instances); $i ++) {	
			$this->queryParameters['Instance.' . ($i + 1) . '.Id'] = $Instances[$i]['Id'];

		}
	}

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->queryParameters["ClusterId"]=$clusterId;
	}
	
}