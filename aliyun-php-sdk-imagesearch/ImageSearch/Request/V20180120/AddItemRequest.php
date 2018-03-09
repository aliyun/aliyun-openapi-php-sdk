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
namespace ImageSearch\Request\V20180120;

class AddItemRequest extends \RoaAcsRequest
{
	function  __construct()
	{
		parent::__construct("ImageSearch", "2018-01-20", "AddItem");
		$this->setUriPattern("/item/add");
		$this->setMethod("POST");

		$this->setItemId("");
		$this->setCateId("");
		$this->setCustContent("");
		$this->setPicMap(array());
	}

	private  $instanceName;
	private  $itemId;
	private  $cateId;
	private  $custContent;
	private  $picMap;

	public function addPicture($picName, $picContent) {
        $encodePicName = base64_encode($picName);
        $encodePicContent = base64_encode($picContent);

        $this->picMap[$encodePicName] = $encodePicContent;
    }

	public function buildPostContent() {
	    $map = array();

	    if ($this->itemId == null || strlen($this->itemId) == 0
            || $this->cateId == null || strlen($this->cateId) == 0
            || empty($this->picMap)) {
	        return false;
        }

        $map["item_id"] = $this->itemId;
	    $map["cat_id"] = $this->cateId;
	    $map["cust_content"] = $this->custContent;

	    $picListStr = "";
	    foreach ($this->picMap as $key => $value) {
	        if ($key == null || strlen($key) == 0
                || $value == null || strlen($value) == 0) {
	            return false;
            }
            $picListStr .= $key.",";
	        $map[$key] = $value;
        }

        $map["pic_list"] = substr($picListStr, 0, strlen($picListStr) -1 );

	    $this->setContent($this->buildContent($map));
        $this->setAcceptFormat("JSON");

        return true;
    }

    public function buildContent($map) {
        $meta = "";
        $body = "";
        $start = 0;

        foreach ($map as $key => $value) {
            if (strlen($meta) > 0) {
                $meta .= "#";
            }
            $meta .= $key.",".$start.",".($start + strlen($value));
            $body .= $value;
            $start += strlen($value);
        }
        print("meta:".$meta);
        return $meta."^".$body;
    }

    public function getinstanceName() {
        return $this->instanceName;
    }

    public function setinstanceName($instanceName) {
        $this->instanceName = $instanceName;
        $this->queryParameters["instanceName"]=$instanceName;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * @return mixed
     */
    public function getCateId()
    {
        return $this->cateId;
    }

    /**
     * @param mixed $cateId
     */
    public function setCateId($cateId)
    {
        $this->cateId = $cateId;
    }

    /**
     * @return mixed
     */
    public function getCustContent()
    {
        return $this->custContent;
    }

    /**
     * @param mixed $custContent
     */
    public function setCustContent($custContent)
    {
        $this->custContent = $custContent;
    }

    /**
     * @return mixed
     */
    public function getPicMap()
    {
        return $this->picMap;
    }

    /**
     * @param mixed $picMap
     */
    public function setPicMap($picMap)
    {
        $this->picMap = $picMap;
    }
}