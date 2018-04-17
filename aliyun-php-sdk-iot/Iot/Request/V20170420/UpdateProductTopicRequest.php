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
namespace Iot\Request\V20170420;

class UpdateProductTopicRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Iot", "2017-04-20", "UpdateProductTopic");
		$this->setMethod("POST");
	}

	private  $topicId;

	private  $operation;

	private  $topicShortName;

	private  $desc;

	public function getTopicId() {
		return $this->topicId;
	}

	public function setTopicId($topicId) {
		$this->topicId = $topicId;
		$this->queryParameters["TopicId"]=$topicId;
	}

	public function getOperation() {
		return $this->operation;
	}

	public function setOperation($operation) {
		$this->operation = $operation;
		$this->queryParameters["Operation"]=$operation;
	}

	public function getTopicShortName() {
		return $this->topicShortName;
	}

	public function setTopicShortName($topicShortName) {
		$this->topicShortName = $topicShortName;
		$this->queryParameters["TopicShortName"]=$topicShortName;
	}

	public function getDesc() {
		return $this->desc;
	}

	public function setDesc($desc) {
		$this->desc = $desc;
		$this->queryParameters["Desc"]=$desc;
	}
	
}