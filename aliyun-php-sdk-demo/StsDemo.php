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
include_once '../aliyun-php-sdk-core/Config.php';
use \Sts\Request\V20150401 as Sts;

$iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "<your accessKey>", "<your accessSecret>");
$client = new DefaultAcsClient($iClientProfile);

$policy = "{\n" .
                "    \"Version\": \"1\",\n" .
                "    \"Statement\": [\n" .
                "      {\n" .
                "        \"Effect\": \"Allow\",\n" .
                "        \"Action\": \"odps:Create*\",\n" .
                "        \"Resource\": \"acs:odps:hz:*:projects/*\"\n" .
                "      }\n" .
                "    ]\n" .
                "  }";
$request = new Sts\GetFederationTokenRequest();
$request->setName("sts_test");
$request->setStsVersion("2015-04-01");
$request->setPolicy($policy);
$request->setDurationSeconds(3600);
$response = $client->getAcsResponse($request);
print_r("\r\n");
print_r($response);