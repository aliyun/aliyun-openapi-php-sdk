<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyCdnDomain
 *
 * @method string getTopLevelDomain()
 * @method string getSources()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getResourceGroupId()
 * @method string getSecurityToken()
 */
class ModifyCdnDomainRequest extends \RpcAcsRequest
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
            'ModifyCdnDomain'
        );
    }

    /**
     * @param string $topLevelDomain
     *
     * @return $this
     */
    public function setTopLevelDomain($topLevelDomain)
    {
        $this->requestParameters['TopLevelDomain'] = $topLevelDomain;
        $this->queryParameters['TopLevelDomain'] = $topLevelDomain;

        return $this;
    }

    /**
     * @param string $sources
     *
     * @return $this
     */
    public function setSources($sources)
    {
        $this->requestParameters['Sources'] = $sources;
        $this->queryParameters['Sources'] = $sources;

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
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

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
