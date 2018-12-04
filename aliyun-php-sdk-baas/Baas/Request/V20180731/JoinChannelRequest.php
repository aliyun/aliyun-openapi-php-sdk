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
namespace Baas\Request\V20180731;

class JoinChannelRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Baas", "2018-07-31", "JoinChannel");
	}

	private  $location;

	private  $do;

	private  $channelId;

	public function getLocation() {
		return $this->location;
	}

	public function setLocation($location) {
		$this->location = $location;
		}

	public function getDo() {
		return $this->do;
	}

	public function setDo($do) {
		$this->do = $do;
		$this->queryParameters["Do"]=$do;
	}

	public function getChannelId() {
		return $this->channelId;
	}

	public function setChannelId($channelId) {
		$this->channelId = $channelId;
		$this->queryParameters["ChannelId"]=$channelId;
	}
	
}