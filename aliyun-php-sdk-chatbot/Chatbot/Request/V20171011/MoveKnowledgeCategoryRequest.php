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

class MoveKnowledgeCategoryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Chatbot", "2017-10-11", "MoveKnowledgeCategory", "beebot", "openAPI");
		$this->setMethod("POST");
	}

	private  $knowledgeId;

	private  $categoryId;

	public function getKnowledgeId() {
		return $this->knowledgeId;
	}

	public function setKnowledgeId($knowledgeId) {
		$this->knowledgeId = $knowledgeId;
		$this->queryParameters["KnowledgeId"]=$knowledgeId;
	}

	public function getCategoryId() {
		return $this->categoryId;
	}

	public function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
		$this->queryParameters["CategoryId"]=$categoryId;
	}
	
}