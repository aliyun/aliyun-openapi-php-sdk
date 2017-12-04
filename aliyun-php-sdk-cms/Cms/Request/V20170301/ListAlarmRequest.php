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
namespace Cms\Request\V20170301;

class ListAlarmRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "ListAlarm", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $isEnable;

	private  $callby_cms_owner;

	private  $name;

	private  $namespace;

	private  $pageSize;

	private  $id;

	private  $state;

	private  $dimension;

	private  $pageNumber;

	public function getIsEnable() {
		return $this->isEnable;
	}

	public function setIsEnable($isEnable) {
		$this->isEnable = $isEnable;
		$this->queryParameters["IsEnable"]=$isEnable;
	}

	public function getcallby_cms_owner() {
		return $this->callby_cms_owner;
	}

	public function setcallby_cms_owner($callby_cms_owner) {
		$this->callby_cms_owner = $callby_cms_owner;
		$this->queryParameters["callby_cms_owner"]=$callby_cms_owner;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getNamespace() {
		return $this->namespace;
	}

	public function setNamespace($namespace) {
		$this->namespace = $namespace;
		$this->queryParameters["Namespace"]=$namespace;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
		$this->queryParameters["Id"]=$id;
	}

	public function getState() {
		return $this->state;
	}

	public function setState($state) {
		$this->state = $state;
		$this->queryParameters["State"]=$state;
	}

	public function getDimension() {
		return $this->dimension;
	}

	public function setDimension($dimension) {
		$this->dimension = $dimension;
		$this->queryParameters["Dimension"]=$dimension;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}
	
}