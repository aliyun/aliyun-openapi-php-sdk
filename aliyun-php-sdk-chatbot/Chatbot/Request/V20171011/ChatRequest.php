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

class ChatRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Chatbot", "2017-10-11", "Chat", "beebot", "openAPI");
		$this->setMethod("POST");
	}

	private  $knowledgeId;

	private  $senderId;

	private  $instanceId;

	private  $senderNick;

	private  $sessionId;

	private  $tag;

	private  $utterance;

	public function getKnowledgeId() {
		return $this->knowledgeId;
	}

	public function setKnowledgeId($knowledgeId) {
		$this->knowledgeId = $knowledgeId;
		$this->queryParameters["KnowledgeId"]=$knowledgeId;
	}

	public function getSenderId() {
		return $this->senderId;
	}

	public function setSenderId($senderId) {
		$this->senderId = $senderId;
		$this->queryParameters["SenderId"]=$senderId;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getSenderNick() {
		return $this->senderNick;
	}

	public function setSenderNick($senderNick) {
		$this->senderNick = $senderNick;
		$this->queryParameters["SenderNick"]=$senderNick;
	}

	public function getSessionId() {
		return $this->sessionId;
	}

	public function setSessionId($sessionId) {
		$this->sessionId = $sessionId;
		$this->queryParameters["SessionId"]=$sessionId;
	}

	public function getTag() {
		return $this->tag;
	}

	public function setTag($tag) {
		$this->tag = $tag;
		$this->queryParameters["Tag"]=$tag;
	}

	public function getUtterance() {
		return $this->utterance;
	}

	public function setUtterance($utterance) {
		$this->utterance = $utterance;
		$this->queryParameters["Utterance"]=$utterance;
	}
	
}