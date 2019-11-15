<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyHttpHeaderConfig
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getHeaderValue()
 * @method string getSecurityToken()
 * @method string getConfigID()
 * @method string getHeaderKey()
 */
class ModifyHttpHeaderConfigRequest extends \RpcAcsRequest
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
            'ModifyHttpHeaderConfig'
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
     * @param string $configID
     *
     * @return $this
     */
    public function setConfigID($configID)
    {
        $this->requestParameters['ConfigID'] = $configID;
        $this->queryParameters['ConfigID'] = $configID;

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
