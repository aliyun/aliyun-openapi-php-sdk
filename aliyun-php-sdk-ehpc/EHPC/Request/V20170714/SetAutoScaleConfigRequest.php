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
namespace EHPC\Request\V20170714;

class SetAutoScaleConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2017-07-14", "SetAutoScaleConfig", "ehs", "openAPI");
	}

	private  $shrinkIdleTimes;

	private  $growTimeoutInMinutes;

	private  $clusterId;

	private  $enableAutoGrow;

	private  $enableAutoShrink;

	private  $maxNodesInCluster;

	private  $excludeNodes;

	private  $shrinkIntervalInMinutes;

	private  $extraNodesGrowRatio;

	private  $growIntervalInMinutes;

	private  $growRatio;

	public function getShrinkIdleTimes() {
		return $this->shrinkIdleTimes;
	}

	public function setShrinkIdleTimes($shrinkIdleTimes) {
		$this->shrinkIdleTimes = $shrinkIdleTimes;
		$this->queryParameters["ShrinkIdleTimes"]=$shrinkIdleTimes;
	}

	public function getGrowTimeoutInMinutes() {
		return $this->growTimeoutInMinutes;
	}

	public function setGrowTimeoutInMinutes($growTimeoutInMinutes) {
		$this->growTimeoutInMinutes = $growTimeoutInMinutes;
		$this->queryParameters["GrowTimeoutInMinutes"]=$growTimeoutInMinutes;
	}

	public function getClusterId() {
		return $this->clusterId;
	}

	public function setClusterId($clusterId) {
		$this->clusterId = $clusterId;
		$this->queryParameters["ClusterId"]=$clusterId;
	}

	public function getEnableAutoGrow() {
		return $this->enableAutoGrow;
	}

	public function setEnableAutoGrow($enableAutoGrow) {
		$this->enableAutoGrow = $enableAutoGrow;
		$this->queryParameters["EnableAutoGrow"]=$enableAutoGrow;
	}

	public function getEnableAutoShrink() {
		return $this->enableAutoShrink;
	}

	public function setEnableAutoShrink($enableAutoShrink) {
		$this->enableAutoShrink = $enableAutoShrink;
		$this->queryParameters["EnableAutoShrink"]=$enableAutoShrink;
	}

	public function getMaxNodesInCluster() {
		return $this->maxNodesInCluster;
	}

	public function setMaxNodesInCluster($maxNodesInCluster) {
		$this->maxNodesInCluster = $maxNodesInCluster;
		$this->queryParameters["MaxNodesInCluster"]=$maxNodesInCluster;
	}

	public function getExcludeNodes() {
		return $this->excludeNodes;
	}

	public function setExcludeNodes($excludeNodes) {
		$this->excludeNodes = $excludeNodes;
		$this->queryParameters["ExcludeNodes"]=$excludeNodes;
	}

	public function getShrinkIntervalInMinutes() {
		return $this->shrinkIntervalInMinutes;
	}

	public function setShrinkIntervalInMinutes($shrinkIntervalInMinutes) {
		$this->shrinkIntervalInMinutes = $shrinkIntervalInMinutes;
		$this->queryParameters["ShrinkIntervalInMinutes"]=$shrinkIntervalInMinutes;
	}

	public function getExtraNodesGrowRatio() {
		return $this->extraNodesGrowRatio;
	}

	public function setExtraNodesGrowRatio($extraNodesGrowRatio) {
		$this->extraNodesGrowRatio = $extraNodesGrowRatio;
		$this->queryParameters["ExtraNodesGrowRatio"]=$extraNodesGrowRatio;
	}

	public function getGrowIntervalInMinutes() {
		return $this->growIntervalInMinutes;
	}

	public function setGrowIntervalInMinutes($growIntervalInMinutes) {
		$this->growIntervalInMinutes = $growIntervalInMinutes;
		$this->queryParameters["GrowIntervalInMinutes"]=$growIntervalInMinutes;
	}

	public function getGrowRatio() {
		return $this->growRatio;
	}

	public function setGrowRatio($growRatio) {
		$this->growRatio = $growRatio;
		$this->queryParameters["GrowRatio"]=$growRatio;
	}
	
}