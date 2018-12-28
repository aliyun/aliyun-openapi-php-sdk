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

class SearchImagesRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("imm", "2017-09-06", "SearchImages", "imm", "openAPI");
		$this->setMethod("POST");
    }

    protected $gender;

    protected $remarksAPrefix;

    protected $project;

    protected $orderBy;

    protected $imageSizeRange;

    protected $remarksBPrefix;

    protected $tagNames;

    protected $sourceUriPrefix;

    protected $locationBoundary;

    protected $emotion;

    protected $imageTimeRange;

    protected $marker;

    protected $oCRContentsMatch;

    protected $createTimeRange;

    protected $setId;

    protected $sourceType;

    protected $updateTimeRange;

    protected $ageRange;

    protected $order;

    public function getGender() {
	    return $this->gender;
    }

    public function setGender($gender) {
    	$this->gender = $gender;
    	$this->queryParameters['Gender'] = $gender;
	}

    public function getRemarksAPrefix() {
	    return $this->remarksAPrefix;
    }

    public function setRemarksAPrefix($remarksAPrefix) {
    	$this->remarksAPrefix = $remarksAPrefix;
    	$this->queryParameters['RemarksAPrefix'] = $remarksAPrefix;
	}

    public function getProject() {
	    return $this->project;
    }

    public function setProject($project) {
    	$this->project = $project;
    	$this->queryParameters['Project'] = $project;
	}

    public function getOrderBy() {
	    return $this->orderBy;
    }

    public function setOrderBy($orderBy) {
    	$this->orderBy = $orderBy;
    	$this->queryParameters['OrderBy'] = $orderBy;
	}

    public function getImageSizeRange() {
	    return $this->imageSizeRange;
    }

    public function setImageSizeRange($imageSizeRange) {
    	$this->imageSizeRange = $imageSizeRange;
    	$this->queryParameters['ImageSizeRange'] = $imageSizeRange;
	}

    public function getRemarksBPrefix() {
	    return $this->remarksBPrefix;
    }

    public function setRemarksBPrefix($remarksBPrefix) {
    	$this->remarksBPrefix = $remarksBPrefix;
    	$this->queryParameters['RemarksBPrefix'] = $remarksBPrefix;
	}

    public function getTagNames() {
	    return $this->tagNames;
    }

    public function setTagNames($tagNames) {
    	$this->tagNames = $tagNames;
    	$this->queryParameters['TagNames'] = $tagNames;
	}

    public function getSourceUriPrefix() {
	    return $this->sourceUriPrefix;
    }

    public function setSourceUriPrefix($sourceUriPrefix) {
    	$this->sourceUriPrefix = $sourceUriPrefix;
    	$this->queryParameters['SourceUriPrefix'] = $sourceUriPrefix;
	}

    public function getLocationBoundary() {
	    return $this->locationBoundary;
    }

    public function setLocationBoundary($locationBoundary) {
    	$this->locationBoundary = $locationBoundary;
    	$this->queryParameters['LocationBoundary'] = $locationBoundary;
	}

    public function getEmotion() {
	    return $this->emotion;
    }

    public function setEmotion($emotion) {
    	$this->emotion = $emotion;
    	$this->queryParameters['Emotion'] = $emotion;
	}

    public function getImageTimeRange() {
	    return $this->imageTimeRange;
    }

    public function setImageTimeRange($imageTimeRange) {
    	$this->imageTimeRange = $imageTimeRange;
    	$this->queryParameters['ImageTimeRange'] = $imageTimeRange;
	}

    public function getMarker() {
	    return $this->marker;
    }

    public function setMarker($marker) {
    	$this->marker = $marker;
    	$this->queryParameters['Marker'] = $marker;
	}

    public function getOCRContentsMatch() {
	    return $this->oCRContentsMatch;
    }

    public function setOCRContentsMatch($oCRContentsMatch) {
    	$this->oCRContentsMatch = $oCRContentsMatch;
    	$this->queryParameters['OCRContentsMatch'] = $oCRContentsMatch;
	}

    public function getCreateTimeRange() {
	    return $this->createTimeRange;
    }

    public function setCreateTimeRange($createTimeRange) {
    	$this->createTimeRange = $createTimeRange;
    	$this->queryParameters['CreateTimeRange'] = $createTimeRange;
	}

    public function getSetId() {
	    return $this->setId;
    }

    public function setSetId($setId) {
    	$this->setId = $setId;
    	$this->queryParameters['SetId'] = $setId;
	}

    public function getSourceType() {
	    return $this->sourceType;
    }

    public function setSourceType($sourceType) {
    	$this->sourceType = $sourceType;
    	$this->queryParameters['SourceType'] = $sourceType;
	}

    public function getUpdateTimeRange() {
	    return $this->updateTimeRange;
    }

    public function setUpdateTimeRange($updateTimeRange) {
    	$this->updateTimeRange = $updateTimeRange;
    	$this->queryParameters['UpdateTimeRange'] = $updateTimeRange;
	}

    public function getAgeRange() {
	    return $this->ageRange;
    }

    public function setAgeRange($ageRange) {
    	$this->ageRange = $ageRange;
    	$this->queryParameters['AgeRange'] = $ageRange;
	}

    public function getOrder() {
	    return $this->order;
    }

    public function setOrder($order) {
    	$this->order = $order;
    	$this->queryParameters['Order'] = $order;
	}

}
