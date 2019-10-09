<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeKeyword
 *
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getKeyword()
 * @method string getTotalCount()
 * @method string getKeywordLibId()
 * @method string getCurrentPage()
 */
class DescribeKeywordRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'DescribeKeyword',
            'green'
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
     * @param string $keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->requestParameters['Keyword'] = $keyword;
        $this->queryParameters['Keyword'] = $keyword;

        return $this;
    }

    /**
     * @param string $totalCount
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->requestParameters['TotalCount'] = $totalCount;
        $this->queryParameters['TotalCount'] = $totalCount;

        return $this;
    }

    /**
     * @param string $keywordLibId
     *
     * @return $this
     */
    public function setKeywordLibId($keywordLibId)
    {
        $this->requestParameters['KeywordLibId'] = $keywordLibId;
        $this->queryParameters['KeywordLibId'] = $keywordLibId;

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
}
