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
namespace dms_enterprise\Request\V20181101;

class RegisterInstanceRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("dms-enterprise", "2018-11-01", "RegisterInstance", "dmsenterprise", "openAPI");
		$this->setMethod("POST");
    }

    protected $ecsInstanceId;

    protected $ecsRegion;

    protected $exportTimeout;

    protected $databasePassword;

    protected $instanceAlias;

    protected $networkType;

    protected $tid;

    protected $sid;

    protected $databaseUser;

    protected $port;

    protected $vpcId;

    protected $instanceSource;

    protected $envType;

    protected $host;

    protected $instanceType;

    protected $queryTimeout;

    protected $dbaUid;

    protected $safeRule;

    public function getEcsInstanceId() {
	    return $this->ecsInstanceId;
    }

    public function setEcsInstanceId($ecsInstanceId) {
    	$this->ecsInstanceId = $ecsInstanceId;
    	$this->queryParameters['EcsInstanceId'] = $ecsInstanceId;
	}

    public function getEcsRegion() {
	    return $this->ecsRegion;
    }

    public function setEcsRegion($ecsRegion) {
    	$this->ecsRegion = $ecsRegion;
    	$this->queryParameters['EcsRegion'] = $ecsRegion;
	}

    public function getExportTimeout() {
	    return $this->exportTimeout;
    }

    public function setExportTimeout($exportTimeout) {
    	$this->exportTimeout = $exportTimeout;
    	$this->queryParameters['ExportTimeout'] = $exportTimeout;
	}

    public function getDatabasePassword() {
	    return $this->databasePassword;
    }

    public function setDatabasePassword($databasePassword) {
    	$this->databasePassword = $databasePassword;
    	$this->queryParameters['DatabasePassword'] = $databasePassword;
	}

    public function getInstanceAlias() {
	    return $this->instanceAlias;
    }

    public function setInstanceAlias($instanceAlias) {
    	$this->instanceAlias = $instanceAlias;
    	$this->queryParameters['InstanceAlias'] = $instanceAlias;
	}

    public function getNetworkType() {
	    return $this->networkType;
    }

    public function setNetworkType($networkType) {
    	$this->networkType = $networkType;
    	$this->queryParameters['NetworkType'] = $networkType;
	}

    public function getTid() {
	    return $this->tid;
    }

    public function setTid($tid) {
    	$this->tid = $tid;
    	$this->queryParameters['Tid'] = $tid;
	}

    public function getSid() {
	    return $this->sid;
    }

    public function setSid($sid) {
    	$this->sid = $sid;
    	$this->queryParameters['Sid'] = $sid;
	}

    public function getDatabaseUser() {
	    return $this->databaseUser;
    }

    public function setDatabaseUser($databaseUser) {
    	$this->databaseUser = $databaseUser;
    	$this->queryParameters['DatabaseUser'] = $databaseUser;
	}

    public function getPort() {
	    return $this->port;
    }

    public function setPort($port) {
    	$this->port = $port;
    	$this->queryParameters['Port'] = $port;
	}

    public function getVpcId() {
	    return $this->vpcId;
    }

    public function setVpcId($vpcId) {
    	$this->vpcId = $vpcId;
    	$this->queryParameters['VpcId'] = $vpcId;
	}

    public function getInstanceSource() {
	    return $this->instanceSource;
    }

    public function setInstanceSource($instanceSource) {
    	$this->instanceSource = $instanceSource;
    	$this->queryParameters['InstanceSource'] = $instanceSource;
	}

    public function getEnvType() {
	    return $this->envType;
    }

    public function setEnvType($envType) {
    	$this->envType = $envType;
    	$this->queryParameters['EnvType'] = $envType;
	}

    public function getHost() {
	    return $this->host;
    }

    public function setHost($host) {
    	$this->host = $host;
    	$this->queryParameters['Host'] = $host;
	}

    public function getInstanceType() {
	    return $this->instanceType;
    }

    public function setInstanceType($instanceType) {
    	$this->instanceType = $instanceType;
    	$this->queryParameters['InstanceType'] = $instanceType;
	}

    public function getQueryTimeout() {
	    return $this->queryTimeout;
    }

    public function setQueryTimeout($queryTimeout) {
    	$this->queryTimeout = $queryTimeout;
    	$this->queryParameters['QueryTimeout'] = $queryTimeout;
	}

    public function getDbaUid() {
	    return $this->dbaUid;
    }

    public function setDbaUid($dbaUid) {
    	$this->dbaUid = $dbaUid;
    	$this->queryParameters['DbaUid'] = $dbaUid;
	}

    public function getSafeRule() {
	    return $this->safeRule;
    }

    public function setSafeRule($safeRule) {
    	$this->safeRule = $safeRule;
    	$this->queryParameters['SafeRule'] = $safeRule;
	}

}
