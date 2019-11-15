<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetCcConfig
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getAllowIps()
 * @method string getSecurityToken()
 * @method string getBlockIps()
 */
class SetCcConfigRequest extends \RpcAcsRequest
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
            'SetCcConfig'
        );
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

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
     * @param string $allowIps
     *
     * @return $this
     */
    public function setAllowIps($allowIps)
    {
        $this->requestParameters['AllowIps'] = $allowIps;
        $this->queryParameters['AllowIps'] = $allowIps;

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
     * @param string $blockIps
     *
     * @return $this
     */
    public function setBlockIps($blockIps)
    {
        $this->requestParameters['BlockIps'] = $blockIps;
        $this->queryParameters['BlockIps'] = $blockIps;

        return $this;
    }
}
