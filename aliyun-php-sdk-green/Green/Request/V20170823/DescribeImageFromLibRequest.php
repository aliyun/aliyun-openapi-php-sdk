<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeImageFromLib
 *
 * @method string getStartDate()
 * @method string getSourceIp()
 * @method string getImageLibId()
 * @method string getPageSize()
 * @method string getId()
 * @method string getTotalCount()
 * @method string getCurrentPage()
 * @method string getEndDate()
 */
class DescribeImageFromLibRequest extends \RpcAcsRequest
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
            'DescribeImageFromLib',
            'green'
        );
    }

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->requestParameters['StartDate'] = $startDate;
        $this->queryParameters['StartDate'] = $startDate;

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
     * @param string $imageLibId
     *
     * @return $this
     */
    public function setImageLibId($imageLibId)
    {
        $this->requestParameters['ImageLibId'] = $imageLibId;
        $this->queryParameters['ImageLibId'] = $imageLibId;

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
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

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
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->requestParameters['EndDate'] = $endDate;
        $this->queryParameters['EndDate'] = $endDate;

        return $this;
    }
}
