<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetDynamicConfig
 *
 * @method string getDynamicOrigin()
 * @method string getStaticType()
 * @method string getSecurityToken()
 * @method string getStaticUri()
 * @method string getDomainName()
 * @method string getStaticPath()
 * @method string getDynamicCacheControl()
 * @method string getOwnerId()
 */
class SetDynamicConfigRequest extends \RpcAcsRequest
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
            'SetDynamicConfig'
        );
    }

    /**
     * @param string $dynamicOrigin
     *
     * @return $this
     */
    public function setDynamicOrigin($dynamicOrigin)
    {
        $this->requestParameters['DynamicOrigin'] = $dynamicOrigin;
        $this->queryParameters['DynamicOrigin'] = $dynamicOrigin;

        return $this;
    }

    /**
     * @param string $staticType
     *
     * @return $this
     */
    public function setStaticType($staticType)
    {
        $this->requestParameters['StaticType'] = $staticType;
        $this->queryParameters['StaticType'] = $staticType;

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
     * @param string $staticUri
     *
     * @return $this
     */
    public function setStaticUri($staticUri)
    {
        $this->requestParameters['StaticUri'] = $staticUri;
        $this->queryParameters['StaticUri'] = $staticUri;

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
     * @param string $staticPath
     *
     * @return $this
     */
    public function setStaticPath($staticPath)
    {
        $this->requestParameters['StaticPath'] = $staticPath;
        $this->queryParameters['StaticPath'] = $staticPath;

        return $this;
    }

    /**
     * @param string $dynamicCacheControl
     *
     * @return $this
     */
    public function setDynamicCacheControl($dynamicCacheControl)
    {
        $this->requestParameters['DynamicCacheControl'] = $dynamicCacheControl;
        $this->queryParameters['DynamicCacheControl'] = $dynamicCacheControl;

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
