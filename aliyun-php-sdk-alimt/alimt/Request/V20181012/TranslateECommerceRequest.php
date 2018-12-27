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
namespace alimt\Request\V20181012;

class TranslateECommerceRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("alimt", "2018-10-12", "TranslateECommerce", "alimt", "openAPI");
		$this->setMethod("POST");
    }

	private  $sourceLanguage;

	private  $sourceText;

	private  $formatType;

	private  $targetLanguage;

	private  $scene;

    public function getSourceLanguage() {
	    return $this->sourceLanguage;
    }

    public function setSourceLanguage($sourceLanguage) {
    	$this->sourceLanguage = $sourceLanguage;
    	$this->queryParameters['SourceLanguage'] = $sourceLanguage;
	}

    public function getSourceText() {
	    return $this->sourceText;
    }

    public function setSourceText($sourceText) {
    	$this->sourceText = $sourceText;
    	$this->queryParameters['SourceText'] = $sourceText;
	}

    public function getFormatType() {
	    return $this->formatType;
    }

    public function setFormatType($formatType) {
    	$this->formatType = $formatType;
    	$this->queryParameters['FormatType'] = $formatType;
	}

    public function getTargetLanguage() {
	    return $this->targetLanguage;
    }

    public function setTargetLanguage($targetLanguage) {
    	$this->targetLanguage = $targetLanguage;
    	$this->queryParameters['TargetLanguage'] = $targetLanguage;
	}

    public function getScene() {
	    return $this->scene;
    }

    public function setScene($scene) {
    	$this->scene = $scene;
    	$this->queryParameters['Scene'] = $scene;
	}

}