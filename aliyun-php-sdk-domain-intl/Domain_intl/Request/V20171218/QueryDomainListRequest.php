<?php

namespace Domain_intl\Request\V20171218;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryDomainList
 *
 * @method string getEndExpirationDate()
 * @method string getProductDomainType()
 * @method string getOrderKeyType()
 * @method string getDomainName()
 * @method string getStartExpirationDate()
 * @method string getPageNum()
 * @method string getOrderByType()
 * @method string getEndRegistrationDate()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getQueryType()
 * @method string getStartRegistrationDate()
 */
class QueryDomainListRequest extends \RpcAcsRequest
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
            'Domain-intl',
            '2017-12-18',
            'QueryDomainList',
            'domain'
        );
    }

    /**
     * @param string $endExpirationDate
     *
     * @return $this
     */
    public function setEndExpirationDate($endExpirationDate)
    {
        $this->requestParameters['EndExpirationDate'] = $endExpirationDate;
        $this->queryParameters['EndExpirationDate'] = $endExpirationDate;

        return $this;
    }

    /**
     * @param string $productDomainType
     *
     * @return $this
     */
    public function setProductDomainType($productDomainType)
    {
        $this->requestParameters['ProductDomainType'] = $productDomainType;
        $this->queryParameters['ProductDomainType'] = $productDomainType;

        return $this;
    }

    /**
     * @param string $orderKeyType
     *
     * @return $this
     */
    public function setOrderKeyType($orderKeyType)
    {
        $this->requestParameters['OrderKeyType'] = $orderKeyType;
        $this->queryParameters['OrderKeyType'] = $orderKeyType;

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
     * @param string $startExpirationDate
     *
     * @return $this
     */
    public function setStartExpirationDate($startExpirationDate)
    {
        $this->requestParameters['StartExpirationDate'] = $startExpirationDate;
        $this->queryParameters['StartExpirationDate'] = $startExpirationDate;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $orderByType
     *
     * @return $this
     */
    public function setOrderByType($orderByType)
    {
        $this->requestParameters['OrderByType'] = $orderByType;
        $this->queryParameters['OrderByType'] = $orderByType;

        return $this;
    }

    /**
     * @param string $endRegistrationDate
     *
     * @return $this
     */
    public function setEndRegistrationDate($endRegistrationDate)
    {
        $this->requestParameters['EndRegistrationDate'] = $endRegistrationDate;
        $this->queryParameters['EndRegistrationDate'] = $endRegistrationDate;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

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
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $queryType
     *
     * @return $this
     */
    public function setQueryType($queryType)
    {
        $this->requestParameters['QueryType'] = $queryType;
        $this->queryParameters['QueryType'] = $queryType;

        return $this;
    }

    /**
     * @param string $startRegistrationDate
     *
     * @return $this
     */
    public function setStartRegistrationDate($startRegistrationDate)
    {
        $this->requestParameters['StartRegistrationDate'] = $startRegistrationDate;
        $this->queryParameters['StartRegistrationDate'] = $startRegistrationDate;

        return $this;
    }
}
