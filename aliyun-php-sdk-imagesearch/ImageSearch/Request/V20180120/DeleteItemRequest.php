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

class DeleteItemRequest extends \RoaAcsRequest
{
	function  __construct()
	{
		parent::__construct("ImageSearch", "2018-01-20", "DeleteItem");
		$this->setUriPattern("/item/delete");
		$this->setMethod("POST");

		$this->setItemId("");
        $this->setPicList(array());
	}

	private  $instanceName;
	private  $itemId;
	private  $picList;

	public function addPicture($deletePictureName) {
	    array_push($this->picList, $deletePictureName);
    }

    public function buildPostContent() {
	    if ($this->itemId == null || strlen($this->itemId) == 0) {
	        return false;
        }

        $map = array();
	    $map["item_id"] = $this->itemId;

	    $picListStr = "";
	    foreach ($this->picList as $key => $value) {
	        if ($picListStr != null && strlen($picListStr) > 0) {
	            $picListStr .= ",";
            }
            $picListStr .= base64_encode($value);
        }
        $map["pic_list"] = $picListStr;

	    $content = $this->buildContent($map);

	    print("content: ".$content);
	    $this->setContent($content);
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
    public function getPicList()
    {
        return $this->picList;
    }

    /**
     * @param mixed $picList
     */
    public function setPicList($picList)
    {
        $this->picList = $picList;
    }


}