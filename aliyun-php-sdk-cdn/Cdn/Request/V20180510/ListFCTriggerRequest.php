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
namespace Cdn\Request\V20180510;

class ListFCTriggerRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2018-05-10", "ListFCTrigger");
	}

	private  $eventMetaVersion;

	private  $ownerId;

	private  $eventMetaName;

	public function getEventMetaVersion() {
		return $this->eventMetaVersion;
	}

	public function setEventMetaVersion($eventMetaVersion) {
		$this->eventMetaVersion = $eventMetaVersion;
		$this->queryParameters["EventMetaVersion"]=$eventMetaVersion;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getEventMetaName() {
		return $this->eventMetaName;
	}

	public function setEventMetaName($eventMetaName) {
		$this->eventMetaName = $eventMetaName;
		$this->queryParameters["EventMetaName"]=$eventMetaName;
	}
	
}