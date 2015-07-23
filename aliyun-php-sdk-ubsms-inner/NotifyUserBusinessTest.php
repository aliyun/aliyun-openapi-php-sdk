<?php
 
include_once '../aliyun-php-sdk-core/Config.php';
use Ubsms_inner\Request\V20150623 as ubs;
 
$iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "c6FJ7dpnZIU14CRE", "rtHTcpLM56whmWxeLnuCuO0sSGvdp8");
$client = new DefaultAcsClient($iClientProfile);
 
$request = new ubs\NotifyUserBusinessCommandRequest(); 
$request->setUid("1250434591322550");
$request->setCmd("ceaseUserResourcesForDebt");
$request->setServiceCode("ecs");

$response = $client->getAcsResponse($request);
print_r("\r\n");
print_r($response);

