<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeCustomMetricList
 *
 * @method string getGroupId()
 * @method string getPageSize()
 * @method string getMetricName()
 * @method string getDimension()
 * @method string getPageNumber()
 * @method string getMd5()
 */
class DescribeCustomMetricListRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'DescribeCustomMetricList',
            'cms'
        );
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

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
     * @param string $metricName
     *
     * @return $this
     */
    public function setMetricName($metricName)
    {
        $this->requestParameters['MetricName'] = $metricName;
        $this->queryParameters['MetricName'] = $metricName;

        return $this;
    }

    /**
     * @param string $dimension
     *
     * @return $this
     */
    public function setDimension($dimension)
    {
        $this->requestParameters['Dimension'] = $dimension;
        $this->queryParameters['Dimension'] = $dimension;

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
     * @param string $md5
     *
     * @return $this
     */
    public function setMd5($md5)
    {
        $this->requestParameters['Md5'] = $md5;
        $this->queryParameters['Md5'] = $md5;

        return $this;
    }
}
