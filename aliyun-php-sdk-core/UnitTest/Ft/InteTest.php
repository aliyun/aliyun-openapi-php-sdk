<?php
/**
 * Created by PhpStorm.
 * User: zhangw
 * Date: 2017/12/19
 * Time: 下午6:47
 */
require_once '../../Config.php';

use UnitTest\Ft\TestRpcApiRequest;
use UnitTest\Ft\TestRoaApiRequest;

$clientProfile = DefaultProfile::getProfile(
    "cn-hangzhou",
    "<your Ak>",
    "<your secret>",
    "<your StsToken>"
);

DefaultProfile::addEndpoint("cn-hangzhou", "cn-hangzhou", "Ft", "ft.aliyuncs.com");

$client = new DefaultAcsClient($clientProfile);
# 创建 API 请求并设置参数
$request = new TestRpcApiRequest();
$request->setQueryParam("conan");
# 发起请求并处理返回
$response = $client->getAcsResponse($request);
print_r($response);

# 创建 API 请求并设置参数
$request = new TestRoaApiRequest();
$request->setQueryParam("conan");
# 发起请求并处理返回
$response = $client->getAcsResponse($request);
print_r($response);