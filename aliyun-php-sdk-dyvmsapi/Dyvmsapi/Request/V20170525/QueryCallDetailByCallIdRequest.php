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
namespace Dyvmsapi\Request\V20170525;

class QueryCallDetailByCallIdRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dyvmsapi", "2017-05-25", "QueryCallDetailByCallId");
		$this->setMethod("POST");
	}

	private  $callId;

	private  $resourceOwnerId;

	private  $queryDate;

	private  $resourceOwnerAccount;

	private  $prodId;

	private  $ownerId;

	public function getCallId() {
		return $this->callId;
	}

	public function setCallId($callId) {
		$this->callId = $callId;
		$this->queryParameters["CallId"]=$callId;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getQueryDate() {
		return $this->queryDate;
	}

	public function setQueryDate($queryDate) {
		$this->queryDate = $queryDate;
		$this->queryParameters["QueryDate"]=$queryDate;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getProdId() {
		return $this->prodId;
	}

	public function setProdId($prodId) {
		$this->prodId = $prodId;
		$this->queryParameters["ProdId"]=$prodId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}