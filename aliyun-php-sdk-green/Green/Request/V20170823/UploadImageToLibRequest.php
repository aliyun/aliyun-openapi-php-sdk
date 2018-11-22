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
namespace Green\Request\V20170823;

class UploadImageToLibRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Green", "2017-08-23", "UploadImageToLib", "green", "openAPI");
		$this->setMethod("POST");
	}

	private  $images;

	private  $sourceIp;

	private  $imageLibId;

	public function getImages() {
		return $this->images;
	}

	public function setImages($images) {
		$this->images = $images;
		$this->queryParameters["Images"]=$images;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getImageLibId() {
		return $this->imageLibId;
	}

	public function setImageLibId($imageLibId) {
		$this->imageLibId = $imageLibId;
		$this->queryParameters["ImageLibId"]=$imageLibId;
	}
	
}