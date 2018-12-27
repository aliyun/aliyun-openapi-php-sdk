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

/**
 *
 */
define('LOCATION_SERVICE_PRODUCT_NAME', 'Location');
/**
 *
 */
define('LOCATION_SERVICE_DOMAIN', 'location.aliyuncs.com');
/**
 *
 */
define('LOCATION_SERVICE_VERSION', '2015-06-12');
/**
 *
 */
define('LOCATION_SERVICE_DESCRIBE_ENDPOINT_ACTION', 'DescribeEndpoints');
/**
 *
 */
define('LOCATION_SERVICE_REGION', 'cn-hangzhou');
/**
 *
 */
define('CACHE_EXPIRE_TIME', 3600);

class DescribeEndpointRequest extends RpcAcsRequest
{
    /**
     * DescribeEndpointRequest constructor.
     *
     * @param $id
     * @param $serviceCode
     * @param $endPointType
     */
    public function __construct($id, $serviceCode, $endPointType)
    {
        parent::__construct(LOCATION_SERVICE_PRODUCT_NAME,
                            LOCATION_SERVICE_VERSION,
                            LOCATION_SERVICE_DESCRIBE_ENDPOINT_ACTION);

        $this->queryParameters['Id']          = $id;
        $this->queryParameters['ServiceCode'] = $serviceCode;
        $this->queryParameters['Type']        = $endPointType;
        $this->setRegionId(LOCATION_SERVICE_REGION);

        $this->setAcceptFormat('JSON');
    }
}

class LocationService
{
    /**
     * @var IClientProfile
     */
    private $clientProfile;
    /**
     * @var array
     */
    public static $cache = array();
    /**
     * @var array
     */
    public static $lastClearTimePerProduct = array();
    /**
     * @var string
     */
    public static $serviceDomain = LOCATION_SERVICE_DOMAIN;

    /**
     * LocationService constructor.
     *
     * @param $clientProfile
     */
    public function __construct($clientProfile)
    {
        $this->clientProfile = $clientProfile;
    }

    /**
     * @param $regionId
     * @param $serviceCode
     * @param $endPointType
     * @param $product
     *
     * @return mixed|null
     * @throws ClientException
     */
    public function findProductDomain($regionId, $serviceCode, $endPointType, $product)
    {
        $key    = $regionId . '#' . $product;
        $domain = isset(self::$cache[$key]) ? self::$cache[$key] : null;
        if ($domain === null || $this->checkCacheIsExpire($key) == true) {
            $domain            = $this->findProductDomainFromLocationService($regionId, $serviceCode, $endPointType);
            self::$cache[$key] = $domain;
        }

        return $domain;
    }

    /**
     * @param $regionId
     * @param $product
     * @param $domain
     */
    public static function addEndPoint($regionId, $product, $domain)
    {
        $key                                 = $regionId . '#' . $product;
        self::$cache[$key]                   = $domain;
        $lastClearTime                       = mktime(0, 0, 0, 1, 1, 2999);
        self::$lastClearTimePerProduct[$key] = $lastClearTime;
    }

    /**
     * @param $domain
     */
    public static function modifyServiceDomain($domain)
    {
        self::$serviceDomain = $domain;
    }

    /**
     * @param $key
     *
     * @return bool
     */
    private function checkCacheIsExpire($key)
    {
        $lastClearTime = isset(self::$lastClearTimePerProduct[$key])
            ? self::$lastClearTimePerProduct[$key]
            : null;
        if ($lastClearTime === null) {
            $lastClearTime                       = time();
            self::$lastClearTimePerProduct[$key] = $lastClearTime;
        }

        $now         = time();
        $elapsedTime = $now - $lastClearTime;

        if ($elapsedTime > CACHE_EXPIRE_TIME) {
            $lastClearTime                       = time();
            self::$lastClearTimePerProduct[$key] = $lastClearTime;
            return true;
        }

        return false;
    }

    /**
     * @param $regionId
     * @param $serviceCode
     * @param $endPointType
     *
     * @return string|null
     * @throws ClientException
     */
    private function findProductDomainFromLocationService($regionId, $serviceCode, $endPointType)
    {
        $request = new DescribeEndpointRequest($regionId, $serviceCode, $endPointType);

        $signer     = $this->clientProfile->getSigner();
        $credential = $this->clientProfile->getCredential();

        $requestUrl = $request->composeUrl($signer, $credential, self::$serviceDomain);

        $httpResponse = HttpHelper::curl($requestUrl, $request->getMethod(), null, $request->getHeaders());

        if (!$httpResponse->isSuccess()) {
            return null;
        }

        $respObj = json_decode($httpResponse->getBody());
        return $respObj->Endpoints->Endpoint[0]->Endpoint;
    }
}