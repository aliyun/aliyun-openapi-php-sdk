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
namespace BssOpenApi\Request\V20171214;

class SubscribeDetailRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("BssOpenApi", "2017-12-14", "SubscribeDetail");
		$this->setMethod("POST");
	}

	private  $bucketOwnerId;

	private  $SubscribeTypes;

	private  $subscribeBucket;

	public function getBucketOwnerId() {
		return $this->bucketOwnerId;
	}

	public function setBucketOwnerId($bucketOwnerId) {
		$this->bucketOwnerId = $bucketOwnerId;
		$this->queryParameters["BucketOwnerId"]=$bucketOwnerId;
	}

	public function getSubscribeTypes() {
		return $this->SubscribeTypes;
	}

	public function setSubscribeTypes($SubscribeTypes) {
		$this->SubscribeTypes = $SubscribeTypes;
		for ($i = 0; $i < count($SubscribeTypes); $i ++) {	
			$this->queryParameters["SubscribeType.".($i+1)] = $SubscribeTypes[$i];
		}
	}

	public function getSubscribeBucket() {
		return $this->subscribeBucket;
	}

	public function setSubscribeBucket($subscribeBucket) {
		$this->subscribeBucket = $subscribeBucket;
		$this->queryParameters["SubscribeBucket"]=$subscribeBucket;
	}
	
}