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

class ConfigureMigrationJobRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("Dts", "2016-08-01", "ConfigureMigrationJob");
		$this->setMethod("POST");
    }

    protected $sourceEndpointInstanceID;

    protected $checkpoint;

    protected $sourceEndpointEngineName;

    protected $sourceEndpointOracleSID;

    protected $destinationEndpointInstanceID;

    protected $sourceEndpointIP;

    protected $destinationEndpointPassword;

    protected $migrationObject;

    protected $migrationModeDataIntialization;

    protected $migrationJobId;

    protected $sourceEndpointInstanceType;

    protected $destinationEndpointEngineName;

    protected $migrationModeStructureIntialization;

    protected $migrationModeDataSynchronization;

    protected $destinationEndpointRegion;

    protected $sourceEndpointUserName;

    protected $sourceEndpointDatabaseName;

    protected $sourceEndpointPort;

    protected $sourceEndpointOwnerID;

    protected $destinationEndpointUserName;

    protected $destinationEndpointPort;

    protected $sourceEndpointRegion;

    protected $sourceEndpointRole;

    protected $ownerId;

    protected $destinationEndpointDataBaseName;

    protected $sourceEndpointPassword;

    protected $migrationReserved;

    protected $destinationEndpointIP;

    protected $migrationJobName;

    protected $destinationEndpointInstanceType;

    public function getSourceEndpointInstanceID() {
	    return $this->sourceEndpointInstanceID;
    }

    public function setSourceEndpointInstanceID($sourceEndpointInstanceID) {
    	$this->sourceEndpointInstanceID = $sourceEndpointInstanceID;
    	$this->queryParameters['SourceEndpoint.InstanceID'] = $sourceEndpointInstanceID;
	}

    public function getCheckpoint() {
	    return $this->checkpoint;
    }

    public function setCheckpoint($checkpoint) {
    	$this->checkpoint = $checkpoint;
    	$this->queryParameters['Checkpoint'] = $checkpoint;
	}

    public function getSourceEndpointEngineName() {
	    return $this->sourceEndpointEngineName;
    }

    public function setSourceEndpointEngineName($sourceEndpointEngineName) {
    	$this->sourceEndpointEngineName = $sourceEndpointEngineName;
    	$this->queryParameters['SourceEndpoint.EngineName'] = $sourceEndpointEngineName;
	}

    public function getSourceEndpointOracleSID() {
	    return $this->sourceEndpointOracleSID;
    }

    public function setSourceEndpointOracleSID($sourceEndpointOracleSID) {
    	$this->sourceEndpointOracleSID = $sourceEndpointOracleSID;
    	$this->queryParameters['SourceEndpoint.OracleSID'] = $sourceEndpointOracleSID;
	}

    public function getDestinationEndpointInstanceID() {
	    return $this->destinationEndpointInstanceID;
    }

    public function setDestinationEndpointInstanceID($destinationEndpointInstanceID) {
    	$this->destinationEndpointInstanceID = $destinationEndpointInstanceID;
    	$this->queryParameters['DestinationEndpoint.InstanceID'] = $destinationEndpointInstanceID;
	}

    public function getSourceEndpointIP() {
	    return $this->sourceEndpointIP;
    }

    public function setSourceEndpointIP($sourceEndpointIP) {
    	$this->sourceEndpointIP = $sourceEndpointIP;
    	$this->queryParameters['SourceEndpoint.IP'] = $sourceEndpointIP;
	}

    public function getDestinationEndpointPassword() {
	    return $this->destinationEndpointPassword;
    }

    public function setDestinationEndpointPassword($destinationEndpointPassword) {
    	$this->destinationEndpointPassword = $destinationEndpointPassword;
    	$this->queryParameters['DestinationEndpoint.Password'] = $destinationEndpointPassword;
	}

    public function getMigrationObject() {
	    return $this->migrationObject;
    }

    public function setMigrationObject($migrationObject) {
    	$this->migrationObject = $migrationObject;
    	$this->queryParameters['MigrationObject'] = $migrationObject;
	}

    public function getMigrationModeDataIntialization() {
	    return $this->migrationModeDataIntialization;
    }

    public function setMigrationModeDataIntialization($migrationModeDataIntialization) {
    	$this->migrationModeDataIntialization = $migrationModeDataIntialization;
    	$this->queryParameters['MigrationMode.DataIntialization'] = $migrationModeDataIntialization;
	}

    public function getMigrationJobId() {
	    return $this->migrationJobId;
    }

    public function setMigrationJobId($migrationJobId) {
    	$this->migrationJobId = $migrationJobId;
    	$this->queryParameters['MigrationJobId'] = $migrationJobId;
	}

    public function getSourceEndpointInstanceType() {
	    return $this->sourceEndpointInstanceType;
    }

    public function setSourceEndpointInstanceType($sourceEndpointInstanceType) {
    	$this->sourceEndpointInstanceType = $sourceEndpointInstanceType;
    	$this->queryParameters['SourceEndpoint.InstanceType'] = $sourceEndpointInstanceType;
	}

    public function getDestinationEndpointEngineName() {
	    return $this->destinationEndpointEngineName;
    }

    public function setDestinationEndpointEngineName($destinationEndpointEngineName) {
    	$this->destinationEndpointEngineName = $destinationEndpointEngineName;
    	$this->queryParameters['DestinationEndpoint.EngineName'] = $destinationEndpointEngineName;
	}

    public function getMigrationModeStructureIntialization() {
	    return $this->migrationModeStructureIntialization;
    }

    public function setMigrationModeStructureIntialization($migrationModeStructureIntialization) {
    	$this->migrationModeStructureIntialization = $migrationModeStructureIntialization;
    	$this->queryParameters['MigrationMode.StructureIntialization'] = $migrationModeStructureIntialization;
	}

    public function getMigrationModeDataSynchronization() {
	    return $this->migrationModeDataSynchronization;
    }

    public function setMigrationModeDataSynchronization($migrationModeDataSynchronization) {
    	$this->migrationModeDataSynchronization = $migrationModeDataSynchronization;
    	$this->queryParameters['MigrationMode.DataSynchronization'] = $migrationModeDataSynchronization;
	}

    public function getDestinationEndpointRegion() {
	    return $this->destinationEndpointRegion;
    }

    public function setDestinationEndpointRegion($destinationEndpointRegion) {
    	$this->destinationEndpointRegion = $destinationEndpointRegion;
    	$this->queryParameters['DestinationEndpoint.Region'] = $destinationEndpointRegion;
	}

    public function getSourceEndpointUserName() {
	    return $this->sourceEndpointUserName;
    }

    public function setSourceEndpointUserName($sourceEndpointUserName) {
    	$this->sourceEndpointUserName = $sourceEndpointUserName;
    	$this->queryParameters['SourceEndpoint.UserName'] = $sourceEndpointUserName;
	}

    public function getSourceEndpointDatabaseName() {
	    return $this->sourceEndpointDatabaseName;
    }

    public function setSourceEndpointDatabaseName($sourceEndpointDatabaseName) {
    	$this->sourceEndpointDatabaseName = $sourceEndpointDatabaseName;
    	$this->queryParameters['SourceEndpoint.DatabaseName'] = $sourceEndpointDatabaseName;
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

    public function getSourceEndpointRegion() {
	    return $this->sourceEndpointRegion;
    }

    public function setSourceEndpointRegion($sourceEndpointRegion) {
    	$this->sourceEndpointRegion = $sourceEndpointRegion;
    	$this->queryParameters['SourceEndpoint.Region'] = $sourceEndpointRegion;
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

    public function getDestinationEndpointDataBaseName() {
	    return $this->destinationEndpointDataBaseName;
    }

    public function setDestinationEndpointDataBaseName($destinationEndpointDataBaseName) {
    	$this->destinationEndpointDataBaseName = $destinationEndpointDataBaseName;
    	$this->queryParameters['DestinationEndpoint.DataBaseName'] = $destinationEndpointDataBaseName;
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

    public function getMigrationJobName() {
	    return $this->migrationJobName;
    }

    public function setMigrationJobName($migrationJobName) {
    	$this->migrationJobName = $migrationJobName;
    	$this->queryParameters['MigrationJobName'] = $migrationJobName;
	}

    public function getDestinationEndpointInstanceType() {
	    return $this->destinationEndpointInstanceType;
    }

    public function setDestinationEndpointInstanceType($destinationEndpointInstanceType) {
    	$this->destinationEndpointInstanceType = $destinationEndpointInstanceType;
    	$this->queryParameters['DestinationEndpoint.InstanceType'] = $destinationEndpointInstanceType;
	}

}
