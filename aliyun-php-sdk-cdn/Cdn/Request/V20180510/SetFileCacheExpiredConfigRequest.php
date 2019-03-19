<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetFileCacheExpiredConfig
 *
 * @method string getDomainName()
 * @method string getCacheContent()
 * @method string getOwnerId()
 * @method string getTTL()
 * @method string getConfigId()
 */
class SetFileCacheExpiredConfigRequest extends \RpcAcsRequest
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
            'SetFileCacheExpiredConfig'
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
     * @param string $configId
     *
     * @return $this
     */
    public function setConfigId($configId)
    {
        $this->requestParameters['ConfigId'] = $configId;
        $this->queryParameters['ConfigId'] = $configId;

        return $this;
    }
}
