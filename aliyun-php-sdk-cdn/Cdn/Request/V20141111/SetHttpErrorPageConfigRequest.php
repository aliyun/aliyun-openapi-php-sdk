<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetHttpErrorPageConfig
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getSecurityToken()
 * @method string getPageUrl()
 * @method string getErrorCode()
 */
class SetHttpErrorPageConfigRequest extends \RpcAcsRequest
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
            'SetHttpErrorPageConfig'
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
     * @param string $pageUrl
     *
     * @return $this
     */
    public function setPageUrl($pageUrl)
    {
        $this->requestParameters['PageUrl'] = $pageUrl;
        $this->queryParameters['PageUrl'] = $pageUrl;

        return $this;
    }

    /**
     * @param string $errorCode
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->requestParameters['ErrorCode'] = $errorCode;
        $this->queryParameters['ErrorCode'] = $errorCode;

        return $this;
    }
}
