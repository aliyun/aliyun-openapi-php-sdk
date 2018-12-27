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

class DescribeMigrationJobDetailRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("Dts", "2016-08-01", "DescribeMigrationJobDetail");
		$this->setMethod("POST");
    }

    protected $migrationModeDataSynchronization;

    protected $clientToken;

    protected $migrationModeDataInitialization;

    protected $pageSize;

    protected $migrationJobId;

    protected $pageNum;

    protected $ownerId;

    protected $migrationModeStructureInitialization;

    public function getMigrationModeDataSynchronization() {
	    return $this->migrationModeDataSynchronization;
    }

    public function setMigrationModeDataSynchronization($migrationModeDataSynchronization) {
    	$this->migrationModeDataSynchronization = $migrationModeDataSynchronization;
    	$this->queryParameters['MigrationMode.DataSynchronization'] = $migrationModeDataSynchronization;
	}

    public function getClientToken() {
	    return $this->clientToken;
    }

    public function setClientToken($clientToken) {
    	$this->clientToken = $clientToken;
    	$this->queryParameters['ClientToken'] = $clientToken;
	}

    public function getMigrationModeDataInitialization() {
	    return $this->migrationModeDataInitialization;
    }

    public function setMigrationModeDataInitialization($migrationModeDataInitialization) {
    	$this->migrationModeDataInitialization = $migrationModeDataInitialization;
    	$this->queryParameters['MigrationMode.DataInitialization'] = $migrationModeDataInitialization;
	}

    public function getPageSize() {
	    return $this->pageSize;
    }

    public function setPageSize($pageSize) {
    	$this->pageSize = $pageSize;
    	$this->queryParameters['PageSize'] = $pageSize;
	}

    public function getMigrationJobId() {
	    return $this->migrationJobId;
    }

    public function setMigrationJobId($migrationJobId) {
    	$this->migrationJobId = $migrationJobId;
    	$this->queryParameters['MigrationJobId'] = $migrationJobId;
	}

    public function getPageNum() {
	    return $this->pageNum;
    }

    public function setPageNum($pageNum) {
    	$this->pageNum = $pageNum;
    	$this->queryParameters['PageNum'] = $pageNum;
	}

    public function getOwnerId() {
	    return $this->ownerId;
    }

    public function setOwnerId($ownerId) {
    	$this->ownerId = $ownerId;
    	$this->queryParameters['OwnerId'] = $ownerId;
	}

    public function getMigrationModeStructureInitialization() {
	    return $this->migrationModeStructureInitialization;
    }

    public function setMigrationModeStructureInitialization($migrationModeStructureInitialization) {
    	$this->migrationModeStructureInitialization = $migrationModeStructureInitialization;
    	$this->queryParameters['MigrationMode.StructureInitialization'] = $migrationModeStructureInitialization;
	}

}
