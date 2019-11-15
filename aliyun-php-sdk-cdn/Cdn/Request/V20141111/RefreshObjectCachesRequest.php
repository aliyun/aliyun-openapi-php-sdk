<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RefreshObjectCaches
 *
 * @method string getObjectPath()
 * @method string getOwnerId()
 * @method string getSecurityToken()
 * @method string getObjectType()
 */
class RefreshObjectCachesRequest extends \RpcAcsRequest
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
            '2014-11-11',
            'RefreshObjectCaches'
        );
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

    /**
     * @param string $objectType
     *
     * @return $this
     */
    public function setObjectType($objectType)
    {
        $this->requestParameters['ObjectType'] = $objectType;
        $this->queryParameters['ObjectType'] = $objectType;

        return $this;
    }
}
