<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteLiveDomainMapping
 *
 * @method string getPullDomain()
 * @method string getSecurityToken()
 * @method string getPushDomain()
 * @method string getOwnerId()
 */
class DeleteLiveDomainMappingRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'DeleteLiveDomainMapping',
            'live'
        );
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
}
