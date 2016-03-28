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
use \Push\Request\V20150827 as Push;

// 设置你的AccessKeyId/AccessSecret/AppKey
$accessKeyId = "";
$accessSecret = "";
$appKey = 123456;

$iClientProfile = DefaultProfile::getProfile("cn-hangzhou", $accessKeyId, $accessSecret);
$client = new DefaultAcsClient($iClientProfile);

// 示例: 调用 PushNoticeToAndroidRequest API
$request = new Push\PushNoticeToAndroidRequest();
$request->setAppKey($appKey);
$request->setTarget("all");
$request->setTargetValue("all");
$request->setTitle("Hello OpenAPI!");
$request->setSummary("PushMessageToAndroid from OpenAPI by PHP SDK!");


$response = $client->getAcsResponse($request);
print_r("\r\n");
print_r($response);
