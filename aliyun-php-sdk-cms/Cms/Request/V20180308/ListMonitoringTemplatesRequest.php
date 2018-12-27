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
namespace Cms\Request\V20180308;

class ListMonitoringTemplatesRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("Cms", "2018-03-08", "ListMonitoringTemplates");
		$this->setMethod("POST");
    }

    protected $total;

    protected $name;

    protected $pageSize;

    protected $id;

    protected $history;

    protected $keyword;

    protected $pageNumber;

    public function getTotal() {
	    return $this->total;
    }

    public function setTotal($total) {
    	$this->total = $total;
    	$this->queryParameters['Total'] = $total;
	}

    public function getName() {
	    return $this->name;
    }

    public function setName($name) {
    	$this->name = $name;
    	$this->queryParameters['Name'] = $name;
	}

    public function getPageSize() {
	    return $this->pageSize;
    }

    public function setPageSize($pageSize) {
    	$this->pageSize = $pageSize;
    	$this->queryParameters['PageSize'] = $pageSize;
	}

    public function getId() {
	    return $this->id;
    }

    public function setId($id) {
    	$this->id = $id;
    	$this->queryParameters['Id'] = $id;
	}

    public function getHistory() {
	    return $this->history;
    }

    public function setHistory($history) {
    	$this->history = $history;
    	$this->queryParameters['History'] = $history;
	}

    public function getKeyword() {
	    return $this->keyword;
    }

    public function setKeyword($keyword) {
    	$this->keyword = $keyword;
    	$this->queryParameters['Keyword'] = $keyword;
	}

    public function getPageNumber() {
	    return $this->pageNumber;
    }

    public function setPageNumber($pageNumber) {
    	$this->pageNumber = $pageNumber;
    	$this->queryParameters['PageNumber'] = $pageNumber;
	}

}
