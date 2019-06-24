<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeVodStorageData
 *
 * @method string getStartTime()
 * @method string getStorage()
 * @method string getStorageType()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getRegion()
 */
class DescribeVodStorageDataRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'DescribeVodStorageData',
            'vod'
        );
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
     * @param string $storage
     *
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->requestParameters['Storage'] = $storage;
        $this->queryParameters['Storage'] = $storage;

        return $this;
    }

    /**
     * @param string $storageType
     *
     * @return $this
     */
    public function setStorageType($storageType)
    {
        $this->requestParameters['StorageType'] = $storageType;
        $this->queryParameters['StorageType'] = $storageType;

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
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }
}
