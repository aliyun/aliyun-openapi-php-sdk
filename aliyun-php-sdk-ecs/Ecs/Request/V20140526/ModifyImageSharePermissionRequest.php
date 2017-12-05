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
namespace Ecs\Request\V20140526;

class ModifyImageSharePermissionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ModifyImageSharePermission", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $addAccount1;

	private  $resourceOwnerId;

	private  $imageId;

	private  $addAccount9;

	private  $addAccount8;

	private  $addAccount7;

	private  $addAccount6;

	private  $addAccount5;

	private  $addAccount10;

	private  $addAccount4;

	private  $addAccount3;

	private  $addAccount2;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $removeAccount1;

	private  $removeAccount2;

	private  $removeAccount3;

	private  $removeAccount4;

	private  $ownerId;

	private  $removeAccount9;

	private  $removeAccount5;

	private  $removeAccount6;

	private  $removeAccount7;

	private  $removeAccount8;

	private  $removeAccount10;

	public function getAddAccount1() {
		return $this->addAccount1;
	}

	public function setAddAccount1($addAccount1) {
		$this->addAccount1 = $addAccount1;
		$this->queryParameters["AddAccount.1"]=$addAccount1;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getAddAccount9() {
		return $this->addAccount9;
	}

	public function setAddAccount9($addAccount9) {
		$this->addAccount9 = $addAccount9;
		$this->queryParameters["AddAccount.9"]=$addAccount9;
	}

	public function getAddAccount8() {
		return $this->addAccount8;
	}

	public function setAddAccount8($addAccount8) {
		$this->addAccount8 = $addAccount8;
		$this->queryParameters["AddAccount.8"]=$addAccount8;
	}

	public function getAddAccount7() {
		return $this->addAccount7;
	}

	public function setAddAccount7($addAccount7) {
		$this->addAccount7 = $addAccount7;
		$this->queryParameters["AddAccount.7"]=$addAccount7;
	}

	public function getAddAccount6() {
		return $this->addAccount6;
	}

	public function setAddAccount6($addAccount6) {
		$this->addAccount6 = $addAccount6;
		$this->queryParameters["AddAccount.6"]=$addAccount6;
	}

	public function getAddAccount5() {
		return $this->addAccount5;
	}

	public function setAddAccount5($addAccount5) {
		$this->addAccount5 = $addAccount5;
		$this->queryParameters["AddAccount.5"]=$addAccount5;
	}

	public function getAddAccount10() {
		return $this->addAccount10;
	}

	public function setAddAccount10($addAccount10) {
		$this->addAccount10 = $addAccount10;
		$this->queryParameters["AddAccount.10"]=$addAccount10;
	}

	public function getAddAccount4() {
		return $this->addAccount4;
	}

	public function setAddAccount4($addAccount4) {
		$this->addAccount4 = $addAccount4;
		$this->queryParameters["AddAccount.4"]=$addAccount4;
	}

	public function getAddAccount3() {
		return $this->addAccount3;
	}

	public function setAddAccount3($addAccount3) {
		$this->addAccount3 = $addAccount3;
		$this->queryParameters["AddAccount.3"]=$addAccount3;
	}

	public function getAddAccount2() {
		return $this->addAccount2;
	}

	public function setAddAccount2($addAccount2) {
		$this->addAccount2 = $addAccount2;
		$this->queryParameters["AddAccount.2"]=$addAccount2;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getRemoveAccount1() {
		return $this->removeAccount1;
	}

	public function setRemoveAccount1($removeAccount1) {
		$this->removeAccount1 = $removeAccount1;
		$this->queryParameters["RemoveAccount.1"]=$removeAccount1;
	}

	public function getRemoveAccount2() {
		return $this->removeAccount2;
	}

	public function setRemoveAccount2($removeAccount2) {
		$this->removeAccount2 = $removeAccount2;
		$this->queryParameters["RemoveAccount.2"]=$removeAccount2;
	}

	public function getRemoveAccount3() {
		return $this->removeAccount3;
	}

	public function setRemoveAccount3($removeAccount3) {
		$this->removeAccount3 = $removeAccount3;
		$this->queryParameters["RemoveAccount.3"]=$removeAccount3;
	}

	public function getRemoveAccount4() {
		return $this->removeAccount4;
	}

	public function setRemoveAccount4($removeAccount4) {
		$this->removeAccount4 = $removeAccount4;
		$this->queryParameters["RemoveAccount.4"]=$removeAccount4;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getRemoveAccount9() {
		return $this->removeAccount9;
	}

	public function setRemoveAccount9($removeAccount9) {
		$this->removeAccount9 = $removeAccount9;
		$this->queryParameters["RemoveAccount.9"]=$removeAccount9;
	}

	public function getRemoveAccount5() {
		return $this->removeAccount5;
	}

	public function setRemoveAccount5($removeAccount5) {
		$this->removeAccount5 = $removeAccount5;
		$this->queryParameters["RemoveAccount.5"]=$removeAccount5;
	}

	public function getRemoveAccount6() {
		return $this->removeAccount6;
	}

	public function setRemoveAccount6($removeAccount6) {
		$this->removeAccount6 = $removeAccount6;
		$this->queryParameters["RemoveAccount.6"]=$removeAccount6;
	}

	public function getRemoveAccount7() {
		return $this->removeAccount7;
	}

	public function setRemoveAccount7($removeAccount7) {
		$this->removeAccount7 = $removeAccount7;
		$this->queryParameters["RemoveAccount.7"]=$removeAccount7;
	}

	public function getRemoveAccount8() {
		return $this->removeAccount8;
	}

	public function setRemoveAccount8($removeAccount8) {
		$this->removeAccount8 = $removeAccount8;
		$this->queryParameters["RemoveAccount.8"]=$removeAccount8;
	}

	public function getRemoveAccount10() {
		return $this->removeAccount10;
	}

	public function setRemoveAccount10($removeAccount10) {
		$this->removeAccount10 = $removeAccount10;
		$this->queryParameters["RemoveAccount.10"]=$removeAccount10;
	}
	
}