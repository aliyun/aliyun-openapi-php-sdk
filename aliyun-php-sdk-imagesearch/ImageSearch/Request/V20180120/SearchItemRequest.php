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

class SearchItemRequest extends \RoaAcsRequest
{
	function  __construct()
	{
		parent::__construct("ImageSearch", "2018-01-20", "SearchItem");
		$this->setUriPattern("/item/search");
		$this->setMethod("POST");

		$this->setStart(0);
		$this->setNum(10);
		$this->setCateId("");
	}

	private  $instanceName;
	private  $start;
	private  $num;
	private  $cateId;
	private  $searchPicture;

	public function getinstanceName() {
		return $this->instanceName;
	}

	public function setinstanceName($instanceName) {
		$this->instanceName = $instanceName;
		$this->queryParameters["instanceName"]=$instanceName;
	}

	public function buildPostContent() {
	    if (strlen($this->searchPicture) == 0) {
	        return false;
        }

        $map = array();

	    $map["s"] = $this->start;
	    $map["n"] = $this->num;
	    if ($this->cateId != null && strlen($this->cateId) > 0) {
	        $map["cat_id"] = $this->cateId;
        }

        $encodePicName = base64_encode("searchPic");
	    $encodePicContent = base64_encode($this->searchPicture);

	    $map["pic_list"] = $encodePicName;
	    $map[$encodePicName] = $encodePicContent;

	    $content = $this->buildContent($map);
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

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
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
    public function getSearchPicture()
    {
        return $this->searchPicture;
    }

    /**
     * @param mixed $searchPicture
     */
    public function setSearchPicture($searchPicture)
    {
        $this->searchPicture = $searchPicture;
    }
}