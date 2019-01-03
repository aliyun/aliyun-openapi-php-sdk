<?php

namespace dcdn\Request\V20180115;

/**
 * Request of DescribeDcdnUserDomains
 *
 * @method string getFuncFilter()
 * @method string getCheckDomainShow()
 * @method string getResourceGroupId()
 * @method string getSecurityToken()
 * @method string getPageSize()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getFuncId()
 * @method string getPageNumber()
 * @method string getDomainStatus()
 * @method string getDomainSearchType()
 */
class DescribeDcdnUserDomainsRequest extends \RpcAcsRequest
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
            'dcdn',
            '2018-01-15',
            'DescribeDcdnUserDomains',
            'dcdn'
        );
    }

    /**
     * @param string $funcFilter
     *
     * @return $this
     */
    public function setFuncFilter($funcFilter)
    {
        $this->requestParameters['FuncFilter'] = $funcFilter;
        $this->queryParameters['FuncFilter'] = $funcFilter;

        return $this;
    }

    /**
     * @param string $checkDomainShow
     *
     * @return $this
     */
    public function setCheckDomainShow($checkDomainShow)
    {
        $this->requestParameters['CheckDomainShow'] = $checkDomainShow;
        $this->queryParameters['CheckDomainShow'] = $checkDomainShow;

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
     * @param string $funcId
     *
     * @return $this
     */
    public function setFuncId($funcId)
    {
        $this->requestParameters['FuncId'] = $funcId;
        $this->queryParameters['FuncId'] = $funcId;

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
