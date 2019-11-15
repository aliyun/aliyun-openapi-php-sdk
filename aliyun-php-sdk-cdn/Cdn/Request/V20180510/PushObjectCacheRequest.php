<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PushObjectCache
 *
 * @method string getArea()
 * @method string getObjectPath()
 * @method string getOwnerId()
 * @method string getSecurityToken()
 */
class PushObjectCacheRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cdn',
            '2018-05-10',
            'PushObjectCache'
        );
    }

    /**
     * @param string $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->requestParameters['Area'] = $area;
        $this->queryParameters['Area'] = $area;

        return $this;
    }

    /**
     * @param string $objectPath
     *
     * @return $this
     */
    public function setObjectPath($objectPath)
    {
        $this->requestParameters['ObjectPath'] = $objectPath;
        $this->queryParameters['ObjectPath'] = $objectPath;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }
}
