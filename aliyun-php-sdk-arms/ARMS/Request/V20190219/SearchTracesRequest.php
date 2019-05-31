<?php

namespace ARMS\Request\V20190219;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SearchTraces
 *
 * @method string getServiceIp()
 * @method string getOperationName()
 * @method string getAppType()
 * @method string getPageSize()
 * @method string getEndTime()
 * @method string getServiceName()
 * @method string getPageIndex()
 * @method string getStartTime()
 * @method array getTags()
 * @method string getReverse()
 * @method string getMinDuration()
 */
class SearchTracesRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-02-19',
            'SearchTraces'
        );
    }

    /**
     * @param string $serviceIp
     *
     * @return $this
     */
    public function setServiceIp($serviceIp)
    {
        $this->requestParameters['ServiceIp'] = $serviceIp;
        $this->queryParameters['ServiceIp'] = $serviceIp;

        return $this;
    }

    /**
     * @param string $operationName
     *
     * @return $this
     */
    public function setOperationName($operationName)
    {
        $this->requestParameters['OperationName'] = $operationName;
        $this->queryParameters['OperationName'] = $operationName;

        return $this;
    }

    /**
     * @param string $appType
     *
     * @return $this
     */
    public function setAppType($appType)
    {
        $this->requestParameters['AppType'] = $appType;
        $this->queryParameters['AppType'] = $appType;

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
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->requestParameters['ServiceName'] = $serviceName;
        $this->queryParameters['ServiceName'] = $serviceName;

        return $this;
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        $this->requestParameters['PageIndex'] = $pageIndex;
        $this->queryParameters['PageIndex'] = $pageIndex;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function setTags(array $tag)
    {
        $this->requestParameters['Tags'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param string $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->requestParameters['Reverse'] = $reverse;
        $this->queryParameters['Reverse'] = $reverse;

        return $this;
    }

    /**
     * @param string $minDuration
     *
     * @return $this
     */
    public function setMinDuration($minDuration)
    {
        $this->requestParameters['MinDuration'] = $minDuration;
        $this->queryParameters['MinDuration'] = $minDuration;

        return $this;
    }
}
