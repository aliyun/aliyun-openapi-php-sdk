<?php
 
include_once '../aliyun-php-sdk-core/Config.php';
use Ubsms\Request\V20150623 as ubs;
 
$iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "123ak", "456secret");
$client = new DefaultAcsClient($iClientProfile);
 
$request = new ubs\SetUserBusinessStatusesRequest(); 
$request->setUid("1250434591322550");
$request->setServiceCode("ecs");
$request->setStatusKey1("enabled");
$request->setStatusValue1("true");

$response = $client->getAcsResponse($request);
print_r("\r\n");
print_r($response);
