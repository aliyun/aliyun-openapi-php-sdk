<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeMonitoringAgentHosts
 *
 * @method string getHostName()
 * @method string getInstanceIds()
 * @method string getInstanceRegionId()
 * @method string getPageSize()
 * @method string getKeyWord()
 * @method string getSerialNumbers()
 * @method string getPageNumber()
 */
class DescribeMonitoringAgentHostsRequest extends \RpcAcsRequest
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
            'DescribeMonitoringAgentHosts',
            'cms'
        );
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds($instanceIds)
    {
        $this->requestParameters['InstanceIds'] = $instanceIds;
        $this->queryParameters['InstanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $instanceRegionId
     *
     * @return $this
     */
    public function setInstanceRegionId($instanceRegionId)
    {
        $this->requestParameters['InstanceRegionId'] = $instanceRegionId;
        $this->queryParameters['InstanceRegionId'] = $instanceRegionId;

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
     * @param string $serialNumbers
     *
     * @return $this
     */
    public function setSerialNumbers($serialNumbers)
    {
        $this->requestParameters['SerialNumbers'] = $serialNumbers;
        $this->queryParameters['SerialNumbers'] = $serialNumbers;

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
}
