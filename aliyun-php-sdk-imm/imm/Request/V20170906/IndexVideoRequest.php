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
namespace imm\Request\V20170906;

class IndexVideoRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("imm", "2017-09-06", "IndexVideo", "imm", "openAPI");
		$this->setMethod("POST");
    }

    protected $grabType;

    protected $remarksB;

    protected $project;

    protected $remarksA;

    protected $endTime;

    protected $startTime;

    protected $videoUri;

    protected $saveType;

    protected $setId;

    protected $interval;

    protected $tgtUri;

    public function getGrabType() {
	    return $this->grabType;
    }

    public function setGrabType($grabType) {
    	$this->grabType = $grabType;
    	$this->queryParameters['GrabType'] = $grabType;
	}

    public function getRemarksB() {
	    return $this->remarksB;
    }

    public function setRemarksB($remarksB) {
    	$this->remarksB = $remarksB;
    	$this->queryParameters['RemarksB'] = $remarksB;
	}

    public function getProject() {
	    return $this->project;
    }

    public function setProject($project) {
    	$this->project = $project;
    	$this->queryParameters['Project'] = $project;
	}

    public function getRemarksA() {
	    return $this->remarksA;
    }

    public function setRemarksA($remarksA) {
    	$this->remarksA = $remarksA;
    	$this->queryParameters['RemarksA'] = $remarksA;
	}

    public function getEndTime() {
	    return $this->endTime;
    }

    public function setEndTime($endTime) {
    	$this->endTime = $endTime;
    	$this->queryParameters['EndTime'] = $endTime;
	}

    public function getStartTime() {
	    return $this->startTime;
    }

    public function setStartTime($startTime) {
    	$this->startTime = $startTime;
    	$this->queryParameters['StartTime'] = $startTime;
	}

    public function getVideoUri() {
	    return $this->videoUri;
    }

    public function setVideoUri($videoUri) {
    	$this->videoUri = $videoUri;
    	$this->queryParameters['VideoUri'] = $videoUri;
	}

    public function getSaveType() {
	    return $this->saveType;
    }

    public function setSaveType($saveType) {
    	$this->saveType = $saveType;
    	$this->queryParameters['SaveType'] = $saveType;
	}

    public function getSetId() {
	    return $this->setId;
    }

    public function setSetId($setId) {
    	$this->setId = $setId;
    	$this->queryParameters['SetId'] = $setId;
	}

    public function getInterval() {
	    return $this->interval;
    }

    public function setInterval($interval) {
    	$this->interval = $interval;
    	$this->queryParameters['Interval'] = $interval;
	}

    public function getTgtUri() {
	    return $this->tgtUri;
    }

    public function setTgtUri($tgtUri) {
    	$this->tgtUri = $tgtUri;
    	$this->queryParameters['TgtUri'] = $tgtUri;
	}

}
