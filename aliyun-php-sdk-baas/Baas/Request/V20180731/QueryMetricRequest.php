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
namespace Baas\Request\V20180731;

class QueryMetricRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Baas", "2018-07-31", "QueryMetric");
		$this->setMethod("POST");
	}

	private  $period;

	private  $metric;

	private  $port;

	private  $bizid;

	private  $timeArea;

	private  $innerIp;

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		}

	public function getMetric() {
		return $this->metric;
	}

	public function setMetric($metric) {
		$this->metric = $metric;
		}

	public function getPort() {
		return $this->port;
	}

	public function setPort($port) {
		$this->port = $port;
		}

	public function getBizid() {
		return $this->bizid;
	}

	public function setBizid($bizid) {
		$this->bizid = $bizid;
		$this->queryParameters["Bizid"]=$bizid;
	}

	public function getTimeArea() {
		return $this->timeArea;
	}

	public function setTimeArea($timeArea) {
		$this->timeArea = $timeArea;
		}

	public function getInnerIp() {
		return $this->innerIp;
	}

	public function setInnerIp($innerIp) {
		$this->innerIp = $innerIp;
		}
	
}