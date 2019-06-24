<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateVodDomain
 *
 * @method string getTopLevelDomain()
 * @method string getSources()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class UpdateVodDomainRequest extends \RpcAcsRequest
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
            'UpdateVodDomain',
            'vod'
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
