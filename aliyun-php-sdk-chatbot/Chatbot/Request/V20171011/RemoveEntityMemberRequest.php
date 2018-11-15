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
namespace Chatbot\Request\V20171011;

class RemoveEntityMemberRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Chatbot", "2017-10-11", "RemoveEntityMember", "beebot", "openAPI");
		$this->setMethod("POST");
	}

	private  $removeType;

	private  $member;

	private  $entityId;

	public function getRemoveType() {
		return $this->removeType;
	}

	public function setRemoveType($removeType) {
		$this->removeType = $removeType;
		$this->queryParameters["RemoveType"]=$removeType;
	}

	public function getMember() {
		return $this->member;
	}

	public function setMember($member) {
		$this->member = $member;
		}

	public function getEntityId() {
		return $this->entityId;
	}

	public function setEntityId($entityId) {
		$this->entityId = $entityId;
		$this->queryParameters["EntityId"]=$entityId;
	}
	
}