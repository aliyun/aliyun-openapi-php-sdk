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
namespace lubancloud\Request\V20180509;

class SubmitGenerateTaskRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("lubancloud", "2018-05-09", "SubmitGenerateTask", "luban", "openAPI");
		$this->setMethod("POST");
	}

	private  $imageCount;

	private  $actionPoint;

	private  $logoImagePath;

	private  $type;

	private  $MajorImagePaths;

	private  $width;

	private  $CopyWrites;

	private  $PropertyIds;

	private  $height;

	public function getImageCount() {
		return $this->imageCount;
	}

	public function setImageCount($imageCount) {
		$this->imageCount = $imageCount;
		$this->queryParameters["ImageCount"]=$imageCount;
	}

	public function getActionPoint() {
		return $this->actionPoint;
	}

	public function setActionPoint($actionPoint) {
		$this->actionPoint = $actionPoint;
		$this->queryParameters["ActionPoint"]=$actionPoint;
	}

	public function getLogoImagePath() {
		return $this->logoImagePath;
	}

	public function setLogoImagePath($logoImagePath) {
		$this->logoImagePath = $logoImagePath;
		$this->queryParameters["LogoImagePath"]=$logoImagePath;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getMajorImagePaths() {
		return $this->MajorImagePaths;
	}

	public function setMajorImagePaths($MajorImagePaths) {
		$this->MajorImagePaths = $MajorImagePaths;
		for ($i = 0; $i < count($MajorImagePaths); $i ++) {	
			$this->queryParameters["MajorImagePath.".($i+1)] = $MajorImagePaths[$i];
		}
	}

	public function getWidth() {
		return $this->width;
	}

	public function setWidth($width) {
		$this->width = $width;
		$this->queryParameters["Width"]=$width;
	}

	public function getCopyWrites() {
		return $this->CopyWrites;
	}

	public function setCopyWrites($CopyWrites) {
		$this->CopyWrites = $CopyWrites;
		for ($i = 0; $i < count($CopyWrites); $i ++) {	
			$this->queryParameters["CopyWrite.".($i+1)] = $CopyWrites[$i];
		}
	}

	public function getPropertyIds() {
		return $this->PropertyIds;
	}

	public function setPropertyIds($PropertyIds) {
		$this->PropertyIds = $PropertyIds;
		for ($i = 0; $i < count($PropertyIds); $i ++) {	
			$this->queryParameters["PropertyId.".($i+1)] = $PropertyIds[$i];
		}
	}

	public function getHeight() {
		return $this->height;
	}

	public function setHeight($height) {
		$this->height = $height;
		$this->queryParameters["Height"]=$height;
	}
	
}