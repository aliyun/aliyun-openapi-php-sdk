<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddVodDomain
 *
 * @method string getSources()
 * @method string getSecurityToken()
 * @method string getOwnerAccount()
 * @method string getScope()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getCheckUrl()
 */
class AddVodDomainRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'AddVodDomain',
            'vod'
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
}
