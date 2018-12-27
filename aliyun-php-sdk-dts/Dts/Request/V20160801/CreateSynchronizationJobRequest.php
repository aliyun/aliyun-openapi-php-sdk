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
namespace Dts\Request\V20160801;

class CreateSynchronizationJobRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("Dts", "2016-08-01", "CreateSynchronizationJob");
		$this->setMethod("POST");
    }

    protected $period;

    protected $destRegion;

    protected $clientToken;

    protected $synchronizationJobClass;

    protected $networkType;

    protected $ownerId;

    protected $sourceRegion;

    protected $payType;

    protected $usedTime;

    protected $sourceEndpointInstanceType;

    protected $destinationEndpointInstanceType;

    public function getPeriod() {
	    return $this->period;
    }

    public function setPeriod($period) {
    	$this->period = $period;
    	$this->queryParameters['Period'] = $period;
	}

    public function getDestRegion() {
	    return $this->destRegion;
    }

    public function setDestRegion($destRegion) {
    	$this->destRegion = $destRegion;
    	$this->queryParameters['DestRegion'] = $destRegion;
	}

    public function getClientToken() {
	    return $this->clientToken;
    }

    public function setClientToken($clientToken) {
    	$this->clientToken = $clientToken;
    	$this->queryParameters['ClientToken'] = $clientToken;
	}

    public function getSynchronizationJobClass() {
	    return $this->synchronizationJobClass;
    }

    public function setSynchronizationJobClass($synchronizationJobClass) {
    	$this->synchronizationJobClass = $synchronizationJobClass;
    	$this->queryParameters['SynchronizationJobClass'] = $synchronizationJobClass;
	}

    public function getnetworkType() {
	    return $this->networkType;
    }

    public function setnetworkType($networkType) {
    	$this->networkType = $networkType;
    	$this->queryParameters['networkType'] = $networkType;
	}

    public function getOwnerId() {
	    return $this->ownerId;
    }

    public function setOwnerId($ownerId) {
    	$this->ownerId = $ownerId;
    	$this->queryParameters['OwnerId'] = $ownerId;
	}

    public function getSourceRegion() {
	    return $this->sourceRegion;
    }

    public function setSourceRegion($sourceRegion) {
    	$this->sourceRegion = $sourceRegion;
    	$this->queryParameters['SourceRegion'] = $sourceRegion;
	}

    public function getPayType() {
	    return $this->payType;
    }

    public function setPayType($payType) {
    	$this->payType = $payType;
    	$this->queryParameters['PayType'] = $payType;
	}

    public function getUsedTime() {
	    return $this->usedTime;
    }

    public function setUsedTime($usedTime) {
    	$this->usedTime = $usedTime;
    	$this->queryParameters['UsedTime'] = $usedTime;
	}

    public function getSourceEndpointInstanceType() {
	    return $this->sourceEndpointInstanceType;
    }

    public function setSourceEndpointInstanceType($sourceEndpointInstanceType) {
    	$this->sourceEndpointInstanceType = $sourceEndpointInstanceType;
    	$this->queryParameters['SourceEndpoint.InstanceType'] = $sourceEndpointInstanceType;
	}

    public function getDestinationEndpointInstanceType() {
	    return $this->destinationEndpointInstanceType;
    }

    public function setDestinationEndpointInstanceType($destinationEndpointInstanceType) {
    	$this->destinationEndpointInstanceType = $destinationEndpointInstanceType;
    	$this->queryParameters['DestinationEndpoint.InstanceType'] = $destinationEndpointInstanceType;
	}

}
