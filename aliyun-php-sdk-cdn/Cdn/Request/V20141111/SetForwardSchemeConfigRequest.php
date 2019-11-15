<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetForwardSchemeConfig
 *
 * @method string getSchemeOrigin()
 * @method string getSchemeOriginPort()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getSecurityToken()
 * @method string getEnable()
 */
class SetForwardSchemeConfigRequest extends \RpcAcsRequest
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
            'SetForwardSchemeConfig'
        );
    }

    /**
     * @param string $schemeOrigin
     *
     * @return $this
     */
    public function setSchemeOrigin($schemeOrigin)
    {
        $this->requestParameters['SchemeOrigin'] = $schemeOrigin;
        $this->queryParameters['SchemeOrigin'] = $schemeOrigin;

        return $this;
    }

    /**
     * @param string $schemeOriginPort
     *
     * @return $this
     */
    public function setSchemeOriginPort($schemeOriginPort)
    {
        $this->requestParameters['SchemeOriginPort'] = $schemeOriginPort;
        $this->queryParameters['SchemeOriginPort'] = $schemeOriginPort;

        return $this;
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
     * @param string $enable
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->requestParameters['Enable'] = $enable;
        $this->queryParameters['Enable'] = $enable;

        return $this;
    }
}
