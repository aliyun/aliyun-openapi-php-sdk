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
namespace Ubsms\Request\V20150623;

class SetUserBusinessStatusesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ubsms", "2015-06-23", "SetUserBusinessStatuses");
	}

	private  $uid;

	private  $serviceCode;

	private  $statusKey1;

	private  $statusValue1;

	private  $statusKey2;

	private  $statusValue2;

	private  $statusKey3;

	private  $statusValue3;

	private  $statusKey4;

	private  $statusValue4;

	private  $statusKey5;

	private  $statusValue5;

	private  $statusKey6;

	private  $statusValue6;

	private  $statusKey7;

	private  $statusValue7;

	private  $statusKey8;

	private  $statusValue8;

	private  $statusKey9;

	private  $statusValue9;

	private  $statusKey10;

	private  $statusValue10;

	public function getUid() {
		return $this->uid;
	}

	public function setUid($uid) {
		$this->uid = $uid;
		$this->queryParameters["Uid"]=$uid;
	}

	public function getServiceCode() {
		return $this->serviceCode;
	}

	public function setServiceCode($serviceCode) {
		$this->serviceCode = $serviceCode;
		$this->queryParameters["ServiceCode"]=$serviceCode;
	}

	public function getStatusKey1() {
		return $this->statusKey1;
	}

	public function setStatusKey1($statusKey1) {
		$this->statusKey1 = $statusKey1;
		$this->queryParameters["StatusKey1"]=$statusKey1;
	}

	public function getStatusValue1() {
		return $this->statusValue1;
	}

	public function setStatusValue1($statusValue1) {
		$this->statusValue1 = $statusValue1;
		$this->queryParameters["StatusValue1"]=$statusValue1;
	}

	public function getStatusKey2() {
		return $this->statusKey2;
	}

	public function setStatusKey2($statusKey2) {
		$this->statusKey2 = $statusKey2;
		$this->queryParameters["StatusKey2"]=$statusKey2;
	}

	public function getStatusValue2() {
		return $this->statusValue2;
	}

	public function setStatusValue2($statusValue2) {
		$this->statusValue2 = $statusValue2;
		$this->queryParameters["StatusValue2"]=$statusValue2;
	}

	public function getStatusKey3() {
		return $this->statusKey3;
	}

	public function setStatusKey3($statusKey3) {
		$this->statusKey3 = $statusKey3;
		$this->queryParameters["StatusKey3"]=$statusKey3;
	}

	public function getStatusValue3() {
		return $this->statusValue3;
	}

	public function setStatusValue3($statusValue3) {
		$this->statusValue3 = $statusValue3;
		$this->queryParameters["StatusValue3"]=$statusValue3;
	}

	public function getStatusKey4() {
		return $this->statusKey4;
	}

	public function setStatusKey4($statusKey4) {
		$this->statusKey4 = $statusKey4;
		$this->queryParameters["StatusKey4"]=$statusKey4;
	}

	public function getStatusValue4() {
		return $this->statusValue4;
	}

	public function setStatusValue4($statusValue4) {
		$this->statusValue4 = $statusValue4;
		$this->queryParameters["StatusValue4"]=$statusValue4;
	}

	public function getStatusKey5() {
		return $this->statusKey5;
	}

	public function setStatusKey5($statusKey5) {
		$this->statusKey5 = $statusKey5;
		$this->queryParameters["StatusKey5"]=$statusKey5;
	}

	public function getStatusValue5() {
		return $this->statusValue5;
	}

	public function setStatusValue5($statusValue5) {
		$this->statusValue5 = $statusValue5;
		$this->queryParameters["StatusValue5"]=$statusValue5;
	}

	public function getStatusKey6() {
		return $this->statusKey6;
	}

	public function setStatusKey6($statusKey6) {
		$this->statusKey6 = $statusKey6;
		$this->queryParameters["StatusKey6"]=$statusKey6;
	}

	public function getStatusValue6() {
		return $this->statusValue6;
	}

	public function setStatusValue6($statusValue6) {
		$this->statusValue6 = $statusValue6;
		$this->queryParameters["StatusValue6"]=$statusValue6;
	}

	public function getStatusKey7() {
		return $this->statusKey7;
	}

	public function setStatusKey7($statusKey7) {
		$this->statusKey7 = $statusKey7;
		$this->queryParameters["StatusKey7"]=$statusKey7;
	}

	public function getStatusValue7() {
		return $this->statusValue7;
	}

	public function setStatusValue7($statusValue7) {
		$this->statusValue7 = $statusValue7;
		$this->queryParameters["StatusValue7"]=$statusValue7;
	}

	public function getStatusKey8() {
		return $this->statusKey8;
	}

	public function setStatusKey8($statusKey8) {
		$this->statusKey8 = $statusKey8;
		$this->queryParameters["StatusKey8"]=$statusKey8;
	}

	public function getStatusValue8() {
		return $this->statusValue8;
	}

	public function setStatusValue8($statusValue8) {
		$this->statusValue8 = $statusValue8;
		$this->queryParameters["StatusValue8"]=$statusValue8;
	}

	public function getStatusKey9() {
		return $this->statusKey9;
	}

	public function setStatusKey9($statusKey9) {
		$this->statusKey9 = $statusKey9;
		$this->queryParameters["StatusKey9"]=$statusKey9;
	}

	public function getStatusValue9() {
		return $this->statusValue9;
	}

	public function setStatusValue9($statusValue9) {
		$this->statusValue9 = $statusValue9;
		$this->queryParameters["StatusValue9"]=$statusValue9;
	}

	public function getStatusKey10() {
		return $this->statusKey10;
	}

	public function setStatusKey10($statusKey10) {
		$this->statusKey10 = $statusKey10;
		$this->queryParameters["StatusKey10"]=$statusKey10;
	}

	public function getStatusValue10() {
		return $this->statusValue10;
	}

	public function setStatusValue10($statusValue10) {
		$this->statusValue10 = $statusValue10;
		$this->queryParameters["StatusValue10"]=$statusValue10;
	}
	
}