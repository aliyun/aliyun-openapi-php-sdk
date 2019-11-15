<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyCdnDomain
 *
 * @method string getSources()
 * @method string getSourcePort()
 * @method string getResourceGroupId()
 * @method string getPriorities()
 * @method string getSecurityToken()
 * @method string getSourceType()
 * @method string getTopLevelDomain()
 * @method string getDomainName()
 * @method string getOwnerId()
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
            '2014-11-11',
            'ModifyCdnDomain'
        );
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
     * @param string $sourcePort
     *
     * @return $this
     */
    public function setSourcePort($sourcePort)
    {
        $this->requestParameters['SourcePort'] = $sourcePort;
        $this->queryParameters['SourcePort'] = $sourcePort;

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
     * @param string $priorities
     *
     * @return $this
     */
    public function setPriorities($priorities)
    {
        $this->requestParameters['Priorities'] = $priorities;
        $this->queryParameters['Priorities'] = $priorities;

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
     * @param string $sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->requestParameters['SourceType'] = $sourceType;
        $this->queryParameters['SourceType'] = $sourceType;

        return $this;
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
}
