<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetRemoveQueryStringConfig
 *
 * @method string getKeepOssArgs()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getSecurityToken()
 * @method string getAliRemoveArgs()
 */
class SetRemoveQueryStringConfigRequest extends \RpcAcsRequest
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
            'SetRemoveQueryStringConfig'
        );
    }

    /**
     * @param string $keepOssArgs
     *
     * @return $this
     */
    public function setKeepOssArgs($keepOssArgs)
    {
        $this->requestParameters['KeepOssArgs'] = $keepOssArgs;
        $this->queryParameters['KeepOssArgs'] = $keepOssArgs;

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
     * @param string $aliRemoveArgs
     *
     * @return $this
     */
    public function setAliRemoveArgs($aliRemoveArgs)
    {
        $this->requestParameters['AliRemoveArgs'] = $aliRemoveArgs;
        $this->queryParameters['AliRemoveArgs'] = $aliRemoveArgs;

        return $this;
    }
}
