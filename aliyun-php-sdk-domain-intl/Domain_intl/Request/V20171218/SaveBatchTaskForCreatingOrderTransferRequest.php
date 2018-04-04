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
namespace Domain_intl\Request\V20171218;

class SaveBatchTaskForCreatingOrderTransferRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain-intl", "2017-12-18", "SaveBatchTaskForCreatingOrderTransfer", "domain", "openAPI");
		$this->setMethod("POST");
	}

	private  $OrderTransferParams;

	private  $userClientIp;

	private  $lang;

	public function getOrderTransferParams() {
		return $this->OrderTransferParams;
	}

	public function setOrderTransferParams($OrderTransferParams) {
		$this->OrderTransferParams = $OrderTransferParams;
		for ($i = 0; $i < count($OrderTransferParams); $i ++) {	
			$this->queryParameters['OrderTransferParam.' . ($i + 1) . '.DomainName'] = $OrderTransferParams[$i]['DomainName'];
			$this->queryParameters['OrderTransferParam.' . ($i + 1) . '.AuthorizationCode'] = $OrderTransferParams[$i]['AuthorizationCode'];
			$this->queryParameters['OrderTransferParam.' . ($i + 1) . '.RegistrantProfileId'] = $OrderTransferParams[$i]['RegistrantProfileId'];
			$this->queryParameters['OrderTransferParam.' . ($i + 1) . '.PermitPremiumTransfer'] = $OrderTransferParams[$i]['PermitPremiumTransfer'];

		}
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}
	
}