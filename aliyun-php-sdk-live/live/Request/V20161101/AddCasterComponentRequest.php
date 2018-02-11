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
namespace live\Request\V20161101;

class AddCasterComponentRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "AddCasterComponent", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $imageLayerContent;

	private  $casterId;

	private  $componentLayer;

	private  $componentName;

	private  $ownerId;

	private  $version;

	private  $componentType;

	private  $securityToken;

	private  $locationId;

	private  $effect;

	private  $textLayerContent;

	public function getImageLayerContent() {
		return $this->imageLayerContent;
	}

	public function setImageLayerContent($imageLayerContent) {
		$this->imageLayerContent = $imageLayerContent;
		$this->queryParameters["ImageLayerContent"]=$imageLayerContent;
	}

	public function getCasterId() {
		return $this->casterId;
	}

	public function setCasterId($casterId) {
		$this->casterId = $casterId;
		$this->queryParameters["CasterId"]=$casterId;
	}

	public function getComponentLayer() {
		return $this->componentLayer;
	}

	public function setComponentLayer($componentLayer) {
		$this->componentLayer = $componentLayer;
		$this->queryParameters["ComponentLayer"]=$componentLayer;
	}

	public function getComponentName() {
		return $this->componentName;
	}

	public function setComponentName($componentName) {
		$this->componentName = $componentName;
		$this->queryParameters["ComponentName"]=$componentName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getVersion() {
		return $this->version;
	}

	public function setVersion($version) {
		$this->version = $version;
		$this->queryParameters["Version"]=$version;
	}

	public function getComponentType() {
		return $this->componentType;
	}

	public function setComponentType($componentType) {
		$this->componentType = $componentType;
		$this->queryParameters["ComponentType"]=$componentType;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getLocationId() {
		return $this->locationId;
	}

	public function setLocationId($locationId) {
		$this->locationId = $locationId;
		$this->queryParameters["LocationId"]=$locationId;
	}

	public function getEffect() {
		return $this->effect;
	}

	public function setEffect($effect) {
		$this->effect = $effect;
		$this->queryParameters["Effect"]=$effect;
	}

	public function getTextLayerContent() {
		return $this->textLayerContent;
	}

	public function setTextLayerContent($textLayerContent) {
		$this->textLayerContent = $textLayerContent;
		$this->queryParameters["TextLayerContent"]=$textLayerContent;
	}
	
}