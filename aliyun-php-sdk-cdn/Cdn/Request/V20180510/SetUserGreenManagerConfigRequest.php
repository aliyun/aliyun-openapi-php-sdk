<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetUserGreenManagerConfig
 *
 * @method string getOwnerId()
 * @method string getSecurityToken()
 * @method string getQuota()
 * @method string getRatio()
 */
class SetUserGreenManagerConfigRequest extends \RpcAcsRequest
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
            'SetUserGreenManagerConfig'
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
     * @param string $quota
     *
     * @return $this
     */
    public function setQuota($quota)
    {
        $this->requestParameters['Quota'] = $quota;
        $this->queryParameters['Quota'] = $quota;

        return $this;
    }

    /**
     * @param string $ratio
     *
     * @return $this
     */
    public function setRatio($ratio)
    {
        $this->requestParameters['Ratio'] = $ratio;
        $this->queryParameters['Ratio'] = $ratio;

        return $this;
    }
}
