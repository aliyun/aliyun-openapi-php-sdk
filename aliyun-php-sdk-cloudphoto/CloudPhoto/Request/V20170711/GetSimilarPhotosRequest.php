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
namespace CloudPhoto\Request\V20170711;

class GetSimilarPhotosRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CloudPhoto", "2017-07-11", "GetSimilarPhotos", "cloudphoto", "openAPI");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $libraryId;

	private  $photoId;

	private  $storeName;

	public function getLibraryId() {
		return $this->libraryId;
	}

	public function setLibraryId($libraryId) {
		$this->libraryId = $libraryId;
		$this->queryParameters["LibraryId"]=$libraryId;
	}

	public function getPhotoId() {
		return $this->photoId;
	}

	public function setPhotoId($photoId) {
		$this->photoId = $photoId;
		$this->queryParameters["PhotoId"]=$photoId;
	}

	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->queryParameters["StoreName"]=$storeName;
	}
	
}