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
namespace Cms\Request\V20180308;

class DescribeISPAreaCityRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "DescribeISPAreaCity", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $city;

	private  $isp;

	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
		$this->queryParameters["City"]=$city;
	}

	public function getIsp() {
		return $this->isp;
	}

	public function setIsp($isp) {
		$this->isp = $isp;
		$this->queryParameters["Isp"]=$isp;
	}
	
}