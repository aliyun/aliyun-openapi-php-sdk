<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddLiveDomain
 *
 * @method string getTopLevelDomain()
 * @method string getSecurityToken()
 * @method string getOwnerAccount()
 * @method string getScope()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getCheckUrl()
 * @method string getLiveDomainType()
 */
class AddLiveDomainRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'AddLiveDomain',
            'live'
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
     * @param string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->requestParameters['Scope'] = $scope;
        $this->queryParameters['Scope'] = $scope;

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
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }

    /**
     * @param string $checkUrl
     *
     * @return $this
     */
    public function setCheckUrl($checkUrl)
    {
        $this->requestParameters['CheckUrl'] = $checkUrl;
        $this->queryParameters['CheckUrl'] = $checkUrl;

        return $this;
    }

    /**
     * @param string $liveDomainType
     *
     * @return $this
     */
    public function setLiveDomainType($liveDomainType)
    {
        $this->requestParameters['LiveDomainType'] = $liveDomainType;
        $this->queryParameters['LiveDomainType'] = $liveDomainType;

        return $this;
    }
}
