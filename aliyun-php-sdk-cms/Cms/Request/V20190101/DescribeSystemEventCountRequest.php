<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSystemEventCount
 *
 * @method string getProduct()
 * @method string getLevel()
 * @method string getGroupId()
 * @method string getName()
 * @method string getEndTime()
 * @method string getEventType()
 * @method string getStartTime()
 * @method string getSearchKeywords()
 * @method string getStatus()
 */
class DescribeSystemEventCountRequest extends \RpcAcsRequest
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
            'DescribeSystemEventCount',
            'cms'
        );
    }

    /**
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->requestParameters['Product'] = $product;
        $this->queryParameters['Product'] = $product;

        return $this;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->requestParameters['Level'] = $level;
        $this->queryParameters['Level'] = $level;

        return $this;
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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->requestParameters['EventType'] = $eventType;
        $this->queryParameters['EventType'] = $eventType;

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
     * @param string $searchKeywords
     *
     * @return $this
     */
    public function setSearchKeywords($searchKeywords)
    {
        $this->requestParameters['SearchKeywords'] = $searchKeywords;
        $this->queryParameters['SearchKeywords'] = $searchKeywords;

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
}
