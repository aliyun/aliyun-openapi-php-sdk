<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeLiveUserDomains
 *
 * @method string getSecurityToken()
 * @method string getPageSize()
 * @method string getDomainName()
 * @method string getRegionName()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getDomainStatus()
 * @method string getLiveDomainType()
 * @method string getDomainSearchType()
 */
class DescribeLiveUserDomainsRequest extends \RpcAcsRequest
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
            'DescribeLiveUserDomains',
            'live'
        );
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
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

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
     * @param string $regionName
     *
     * @return $this
     */
    public function setRegionName($regionName)
    {
        $this->requestParameters['RegionName'] = $regionName;
        $this->queryParameters['RegionName'] = $regionName;

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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $domainStatus
     *
     * @return $this
     */
    public function setDomainStatus($domainStatus)
    {
        $this->requestParameters['DomainStatus'] = $domainStatus;
        $this->queryParameters['DomainStatus'] = $domainStatus;

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

    /**
     * @param string $domainSearchType
     *
     * @return $this
     */
    public function setDomainSearchType($domainSearchType)
    {
        $this->requestParameters['DomainSearchType'] = $domainSearchType;
        $this->queryParameters['DomainSearchType'] = $domainSearchType;

        return $this;
    }
}
