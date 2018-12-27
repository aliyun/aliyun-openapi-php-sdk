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

class ConfigurationSynchronizationJobRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("Dts", "2016-08-01", "ConfigurationSynchronizationJob");
		$this->setMethod("POST");
    }

    protected $synchronizationJobId;

    protected $sourceEndpointInstanceID;

    protected $synchronizationJobName;

    protected $destinationEndpointInstanceID;

    protected $initializationStructureLoad;

    protected $initializationDataLoad;

    protected $synchronizationObject;

    protected $ownerId;

    protected $sourceEndpointInstanceType;

    protected $destinationEndpointInstanceType;

    public function getSynchronizationJobId() {
	    return $this->synchronizationJobId;
    }

    public function setSynchronizationJobId($synchronizationJobId) {
    	$this->synchronizationJobId = $synchronizationJobId;
    	$this->queryParameters['SynchronizationJobId'] = $synchronizationJobId;
	}

    public function getSourceEndpointInstanceID() {
	    return $this->sourceEndpointInstanceID;
    }

    public function setSourceEndpointInstanceID($sourceEndpointInstanceID) {
    	$this->sourceEndpointInstanceID = $sourceEndpointInstanceID;
    	$this->queryParameters['SourceEndpoint.InstanceID'] = $sourceEndpointInstanceID;
	}

    public function getSynchronizationJobName() {
	    return $this->synchronizationJobName;
    }

    public function setSynchronizationJobName($synchronizationJobName) {
    	$this->synchronizationJobName = $synchronizationJobName;
    	$this->queryParameters['SynchronizationJobName'] = $synchronizationJobName;
	}

    public function getDestinationEndpointInstanceID() {
	    return $this->destinationEndpointInstanceID;
    }

    public function setDestinationEndpointInstanceID($destinationEndpointInstanceID) {
    	$this->destinationEndpointInstanceID = $destinationEndpointInstanceID;
    	$this->queryParameters['DestinationEndpoint.InstanceID'] = $destinationEndpointInstanceID;
	}

    public function getInitializationStructureLoad() {
	    return $this->initializationStructureLoad;
    }

    public function setInitializationStructureLoad($initializationStructureLoad) {
    	$this->initializationStructureLoad = $initializationStructureLoad;
    	$this->queryParameters['Initialization.StructureLoad'] = $initializationStructureLoad;
	}

    public function getInitializationDataLoad() {
	    return $this->initializationDataLoad;
    }

    public function setInitializationDataLoad($initializationDataLoad) {
    	$this->initializationDataLoad = $initializationDataLoad;
    	$this->queryParameters['Initialization.DataLoad'] = $initializationDataLoad;
	}

    public function getSynchronizationObject() {
	    return $this->synchronizationObject;
    }

    public function setSynchronizationObject($synchronizationObject) {
    	$this->synchronizationObject = $synchronizationObject;
    	$this->queryParameters['SynchronizationObject'] = $synchronizationObject;
	}

    public function getOwnerId() {
	    return $this->ownerId;
    }

    public function setOwnerId($ownerId) {
    	$this->ownerId = $ownerId;
    	$this->queryParameters['OwnerId'] = $ownerId;
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
