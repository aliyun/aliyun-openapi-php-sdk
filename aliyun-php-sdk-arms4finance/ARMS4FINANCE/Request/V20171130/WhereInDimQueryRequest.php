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
namespace ARMS4FINANCE\Request\V20171130;

class WhereInDimQueryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("ARMS4FINANCE", "2017-11-30", "WhereInDimQuery");
		$this->setMethod("POST");
	}

	private  $whereInKey;

	private  $Measuress;

	private  $intervalInSec;

	private  $dateStr;

	private  $isDrillDown;

	private  $minTime;

	private  $datasetId;

	private  $WhereInValuess;

	private  $maxTime;

	private  $Dimensionss;

	public function getWhereInKey() {
		return $this->whereInKey;
	}

	public function setWhereInKey($whereInKey) {
		$this->whereInKey = $whereInKey;
		$this->queryParameters["WhereInKey"]=$whereInKey;
	}

	public function getMeasuress() {
		return $this->Measuress;
	}

	public function setMeasuress($Measuress) {
		$this->Measuress = $Measuress;
		for ($i = 0; $i < count($Measuress); $i ++) {	
			$this->queryParameters["Measures.".($i+1)] = $Measuress[$i];
		}
	}

	public function getIntervalInSec() {
		return $this->intervalInSec;
	}

	public function setIntervalInSec($intervalInSec) {
		$this->intervalInSec = $intervalInSec;
		$this->queryParameters["IntervalInSec"]=$intervalInSec;
	}

	public function getDateStr() {
		return $this->dateStr;
	}

	public function setDateStr($dateStr) {
		$this->dateStr = $dateStr;
		$this->queryParameters["DateStr"]=$dateStr;
	}

	public function getIsDrillDown() {
		return $this->isDrillDown;
	}

	public function setIsDrillDown($isDrillDown) {
		$this->isDrillDown = $isDrillDown;
		$this->queryParameters["IsDrillDown"]=$isDrillDown;
	}

	public function getMinTime() {
		return $this->minTime;
	}

	public function setMinTime($minTime) {
		$this->minTime = $minTime;
		$this->queryParameters["MinTime"]=$minTime;
	}

	public function getDatasetId() {
		return $this->datasetId;
	}

	public function setDatasetId($datasetId) {
		$this->datasetId = $datasetId;
		$this->queryParameters["DatasetId"]=$datasetId;
	}

	public function getWhereInValuess() {
		return $this->WhereInValuess;
	}

	public function setWhereInValuess($WhereInValuess) {
		$this->WhereInValuess = $WhereInValuess;
		for ($i = 0; $i < count($WhereInValuess); $i ++) {	
			$this->queryParameters["WhereInValues.".($i+1)] = $WhereInValuess[$i];
		}
	}

	public function getMaxTime() {
		return $this->maxTime;
	}

	public function setMaxTime($maxTime) {
		$this->maxTime = $maxTime;
		$this->queryParameters["MaxTime"]=$maxTime;
	}

	public function getDimensionss() {
		return $this->Dimensionss;
	}

	public function setDimensionss($Dimensionss) {
		$this->Dimensionss = $Dimensionss;
		for ($i = 0; $i < count($Dimensionss); $i ++) {	
			$this->queryParameters['Dimensions.' . ($i + 1) . '.Key'] = $Dimensionss[$i]['Key'];
			$this->queryParameters['Dimensions.' . ($i + 1) . '.Value'] = $Dimensionss[$i]['Value'];

		}
	}
	
}