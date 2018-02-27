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
namespace Domain\Request\V20180208;

class ReserveDomainRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-02-08", "ReserveDomain");
		$this->setMethod("POST");
	}

	private  $Channelss;

	private  $domainName;

	public function getChannelss() {
		return $this->Channelss;
	}

	public function setChannelss($Channelss) {
		$this->Channelss = $Channelss;

	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		}
	
}