<?php
require_once '../../Config.php';

use UnitTest\Ft\TestRoaApiRequest;
use UnitTest\Ft\TestRpcApiRequest;

$clientProfile = DefaultProfile::getProfile(
    "cn-hangzhou",
    "<your Ak>",
    "<your Secret>",
    "<your StsToken>"
);

DefaultProfile::addEndpoint("cn-hangzhou", "cn-hangzhou", "Ft", "ft.aliyuncs.com");

print_r("1.开始测试普通AK访问: ");
echo "\n";
$client = new DefaultAcsClient($clientProfile);
# 创建 API 请求并设置参数
$request = new TestRpcApiRequest();
$request->setQueryParam("test");
# 发起请求并处理返回
$response = $client->getAcsResponse($request);
print_r($response);

# 创建 API 请求并设置参数
$request = new TestRoaApiRequest();
$request->setQueryParam("test");
# 发起请求并处理返回
$response = $client->getAcsResponse($request);
print_r($response);

//RoleArn
echo "\n";
print_r("2.开始测试RoleArn: ");
echo "\n";
$ramRoleArnProfile = DefaultProfile::getRamRoleArnProfile(
    "cn-hangzhou",
    "<your Ak>",
    "<your Secret>",
    "<your RoleArn>",
    "<your RoleSessionName>"
);

$roleArnClient = new DefaultAcsClient($ramRoleArnProfile);

# 创建 API 请求并设置参数
$request = new TestRpcApiRequest();
$request->setQueryParam("test");
# 发起请求并处理返回
$response = $roleArnClient->getAcsResponse($request);
print_r($response);

# 创建 API 请求并设置参数
$request = new TestRoaApiRequest();
$request->setQueryParam("test");
# 发起请求并处理返回
$response = $roleArnClient->getAcsResponse($request);
print_r($response);

echo "\n";
print_r("3.开始测试EcsArn: ");
echo "\n";
$ecsRamRoleProfile = DefaultProfile::getEcsRamRoleProfile(
    "cn-hangzhou",
    "<your EcsRoleName>"
);

$ecsRamRoleClient = new DefaultAcsClient($ecsRamRoleProfile);

# 创建 API 请求并设置参数
$request = new TestRpcApiRequest();
$request->setQueryParam("test");
# 发起请求并处理返回
$response = $ecsRamRoleClient->getAcsResponse($request);
print_r($response);

# 创建 API 请求并设置参数
$request = new TestRoaApiRequest();
$request->setQueryParam("test");
# 发起请求并处理返回
$response = $ecsRamRoleClient->getAcsResponse($request);
print_r($response);

echo "\n";
print_r("4.开始测试BearerToken: ");
echo "\n";
$bearerTokenProfile = DefaultProfile::getBearerTokenProfile(
    "cn-hangzhou",
    "<Your Bearer Token>"
);

$bearerTokenClient = new DefaultAcsClient($bearerTokenProfile);

# 创建 API 请求并设置参数
$request = new TestRpcApiRequest();
$request->setQueryParam("test");
# 发起请求并处理返回
$response = $bearerTokenClient->getAcsResponse($request);
print_r($response);

# 创建 API 请求并设置参数
$request = new TestRoaApiRequest();
$request->setQueryParam("test");
# 发起请求并处理返回
$response = $bearerTokenClient->getAcsResponse($request);
print_r($response);