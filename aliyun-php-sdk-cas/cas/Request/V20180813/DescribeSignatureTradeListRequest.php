<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSignatureTradeList
 *
 * @method string getSourceIp()
 * @method string getShowSize()
 * @method string getSearchType()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getSearchValue()
 */
class DescribeSignatureTradeListRequest extends \RpcAcsRequest
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
            'cas',
            '2018-08-13',
            'DescribeSignatureTradeList',
            'cas_esign_fdd'
        );
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $showSize
     *
     * @return $this
     */
    public function setShowSize($showSize)
    {
        $this->requestParameters['ShowSize'] = $showSize;
        $this->queryParameters['ShowSize'] = $showSize;

        return $this;
    }

    /**
     * @param string $searchType
     *
     * @return $this
     */
    public function setSearchType($searchType)
    {
        $this->requestParameters['SearchType'] = $searchType;
        $this->queryParameters['SearchType'] = $searchType;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

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
     * @param string $searchValue
     *
     * @return $this
     */
    public function setSearchValue($searchValue)
    {
        $this->requestParameters['SearchValue'] = $searchValue;
        $this->queryParameters['SearchValue'] = $searchValue;

        return $this;
    }
}
