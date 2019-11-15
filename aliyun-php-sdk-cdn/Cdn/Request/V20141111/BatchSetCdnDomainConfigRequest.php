<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchSetCdnDomainConfig
 *
 * @method string getFunctions()
 * @method string getDomainNames()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSecurityToken()
 */
class BatchSetCdnDomainConfigRequest extends \RpcAcsRequest
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
            'BatchSetCdnDomainConfig'
        );
    }

    /**
     * @param string $functions
     *
     * @return $this
     */
    public function setFunctions($functions)
    {
        $this->requestParameters['Functions'] = $functions;
        $this->queryParameters['Functions'] = $functions;

        return $this;
    }

    /**
     * @param string $domainNames
     *
     * @return $this
     */
    public function setDomainNames($domainNames)
    {
        $this->requestParameters['DomainNames'] = $domainNames;
        $this->queryParameters['DomainNames'] = $domainNames;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

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
}
