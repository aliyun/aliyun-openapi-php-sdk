<?php
 
include_once '../aliyun-php-sdk-core/Config.php';
use Ubsms_inner\Request\V20150623 as ubs;
 
$iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "ks7iw5e4zhFp7HzZ", "6IQ2c6i4SepX1qY1KGaufypKN0Xld7");
$client = new DefaultAcsClient($iClientProfile);
 
$request = new ubs\SetUserSecurityStatusRequest(); 
$request->setUid("1837537388585180");
$request->setStatusKey1("prohibitedByRiskControl");
$request->setStatusValue1("false");

$response = $client->getAcsResponse($request);
print_r("\r\n");
print_r($response);


