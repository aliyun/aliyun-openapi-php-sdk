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
namespace Cms\Request\V20180308;

class PutEventRuleRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "PutEventRule", "cms", "openAPI");
	}

	private  $EventPatterns;

	private  $groupId;

	private  $name;

	private  $description;

	private  $eventType;

	private  $state;

	public function getEventPatterns() {
		return $this->EventPatterns;
	}

	public function setEventPatterns($EventPatterns) {
		$this->EventPatterns = $EventPatterns;
		for ($i = 0; $i < count($EventPatterns); $i ++) {	
			$this->queryParameters['EventPattern.' . ($i + 1) . '.Product'] = $EventPatterns[$i]['Product'];
			for ($j = 0; $j < count($EventPatterns[$i]['NameLists']); $j ++) {
				$this->queryParameters['EventPattern.' . ($i + 1) . '.NameList.' . ($j + 1)] = $EventPatterns[$i]['NameLists'][$j];
			}
			for ($j = 0; $j < count($EventPatterns[$i]['StatusLists']); $j ++) {
				$this->queryParameters['EventPattern.' . ($i + 1) . '.StatusList.' . ($j + 1)] = $EventPatterns[$i]['StatusLists'][$j];
			}
			for ($j = 0; $j < count($EventPatterns[$i]['LevelLists']); $j ++) {
				$this->queryParameters['EventPattern.' . ($i + 1) . '.LevelList.' . ($j + 1)] = $EventPatterns[$i]['LevelLists'][$j];
			}

		}
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getEventType() {
		return $this->eventType;
	}

	public function setEventType($eventType) {
		$this->eventType = $eventType;
		$this->queryParameters["EventType"]=$eventType;
	}

	public function getState() {
		return $this->state;
	}

	public function setState($state) {
		$this->state = $state;
		$this->queryParameters["State"]=$state;
	}
	
}