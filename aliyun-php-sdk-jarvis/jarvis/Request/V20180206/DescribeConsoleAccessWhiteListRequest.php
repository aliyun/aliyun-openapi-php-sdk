<?php

namespace jarvis\Request\V20180206;

/**
 * Request of DescribeConsoleAccessWhiteList
 *
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getqueryProduct()
 * @method string getCurrentPage()
 * @method string getWhiteListType()
 * @method string getDstIP()
 * @method string getLang()
 * @method string getStatus()
 * @method string getSourceCode()
 */
class DescribeConsoleAccessWhiteListRequest extends \RpcAcsRequest
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
            'jarvis',
            '2018-02-06',
            'DescribeConsoleAccessWhiteList',
            'jarvis'
        );
    }

    /**
     * @param string $srcIP
     *
     * @return $this
     */
    public function setSrcIP($srcIP)
    {
        $this->requestParameters['SrcIP'] = $srcIP;
        $this->queryParameters['SrcIP'] = $srcIP;

        return $this;
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
     * @param string $queryProduct
     *
     * @return $this
     */
    public function setqueryProduct($queryProduct)
    {
        $this->requestParameters['queryProduct'] = $queryProduct;
        $this->queryParameters['queryProduct'] = $queryProduct;

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
     * @param string $whiteListType
     *
     * @return $this
     */
    public function setWhiteListType($whiteListType)
    {
        $this->requestParameters['WhiteListType'] = $whiteListType;
        $this->queryParameters['WhiteListType'] = $whiteListType;

        return $this;
    }

    /**
     * @param string $dstIP
     *
     * @return $this
     */
    public function setDstIP($dstIP)
    {
        $this->requestParameters['DstIP'] = $dstIP;
        $this->queryParameters['DstIP'] = $dstIP;

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
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        $this->requestParameters['SourceCode'] = $sourceCode;
        $this->queryParameters['SourceCode'] = $sourceCode;

        return $this;
    }
}
