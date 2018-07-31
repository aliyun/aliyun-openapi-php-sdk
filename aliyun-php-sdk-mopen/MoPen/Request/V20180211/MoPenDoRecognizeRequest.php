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
namespace MoPen\Request\V20180211;

class MoPenDoRecognizeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("MoPen", "2018-02-11", "MoPenDoRecognize");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $canvasId;

	private  $endY;

	private  $endX;

	private  $jsonConf;

	private  $exportType;

	private  $startY;

	private  $startX;

	public function getCanvasId() {
		return $this->canvasId;
	}

	public function setCanvasId($canvasId) {
		$this->canvasId = $canvasId;
		}

	public function getEndY() {
		return $this->endY;
	}

	public function setEndY($endY) {
		$this->endY = $endY;
		}

	public function getEndX() {
		return $this->endX;
	}

	public function setEndX($endX) {
		$this->endX = $endX;
		}

	public function getJsonConf() {
		return $this->jsonConf;
	}

	public function setJsonConf($jsonConf) {
		$this->jsonConf = $jsonConf;
		}

	public function getExportType() {
		return $this->exportType;
	}

	public function setExportType($exportType) {
		$this->exportType = $exportType;
		}

	public function getStartY() {
		return $this->startY;
	}

	public function setStartY($startY) {
		$this->startY = $startY;
		}

	public function getStartX() {
		return $this->startX;
	}

	public function setStartX($startX) {
		$this->startX = $startX;
		}
	
}