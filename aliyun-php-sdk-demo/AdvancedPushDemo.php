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
date_default_timezone_set('Asia/Shanghai');

include_once '../aliyun-php-sdk-core/Config.php';
use \Push\Request\V20150827 as Push;

// 设置你的AccessKeyId/AccessSecret/AppKey
$accessKeyId = "";
$accessSecret = "";
$appKey = 123456;

$iClientProfile = DefaultProfile::getProfile("cn-hangzhou", $accessKeyId, $accessSecret);
$client = new DefaultAcsClient($iClientProfile);

$request = new Push\PushRequest();


// 推送目标
$request->setAppKey($appKey);
$request->setTarget("all"); //推送目标: device:推送给设备; account:推送给指定帐号,tag:推送给自定义标签; all: 推送给全部
$request->setTargetValue("all"); //根据Target来设定，如Target=device, 则对应的值为 设备id1,设备id2. 多个值使用逗号分隔.(帐号与设备有一次最多100个的限制)
$request->setDeviceType(3); // 设备类型deviceType 取值范围为:0~3. iOS设备: 0; Android设备: 1; 全部: 3, 这是默认值.


// 推送配置
$request->setType(1); // 0:表示消息(默认为0), 1:表示通知
$request->setTitle("Hello OpenAPI!"); // 消息的标题
$request->setBody("PushRequest body"); // 消息的内容
$request->setSummary("PushRequest summary"); // 通知的摘要
// 推送配置: iOS
$request->setiOSBadge("5"); // iOS应用图标右上角角标
$request->setiOSMusic("default"); // iOS通知声音
$request->setiOSExtParameters("{\"k1\":\"ios\",\"k2\":\"v2\"}"); //自定义的kv结构,开发者扩展用 针对iOS设备
$request->setApnsEnv("DEV");
$request->setRemind("true"); // 当APP不在线时候，是否通过通知提醒
// 推送配置: Android
$request->setAndroidOpenType("3"); // 点击通知后动作,1:打开应用 2: 打开应用Activity 3:打开 url
$request->setAndroidOpenUrl("http://www.baidu.com"); // Android收到推送后打开对应的url,仅仅当androidOpenType=3有效
$request->setAndroidExtParameters("{\"k1\":\"android\",\"k2\":\"v2\"}"); // 设定android类型设备通知的扩展属性


// 推送控制
$pushTime = new DateTime();
$pushTime->add(new DateInterval('PT30S')); // 30秒之后的时间点, 也可以设置成你指定固定时间
// $request->setPushTime($pushTime->format(DateTime::ISO8601)); // 延后推送。可选，如果不设置表示立即推送
$request->setStoreOffline("true"); // 离线消息是否保存,若保存, 在推送时候，用户即使不在线，下一次上线则会收到
$expireTime = new DateTime();
$expireTime->add(new DateInterval('P1D')); // 12小时后消息失效, 不会再发送
// $request->setExpireTime($expireTime->format(DateTime::ISO8601));
$request->setBatchNumber("100010"); // 批次编号,用于活动效果统计. 设置成业务可以记录的字符串


$response = $client->getAcsResponse($request);
print_r("\r\n");
print_r($response);
