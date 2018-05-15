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

class CreateOfficeConversionTaskRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("imm", "2017-09-06", "CreateOfficeConversionTask", "imm", "openAPI");
		$this->setMethod("POST");
	}

	private  $imageSpec;

	private  $srcType;

	private  $notifyTopicName;

	private  $modelId;

	private  $project;

	private  $externalID;

	private  $maxSheetRow;

	private  $maxSheetCount;

	private  $endPage;

	private  $sheetOnePage;

	private  $password;

	private  $startPage;

	private  $maxSheetCol;

	private  $tgtType;

	private  $notifyEndpoint;

	private  $srcUri;

	private  $tgtUri;

	public function getImageSpec() {
		return $this->imageSpec;
	}

	public function setImageSpec($imageSpec) {
		$this->imageSpec = $imageSpec;
		$this->queryParameters["ImageSpec"]=$imageSpec;
	}

	public function getSrcType() {
		return $this->srcType;
	}

	public function setSrcType($srcType) {
		$this->srcType = $srcType;
		$this->queryParameters["SrcType"]=$srcType;
	}

	public function getNotifyTopicName() {
		return $this->notifyTopicName;
	}

	public function setNotifyTopicName($notifyTopicName) {
		$this->notifyTopicName = $notifyTopicName;
		$this->queryParameters["NotifyTopicName"]=$notifyTopicName;
	}

	public function getModelId() {
		return $this->modelId;
	}

	public function setModelId($modelId) {
		$this->modelId = $modelId;
		$this->queryParameters["ModelId"]=$modelId;
	}

	public function getProject() {
		return $this->project;
	}

	public function setProject($project) {
		$this->project = $project;
		$this->queryParameters["Project"]=$project;
	}

	public function getExternalID() {
		return $this->externalID;
	}

	public function setExternalID($externalID) {
		$this->externalID = $externalID;
		$this->queryParameters["ExternalID"]=$externalID;
	}

	public function getMaxSheetRow() {
		return $this->maxSheetRow;
	}

	public function setMaxSheetRow($maxSheetRow) {
		$this->maxSheetRow = $maxSheetRow;
		$this->queryParameters["MaxSheetRow"]=$maxSheetRow;
	}

	public function getMaxSheetCount() {
		return $this->maxSheetCount;
	}

	public function setMaxSheetCount($maxSheetCount) {
		$this->maxSheetCount = $maxSheetCount;
		$this->queryParameters["MaxSheetCount"]=$maxSheetCount;
	}

	public function getEndPage() {
		return $this->endPage;
	}

	public function setEndPage($endPage) {
		$this->endPage = $endPage;
		$this->queryParameters["EndPage"]=$endPage;
	}

	public function getSheetOnePage() {
		return $this->sheetOnePage;
	}

	public function setSheetOnePage($sheetOnePage) {
		$this->sheetOnePage = $sheetOnePage;
		$this->queryParameters["SheetOnePage"]=$sheetOnePage;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
		$this->queryParameters["Password"]=$password;
	}

	public function getStartPage() {
		return $this->startPage;
	}

	public function setStartPage($startPage) {
		$this->startPage = $startPage;
		$this->queryParameters["StartPage"]=$startPage;
	}

	public function getMaxSheetCol() {
		return $this->maxSheetCol;
	}

	public function setMaxSheetCol($maxSheetCol) {
		$this->maxSheetCol = $maxSheetCol;
		$this->queryParameters["MaxSheetCol"]=$maxSheetCol;
	}

	public function getTgtType() {
		return $this->tgtType;
	}

	public function setTgtType($tgtType) {
		$this->tgtType = $tgtType;
		$this->queryParameters["TgtType"]=$tgtType;
	}

	public function getNotifyEndpoint() {
		return $this->notifyEndpoint;
	}

	public function setNotifyEndpoint($notifyEndpoint) {
		$this->notifyEndpoint = $notifyEndpoint;
		$this->queryParameters["NotifyEndpoint"]=$notifyEndpoint;
	}

	public function getSrcUri() {
		return $this->srcUri;
	}

	public function setSrcUri($srcUri) {
		$this->srcUri = $srcUri;
		$this->queryParameters["SrcUri"]=$srcUri;
	}

	public function getTgtUri() {
		return $this->tgtUri;
	}

	public function setTgtUri($tgtUri) {
		$this->tgtUri = $tgtUri;
		$this->queryParameters["TgtUri"]=$tgtUri;
	}
	
}