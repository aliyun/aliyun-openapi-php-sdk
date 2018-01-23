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
namespace TeslaDam\Request\V20180118;

class ActionDiskMaskRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("TeslaDam", "2018-01-18", "ActionDiskMask");
	}

	private  $op;

	private  $diskMount;

	private  $ip;

	public function getOp() {
		return $this->op;
	}

	public function setOp($op) {
		$this->op = $op;
		$this->queryParameters["Op"]=$op;
	}

	public function getDiskMount() {
		return $this->diskMount;
	}

	public function setDiskMount($diskMount) {
		$this->diskMount = $diskMount;
		$this->queryParameters["DiskMount"]=$diskMount;
	}

	public function getIp() {
		return $this->ip;
	}

	public function setIp($ip) {
		$this->ip = $ip;
		$this->queryParameters["Ip"]=$ip;
	}
	
}