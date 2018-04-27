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

class CreatePornBatchDetectJobRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("imm", "2017-09-06", "CreatePornBatchDetectJob", "imm", "openAPI");
		$this->setMethod("POST");
	}

	private  $notifyTopicName;

	private  $notifyEndpoint;

	private  $project;

	private  $externalID;

	private  $srcUri;

	private  $tgtUri;

	public function getNotifyTopicName() {
		return $this->notifyTopicName;
	}

	public function setNotifyTopicName($notifyTopicName) {
		$this->notifyTopicName = $notifyTopicName;
		$this->queryParameters["NotifyTopicName"]=$notifyTopicName;
	}

	public function getNotifyEndpoint() {
		return $this->notifyEndpoint;
	}

	public function setNotifyEndpoint($notifyEndpoint) {
		$this->notifyEndpoint = $notifyEndpoint;
		$this->queryParameters["NotifyEndpoint"]=$notifyEndpoint;
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