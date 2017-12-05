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
namespace Cloudauth\Request\V20171117;

class GetStatusRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cloudauth", "2017-11-17", "GetStatus", "cloudauth", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $biz;

	private  $ticketId;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getBiz() {
		return $this->biz;
	}

	public function setBiz($biz) {
		$this->biz = $biz;
		$this->queryParameters["Biz"]=$biz;
	}

	public function getTicketId() {
		return $this->ticketId;
	}

	public function setTicketId($ticketId) {
		$this->ticketId = $ticketId;
		$this->queryParameters["TicketId"]=$ticketId;
	}
	
}