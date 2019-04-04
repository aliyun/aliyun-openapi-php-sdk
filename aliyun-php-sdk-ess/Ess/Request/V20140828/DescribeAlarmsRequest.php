<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeAlarms
 *
 * @method string getIsEnable()
 * @method string getMetricType()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getPageSize()
 * @method string getState()
 * @method string getOwnerId()
 * @method string getAlarmTaskId()
 * @method string getPageNumber()
 */
class DescribeAlarmsRequest extends \RpcAcsRequest
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
            'Ess',
            '2014-08-28',
            'DescribeAlarms',
            'ess'
        );
    }

    /**
     * @param string $isEnable
     *
     * @return $this
     */
    public function setIsEnable($isEnable)
    {
        $this->requestParameters['IsEnable'] = $isEnable;
        $this->queryParameters['IsEnable'] = $isEnable;

        return $this;
    }

    /**
     * @param string $metricType
     *
     * @return $this
     */
    public function setMetricType($metricType)
    {
        $this->requestParameters['MetricType'] = $metricType;
        $this->queryParameters['MetricType'] = $metricType;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->requestParameters['ScalingGroupId'] = $scalingGroupId;
        $this->queryParameters['ScalingGroupId'] = $scalingGroupId;

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
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->requestParameters['State'] = $state;
        $this->queryParameters['State'] = $state;

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
     * @param string $alarmTaskId
     *
     * @return $this
     */
    public function setAlarmTaskId($alarmTaskId)
    {
        $this->requestParameters['AlarmTaskId'] = $alarmTaskId;
        $this->queryParameters['AlarmTaskId'] = $alarmTaskId;

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
