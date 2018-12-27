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
namespace Cms\Request\V20180308;

class NodeListRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("Cms", "2018-03-08", "NodeList");
		$this->setMethod("POST");
    }

    protected $hostName;

    protected $instanceIds;

    protected $instanceRegionId;

    protected $pageSize;

    protected $keyWord;

    protected $userId;

    protected $serialNumbers;

    protected $pageNumber;

    protected $status;

    public function getHostName() {
	    return $this->hostName;
    }

    public function setHostName($hostName) {
    	$this->hostName = $hostName;
    	$this->queryParameters['HostName'] = $hostName;
	}

    public function getInstanceIds() {
	    return $this->instanceIds;
    }

    public function setInstanceIds($instanceIds) {
    	$this->instanceIds = $instanceIds;
    	$this->queryParameters['InstanceIds'] = $instanceIds;
	}

    public function getInstanceRegionId() {
	    return $this->instanceRegionId;
    }

    public function setInstanceRegionId($instanceRegionId) {
    	$this->instanceRegionId = $instanceRegionId;
    	$this->queryParameters['InstanceRegionId'] = $instanceRegionId;
	}

    public function getPageSize() {
	    return $this->pageSize;
    }

    public function setPageSize($pageSize) {
    	$this->pageSize = $pageSize;
    	$this->queryParameters['PageSize'] = $pageSize;
	}

    public function getKeyWord() {
	    return $this->keyWord;
    }

    public function setKeyWord($keyWord) {
    	$this->keyWord = $keyWord;
    	$this->queryParameters['KeyWord'] = $keyWord;
	}

    public function getUserId() {
	    return $this->userId;
    }

    public function setUserId($userId) {
    	$this->userId = $userId;
    	$this->queryParameters['UserId'] = $userId;
	}

    public function getSerialNumbers() {
	    return $this->serialNumbers;
    }

    public function setSerialNumbers($serialNumbers) {
    	$this->serialNumbers = $serialNumbers;
    	$this->queryParameters['SerialNumbers'] = $serialNumbers;
	}

    public function getPageNumber() {
	    return $this->pageNumber;
    }

    public function setPageNumber($pageNumber) {
    	$this->pageNumber = $pageNumber;
    	$this->queryParameters['PageNumber'] = $pageNumber;
	}

    public function getStatus() {
	    return $this->status;
    }

    public function setStatus($status) {
    	$this->status = $status;
    	$this->queryParameters['Status'] = $status;
	}

}
