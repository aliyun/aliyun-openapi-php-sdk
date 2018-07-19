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
namespace EHPC\Request\V20180412;

class AddContainerAppRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "AddContainerApp", "ehs", "openAPI");
	}

	private  $containerType;

	private  $name;

	private  $description;

	private  $repository;

	private  $imageTag;

	public function getContainerType() {
		return $this->containerType;
	}

	public function setContainerType($containerType) {
		$this->containerType = $containerType;
		$this->queryParameters["ContainerType"]=$containerType;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getRepository() {
		return $this->repository;
	}

	public function setRepository($repository) {
		$this->repository = $repository;
		$this->queryParameters["Repository"]=$repository;
	}

	public function getImageTag() {
		return $this->imageTag;
	}

	public function setImageTag($imageTag) {
		$this->imageTag = $imageTag;
		$this->queryParameters["ImageTag"]=$imageTag;
	}
	
}