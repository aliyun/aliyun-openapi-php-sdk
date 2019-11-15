<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddLiveDomainMapping
 *
 * @method string getOwnerId()
 * @method string getPullDomain()
 * @method string getSecurityToken()
 * @method string getPushDomain()
 */
class AddLiveDomainMappingRequest extends \RpcAcsRequest
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
            'AddLiveDomainMapping'
        );
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
     * @param string $pullDomain
     *
     * @return $this
     */
    public function setPullDomain($pullDomain)
    {
        $this->requestParameters['PullDomain'] = $pullDomain;
        $this->queryParameters['PullDomain'] = $pullDomain;

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
     * @param string $pushDomain
     *
     * @return $this
     */
    public function setPushDomain($pushDomain)
    {
        $this->requestParameters['PushDomain'] = $pushDomain;
        $this->queryParameters['PushDomain'] = $pushDomain;

        return $this;
    }
}
