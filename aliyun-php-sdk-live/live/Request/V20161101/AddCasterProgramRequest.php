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
namespace live\Request\V20161101;

class AddCasterProgramRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "AddCasterProgram", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $casterId;

	private  $Episodes;

	private  $ownerId;

	public function getCasterId() {
		return $this->casterId;
	}

	public function setCasterId($casterId) {
		$this->casterId = $casterId;
		$this->queryParameters["CasterId"]=$casterId;
	}

	public function getEpisodes() {
		return $this->Episodes;
	}

	public function setEpisodes($Episodes) {
		$this->Episodes = $Episodes;
		for ($i = 0; $i < count($Episodes); $i ++) {	
			$this->queryParameters['Episode.' . ($i + 1) . '.ResourceId'] = $Episodes[$i]['ResourceId'];
			for ($j = 0; $j < count($Episodes[$i]['ComponentIds']); $j ++) {
				$this->queryParameters['Episode.' . ($i + 1) . '.ComponentId.' . ($j + 1)] = $Episodes[$i]['ComponentIds'][$j];
			}
			$this->queryParameters['Episode.' . ($i + 1) . '.SwitchType'] = $Episodes[$i]['SwitchType'];
			$this->queryParameters['Episode.' . ($i + 1) . '.EpisodeType'] = $Episodes[$i]['EpisodeType'];
			$this->queryParameters['Episode.' . ($i + 1) . '.EpisodeName'] = $Episodes[$i]['EpisodeName'];
			$this->queryParameters['Episode.' . ($i + 1) . '.EndTime'] = $Episodes[$i]['EndTime'];
			$this->queryParameters['Episode.' . ($i + 1) . '.StartTime'] = $Episodes[$i]['StartTime'];

		}
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}