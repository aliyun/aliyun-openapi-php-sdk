<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetHttpHeaderConfig
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getHeaderValue()
 * @method string getSecurityToken()
 * @method string getConfigId()
 * @method string getHeaderKey()
 */
class SetHttpHeaderConfigRequest extends \RpcAcsRequest
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
            'SetHttpHeaderConfig'
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
     * @param string $headerValue
     *
     * @return $this
     */
    public function setHeaderValue($headerValue)
    {
        $this->requestParameters['HeaderValue'] = $headerValue;
        $this->queryParameters['HeaderValue'] = $headerValue;

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
     * @param string $configId
     *
     * @return $this
     */
    public function setConfigId($configId)
    {
        $this->requestParameters['ConfigId'] = $configId;
        $this->queryParameters['ConfigId'] = $configId;

        return $this;
    }

    /**
     * @param string $headerKey
     *
     * @return $this
     */
    public function setHeaderKey($headerKey)
    {
        $this->requestParameters['HeaderKey'] = $headerKey;
        $this->queryParameters['HeaderKey'] = $headerKey;

        return $this;
    }
}
