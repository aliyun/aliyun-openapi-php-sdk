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
namespace Domain\Request\V20180129;

class SaveBatchTaskForCreatingOrderActivateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "SaveBatchTaskForCreatingOrderActivate");
		$this->setMethod("POST");
	}

	private  $OrderActivateParams;

	private  $userClientIp;

	private  $lang;

	public function getOrderActivateParams() {
		return $this->OrderActivateParams;
	}

	public function setOrderActivateParams($OrderActivateParams) {
		$this->OrderActivateParams = $OrderActivateParams;
		for ($i = 0; $i < count($OrderActivateParams); $i ++) {	
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.DomainName'] = $OrderActivateParams[$i]['DomainName'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.SubscriptionDuration'] = $OrderActivateParams[$i]['SubscriptionDuration'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.RegistrantProfileId'] = $OrderActivateParams[$i]['RegistrantProfileId'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.EnableDomainProxy'] = $OrderActivateParams[$i]['EnableDomainProxy'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.PermitPremiumActivation'] = $OrderActivateParams[$i]['PermitPremiumActivation'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.AliyunDns'] = $OrderActivateParams[$i]['AliyunDns'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.Dns1'] = $OrderActivateParams[$i]['Dns1'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.Dns2'] = $OrderActivateParams[$i]['Dns2'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.ZhCity'] = $OrderActivateParams[$i]['ZhCity'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.ZhRegistrantOrganization'] = $OrderActivateParams[$i]['ZhRegistrantOrganization'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.Country'] = $OrderActivateParams[$i]['Country'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.ZhRegistrantName'] = $OrderActivateParams[$i]['ZhRegistrantName'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.ZhProvince'] = $OrderActivateParams[$i]['ZhProvince'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.ZhAddress'] = $OrderActivateParams[$i]['ZhAddress'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.City'] = $OrderActivateParams[$i]['City'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.RegistrantOrganization'] = $OrderActivateParams[$i]['RegistrantOrganization'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.RegistrantName'] = $OrderActivateParams[$i]['RegistrantName'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.Province'] = $OrderActivateParams[$i]['Province'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.Address'] = $OrderActivateParams[$i]['Address'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.Email'] = $OrderActivateParams[$i]['Email'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.PostalCode'] = $OrderActivateParams[$i]['PostalCode'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.TelArea'] = $OrderActivateParams[$i]['TelArea'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.Telephone'] = $OrderActivateParams[$i]['Telephone'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.TelExt'] = $OrderActivateParams[$i]['TelExt'];
			$this->queryParameters['OrderActivateParam.' . ($i + 1) . '.RegistrantType'] = $OrderActivateParams[$i]['RegistrantType'];

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