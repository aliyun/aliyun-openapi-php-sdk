<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeUsageBill
 *
 * @method string getTotalCount()
 * @method string getCurrentPage()
 * @method string getType()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getDay()
 */
class DescribeUsageBillRequest extends \RpcAcsRequest
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
            'DescribeUsageBill',
            'green'
        );
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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

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
     * @param string $day
     *
     * @return $this
     */
    public function setDay($day)
    {
        $this->requestParameters['Day'] = $day;
        $this->queryParameters['Day'] = $day;

        return $this;
    }
}
