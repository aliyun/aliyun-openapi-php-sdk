<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryAdvancedDomainList
 *
 * @method string getProductDomainType()
 * @method string getPageNum()
 * @method string getExcluded()
 * @method string getStartLength()
 * @method string getExcludedSuffix()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getExcludedPrefix()
 * @method string getKeyWord()
 * @method string getProductDomainTypeSort()
 * @method string getEndExpirationDate()
 * @method string getSuffixs()
 * @method string getDomainNameSort()
 * @method string getExpirationDateSort()
 * @method string getStartExpirationDate()
 * @method string getDomainStatus()
 * @method string getDomainGroupId()
 * @method string getKeyWordSuffix()
 * @method string getKeyWordPrefix()
 * @method string getTradeType()
 * @method string getEndRegistrationDate()
 * @method string getForm()
 * @method string getUserClientIp()
 * @method string getRegistrationDateSort()
 * @method string getStartRegistrationDate()
 * @method string getEndLength()
 */
class QueryAdvancedDomainListRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-01-29',
            'QueryAdvancedDomainList'
        );
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
     * @param string $excluded
     *
     * @return $this
     */
    public function setExcluded($excluded)
    {
        $this->requestParameters['Excluded'] = $excluded;
        $this->queryParameters['Excluded'] = $excluded;

        return $this;
    }

    /**
     * @param string $startLength
     *
     * @return $this
     */
    public function setStartLength($startLength)
    {
        $this->requestParameters['StartLength'] = $startLength;
        $this->queryParameters['StartLength'] = $startLength;

        return $this;
    }

    /**
     * @param string $excludedSuffix
     *
     * @return $this
     */
    public function setExcludedSuffix($excludedSuffix)
    {
        $this->requestParameters['ExcludedSuffix'] = $excludedSuffix;
        $this->queryParameters['ExcludedSuffix'] = $excludedSuffix;

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
     * @param string $excludedPrefix
     *
     * @return $this
     */
    public function setExcludedPrefix($excludedPrefix)
    {
        $this->requestParameters['ExcludedPrefix'] = $excludedPrefix;
        $this->queryParameters['ExcludedPrefix'] = $excludedPrefix;

        return $this;
    }

    /**
     * @param string $keyWord
     *
     * @return $this
     */
    public function setKeyWord($keyWord)
    {
        $this->requestParameters['KeyWord'] = $keyWord;
        $this->queryParameters['KeyWord'] = $keyWord;

        return $this;
    }

    /**
     * @param string $productDomainTypeSort
     *
     * @return $this
     */
    public function setProductDomainTypeSort($productDomainTypeSort)
    {
        $this->requestParameters['ProductDomainTypeSort'] = $productDomainTypeSort;
        $this->queryParameters['ProductDomainTypeSort'] = $productDomainTypeSort;

        return $this;
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
     * @param string $suffixs
     *
     * @return $this
     */
    public function setSuffixs($suffixs)
    {
        $this->requestParameters['Suffixs'] = $suffixs;
        $this->queryParameters['Suffixs'] = $suffixs;

        return $this;
    }

    /**
     * @param string $domainNameSort
     *
     * @return $this
     */
    public function setDomainNameSort($domainNameSort)
    {
        $this->requestParameters['DomainNameSort'] = $domainNameSort;
        $this->queryParameters['DomainNameSort'] = $domainNameSort;

        return $this;
    }

    /**
     * @param string $expirationDateSort
     *
     * @return $this
     */
    public function setExpirationDateSort($expirationDateSort)
    {
        $this->requestParameters['ExpirationDateSort'] = $expirationDateSort;
        $this->queryParameters['ExpirationDateSort'] = $expirationDateSort;

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
     * @param string $domainGroupId
     *
     * @return $this
     */
    public function setDomainGroupId($domainGroupId)
    {
        $this->requestParameters['DomainGroupId'] = $domainGroupId;
        $this->queryParameters['DomainGroupId'] = $domainGroupId;

        return $this;
    }

    /**
     * @param string $keyWordSuffix
     *
     * @return $this
     */
    public function setKeyWordSuffix($keyWordSuffix)
    {
        $this->requestParameters['KeyWordSuffix'] = $keyWordSuffix;
        $this->queryParameters['KeyWordSuffix'] = $keyWordSuffix;

        return $this;
    }

    /**
     * @param string $keyWordPrefix
     *
     * @return $this
     */
    public function setKeyWordPrefix($keyWordPrefix)
    {
        $this->requestParameters['KeyWordPrefix'] = $keyWordPrefix;
        $this->queryParameters['KeyWordPrefix'] = $keyWordPrefix;

        return $this;
    }

    /**
     * @param string $tradeType
     *
     * @return $this
     */
    public function setTradeType($tradeType)
    {
        $this->requestParameters['TradeType'] = $tradeType;
        $this->queryParameters['TradeType'] = $tradeType;

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
     * @param string $form
     *
     * @return $this
     */
    public function setForm($form)
    {
        $this->requestParameters['Form'] = $form;
        $this->queryParameters['Form'] = $form;

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
     * @param string $registrationDateSort
     *
     * @return $this
     */
    public function setRegistrationDateSort($registrationDateSort)
    {
        $this->requestParameters['RegistrationDateSort'] = $registrationDateSort;
        $this->queryParameters['RegistrationDateSort'] = $registrationDateSort;

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

    /**
     * @param string $endLength
     *
     * @return $this
     */
    public function setEndLength($endLength)
    {
        $this->requestParameters['EndLength'] = $endLength;
        $this->queryParameters['EndLength'] = $endLength;

        return $this;
    }
}
