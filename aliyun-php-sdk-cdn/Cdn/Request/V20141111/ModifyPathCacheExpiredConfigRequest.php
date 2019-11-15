<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyPathCacheExpiredConfig
 *
 * @method string getDomainName()
 * @method string getWeight()
 * @method string getCacheContent()
 * @method string getOwnerId()
 * @method string getTTL()
 * @method string getSecurityToken()
 * @method string getConfigID()
 */
class ModifyPathCacheExpiredConfigRequest extends \RpcAcsRequest
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
            'ModifyPathCacheExpiredConfig'
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
     * @param string $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->requestParameters['Weight'] = $weight;
        $this->queryParameters['Weight'] = $weight;

        return $this;
    }

    /**
     * @param string $cacheContent
     *
     * @return $this
     */
    public function setCacheContent($cacheContent)
    {
        $this->requestParameters['CacheContent'] = $cacheContent;
        $this->queryParameters['CacheContent'] = $cacheContent;

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
     * @param string $tTL
     *
     * @return $this
     */
    public function setTTL($tTL)
    {
        $this->requestParameters['TTL'] = $tTL;
        $this->queryParameters['TTL'] = $tTL;

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
}
