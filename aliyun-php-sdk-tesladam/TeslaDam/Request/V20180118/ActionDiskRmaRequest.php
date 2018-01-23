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

class ActionDiskRmaRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("TeslaDam", "2018-01-18", "ActionDiskRma");
	}

	private  $diskName;

	private  $executionId;

	private  $diskSlot;

	private  $hostname;

	private  $diskMount;

	private  $diskReason;

	private  $diskSn;

	public function getDiskName() {
		return $this->diskName;
	}

	public function setDiskName($diskName) {
		$this->diskName = $diskName;
		$this->queryParameters["DiskName"]=$diskName;
	}

	public function getExecutionId() {
		return $this->executionId;
	}

	public function setExecutionId($executionId) {
		$this->executionId = $executionId;
		$this->queryParameters["ExecutionId"]=$executionId;
	}

	public function getDiskSlot() {
		return $this->diskSlot;
	}

	public function setDiskSlot($diskSlot) {
		$this->diskSlot = $diskSlot;
		$this->queryParameters["DiskSlot"]=$diskSlot;
	}

	public function getHostname() {
		return $this->hostname;
	}

	public function setHostname($hostname) {
		$this->hostname = $hostname;
		$this->queryParameters["Hostname"]=$hostname;
	}

	public function getDiskMount() {
		return $this->diskMount;
	}

	public function setDiskMount($diskMount) {
		$this->diskMount = $diskMount;
		$this->queryParameters["DiskMount"]=$diskMount;
	}

	public function getDiskReason() {
		return $this->diskReason;
	}

	public function setDiskReason($diskReason) {
		$this->diskReason = $diskReason;
		$this->queryParameters["DiskReason"]=$diskReason;
	}

	public function getDiskSn() {
		return $this->diskSn;
	}

	public function setDiskSn($diskSn) {
		$this->diskSn = $diskSn;
		$this->queryParameters["DiskSn"]=$diskSn;
	}
	
}