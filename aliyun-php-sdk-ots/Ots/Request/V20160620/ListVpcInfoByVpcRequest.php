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
namespace Ots\Request\V20160620;

class ListVpcInfoByVpcRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ots", "2016-06-20", "ListVpcInfoByVpc", "ots", "openAPI");
	}

	private  $access_key_id;

	private  $resourceOwnerId;

	private  $vpcId;

	private  $pageSize;

	private  $pageNum;

	private  $TagInfos;

	public function getaccess_key_id() {
		return $this->access_key_id;
	}

	public function setaccess_key_id($access_key_id) {
		$this->access_key_id = $access_key_id;
		$this->queryParameters["access_key_id"]=$access_key_id;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getPageNum() {
		return $this->pageNum;
	}

	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->queryParameters["PageNum"]=$pageNum;
	}

	public function getTagInfos() {
		return $this->TagInfos;
	}

	public function setTagInfos($TagInfos) {
		$this->TagInfos = $TagInfos;
		for ($i = 0; $i < count($TagInfos); $i ++) {	
			$this->queryParameters['TagInfo.' . ($i + 1) . '.TagKey'] = $TagInfos[$i]['TagKey'];
			$this->queryParameters['TagInfo.' . ($i + 1) . '.TagValue'] = $TagInfos[$i]['TagValue'];

		}
	}
	
}