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

class IndexImageRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("imm", "2017-09-06", "IndexImage", "imm", "openAPI");
		$this->setMethod("POST");
    }

    protected $imageUri;

    protected $sourceUri;

    protected $sourcePosition;

    protected $remarksB;

    protected $project;

    protected $setId;

    protected $remarksA;

    protected $sourceType;

    public function getImageUri() {
	    return $this->imageUri;
    }

    public function setImageUri($imageUri) {
    	$this->imageUri = $imageUri;
    	$this->queryParameters['ImageUri'] = $imageUri;
	}

    public function getSourceUri() {
	    return $this->sourceUri;
    }

    public function setSourceUri($sourceUri) {
    	$this->sourceUri = $sourceUri;
    	$this->queryParameters['SourceUri'] = $sourceUri;
	}

    public function getSourcePosition() {
	    return $this->sourcePosition;
    }

    public function setSourcePosition($sourcePosition) {
    	$this->sourcePosition = $sourcePosition;
    	$this->queryParameters['SourcePosition'] = $sourcePosition;
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

    public function getSetId() {
	    return $this->setId;
    }

    public function setSetId($setId) {
    	$this->setId = $setId;
    	$this->queryParameters['SetId'] = $setId;
	}

    public function getRemarksA() {
	    return $this->remarksA;
    }

    public function setRemarksA($remarksA) {
    	$this->remarksA = $remarksA;
    	$this->queryParameters['RemarksA'] = $remarksA;
	}

    public function getSourceType() {
	    return $this->sourceType;
    }

    public function setSourceType($sourceType) {
    	$this->sourceType = $sourceType;
    	$this->queryParameters['SourceType'] = $sourceType;
	}

}
