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

class ConfigureSynchronizationJobRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("Dts", "2016-08-01", "ConfigureSynchronizationJob");
		$this->setMethod("POST");
    }

    protected $sourceEndpointInstanceId;

    protected $checkpoint;

    protected $destinationEndpointInstanceId;

    protected $sourceEndpointIP;

    protected $synchronizationObjects;

    protected $destinationEndpointPassword;

    protected $dataInitialization;

    protected $structureInitialization;

    protected $partitionKeyModifyTime_Minute;

    protected $partitionKeyModifyTime_Day;

    protected $sourceEndpointInstanceType;

    protected $synchronizationJobId;

    protected $synchronizationJobName;

    protected $sourceEndpointUserName;

    protected $partitionKeyModifyTime_Month;

    protected $sourceEndpointPort;

    protected $sourceEndpointOwnerID;

    protected $destinationEndpointUserName;

    protected $destinationEndpointPort;

    protected $partitionKeyModifyTime_Year;

    protected $sourceEndpointRole;

    protected $ownerId;

    protected $partitionKeyModifyTime_Hour;

    protected $sourceEndpointPassword;

    protected $migrationReserved;

    protected $destinationEndpointIP;

    protected $destinationEndpointInstanceType;

    public function getSourceEndpointInstanceId() {
	    return $this->sourceEndpointInstanceId;
    }

    public function setSourceEndpointInstanceId($sourceEndpointInstanceId) {
    	$this->sourceEndpointInstanceId = $sourceEndpointInstanceId;
    	$this->queryParameters['SourceEndpoint.InstanceId'] = $sourceEndpointInstanceId;
	}

    public function getCheckpoint() {
	    return $this->checkpoint;
    }

    public function setCheckpoint($checkpoint) {
    	$this->checkpoint = $checkpoint;
    	$this->queryParameters['Checkpoint'] = $checkpoint;
	}

    public function getDestinationEndpointInstanceId() {
	    return $this->destinationEndpointInstanceId;
    }

    public function setDestinationEndpointInstanceId($destinationEndpointInstanceId) {
    	$this->destinationEndpointInstanceId = $destinationEndpointInstanceId;
    	$this->queryParameters['DestinationEndpoint.InstanceId'] = $destinationEndpointInstanceId;
	}

    public function getSourceEndpointIP() {
	    return $this->sourceEndpointIP;
    }

    public function setSourceEndpointIP($sourceEndpointIP) {
    	$this->sourceEndpointIP = $sourceEndpointIP;
    	$this->queryParameters['SourceEndpoint.IP'] = $sourceEndpointIP;
	}

    public function getSynchronizationObjects() {
	    return $this->synchronizationObjects;
    }

    public function setSynchronizationObjects($synchronizationObjects) {
    	$this->synchronizationObjects = $synchronizationObjects;
    	$this->queryParameters['SynchronizationObjects'] = $synchronizationObjects;
	}

    public function getDestinationEndpointPassword() {
	    return $this->destinationEndpointPassword;
    }

    public function setDestinationEndpointPassword($destinationEndpointPassword) {
    	$this->destinationEndpointPassword = $destinationEndpointPassword;
    	$this->queryParameters['DestinationEndpoint.Password'] = $destinationEndpointPassword;
	}

    public function getDataInitialization() {
	    return $this->dataInitialization;
    }

    public function setDataInitialization($dataInitialization) {
    	$this->dataInitialization = $dataInitialization;
    	$this->queryParameters['DataInitialization'] = $dataInitialization;
	}

    public function getStructureInitialization() {
	    return $this->structureInitialization;
    }

    public function setStructureInitialization($structureInitialization) {
    	$this->structureInitialization = $structureInitialization;
    	$this->queryParameters['StructureInitialization'] = $structureInitialization;
	}

    public function getPartitionKeyModifyTime_Minute() {
	    return $this->partitionKeyModifyTime_Minute;
    }

    public function setPartitionKeyModifyTime_Minute($partitionKeyModifyTime_Minute) {
    	$this->partitionKeyModifyTime_Minute = $partitionKeyModifyTime_Minute;
    	$this->queryParameters['PartitionKey.ModifyTime_Minute'] = $partitionKeyModifyTime_Minute;
	}

    public function getPartitionKeyModifyTime_Day() {
	    return $this->partitionKeyModifyTime_Day;
    }

    public function setPartitionKeyModifyTime_Day($partitionKeyModifyTime_Day) {
    	$this->partitionKeyModifyTime_Day = $partitionKeyModifyTime_Day;
    	$this->queryParameters['PartitionKey.ModifyTime_Day'] = $partitionKeyModifyTime_Day;
	}

    public function getSourceEndpointInstanceType() {
	    return $this->sourceEndpointInstanceType;
    }

    public function setSourceEndpointInstanceType($sourceEndpointInstanceType) {
    	$this->sourceEndpointInstanceType = $sourceEndpointInstanceType;
    	$this->queryParameters['SourceEndpoint.InstanceType'] = $sourceEndpointInstanceType;
	}

    public function getSynchronizationJobId() {
	    return $this->synchronizationJobId;
    }

    public function setSynchronizationJobId($synchronizationJobId) {
    	$this->synchronizationJobId = $synchronizationJobId;
    	$this->queryParameters['SynchronizationJobId'] = $synchronizationJobId;
	}

    public function getSynchronizationJobName() {
	    return $this->synchronizationJobName;
    }

    public function setSynchronizationJobName($synchronizationJobName) {
    	$this->synchronizationJobName = $synchronizationJobName;
    	$this->queryParameters['SynchronizationJobName'] = $synchronizationJobName;
	}

    public function getSourceEndpointUserName() {
	    return $this->sourceEndpointUserName;
    }

    public function setSourceEndpointUserName($sourceEndpointUserName) {
    	$this->sourceEndpointUserName = $sourceEndpointUserName;
    	$this->queryParameters['SourceEndpoint.UserName'] = $sourceEndpointUserName;
	}

    public function getPartitionKeyModifyTime_Month() {
	    return $this->partitionKeyModifyTime_Month;
    }

    public function setPartitionKeyModifyTime_Month($partitionKeyModifyTime_Month) {
    	$this->partitionKeyModifyTime_Month = $partitionKeyModifyTime_Month;
    	$this->queryParameters['PartitionKey.ModifyTime_Month'] = $partitionKeyModifyTime_Month;
	}

    public function getSourceEndpointPort() {
	    return $this->sourceEndpointPort;
    }

    public function setSourceEndpointPort($sourceEndpointPort) {
    	$this->sourceEndpointPort = $sourceEndpointPort;
    	$this->queryParameters['SourceEndpoint.Port'] = $sourceEndpointPort;
	}

    public function getSourceEndpointOwnerID() {
	    return $this->sourceEndpointOwnerID;
    }

    public function setSourceEndpointOwnerID($sourceEndpointOwnerID) {
    	$this->sourceEndpointOwnerID = $sourceEndpointOwnerID;
    	$this->queryParameters['SourceEndpoint.OwnerID'] = $sourceEndpointOwnerID;
	}

    public function getDestinationEndpointUserName() {
	    return $this->destinationEndpointUserName;
    }

    public function setDestinationEndpointUserName($destinationEndpointUserName) {
    	$this->destinationEndpointUserName = $destinationEndpointUserName;
    	$this->queryParameters['DestinationEndpoint.UserName'] = $destinationEndpointUserName;
	}

    public function getDestinationEndpointPort() {
	    return $this->destinationEndpointPort;
    }

    public function setDestinationEndpointPort($destinationEndpointPort) {
    	$this->destinationEndpointPort = $destinationEndpointPort;
    	$this->queryParameters['DestinationEndpoint.Port'] = $destinationEndpointPort;
	}

    public function getPartitionKeyModifyTime_Year() {
	    return $this->partitionKeyModifyTime_Year;
    }

    public function setPartitionKeyModifyTime_Year($partitionKeyModifyTime_Year) {
    	$this->partitionKeyModifyTime_Year = $partitionKeyModifyTime_Year;
    	$this->queryParameters['PartitionKey.ModifyTime_Year'] = $partitionKeyModifyTime_Year;
	}

    public function getSourceEndpointRole() {
	    return $this->sourceEndpointRole;
    }

    public function setSourceEndpointRole($sourceEndpointRole) {
    	$this->sourceEndpointRole = $sourceEndpointRole;
    	$this->queryParameters['SourceEndpoint.Role'] = $sourceEndpointRole;
	}

    public function getOwnerId() {
	    return $this->ownerId;
    }

    public function setOwnerId($ownerId) {
    	$this->ownerId = $ownerId;
    	$this->queryParameters['OwnerId'] = $ownerId;
	}

    public function getPartitionKeyModifyTime_Hour() {
	    return $this->partitionKeyModifyTime_Hour;
    }

    public function setPartitionKeyModifyTime_Hour($partitionKeyModifyTime_Hour) {
    	$this->partitionKeyModifyTime_Hour = $partitionKeyModifyTime_Hour;
    	$this->queryParameters['PartitionKey.ModifyTime_Hour'] = $partitionKeyModifyTime_Hour;
	}

    public function getSourceEndpointPassword() {
	    return $this->sourceEndpointPassword;
    }

    public function setSourceEndpointPassword($sourceEndpointPassword) {
    	$this->sourceEndpointPassword = $sourceEndpointPassword;
    	$this->queryParameters['SourceEndpoint.Password'] = $sourceEndpointPassword;
	}

    public function getMigrationReserved() {
	    return $this->migrationReserved;
    }

    public function setMigrationReserved($migrationReserved) {
    	$this->migrationReserved = $migrationReserved;
    	$this->queryParameters['MigrationReserved'] = $migrationReserved;
	}

    public function getDestinationEndpointIP() {
	    return $this->destinationEndpointIP;
    }

    public function setDestinationEndpointIP($destinationEndpointIP) {
    	$this->destinationEndpointIP = $destinationEndpointIP;
    	$this->queryParameters['DestinationEndpoint.IP'] = $destinationEndpointIP;
	}

    public function getDestinationEndpointInstanceType() {
	    return $this->destinationEndpointInstanceType;
    }

    public function setDestinationEndpointInstanceType($destinationEndpointInstanceType) {
    	$this->destinationEndpointInstanceType = $destinationEndpointInstanceType;
    	$this->queryParameters['DestinationEndpoint.InstanceType'] = $destinationEndpointInstanceType;
	}

}
