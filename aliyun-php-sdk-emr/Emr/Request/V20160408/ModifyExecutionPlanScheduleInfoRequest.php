<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyExecutionPlanScheduleInfo
 *
 * @method string getResourceOwnerId()
 * @method string getTimeInterval()
 * @method string getDayOfWeek()
 * @method string getId()
 * @method string getStartTime()
 * @method string getStrategy()
 * @method string getTimeUnit()
 * @method string getDayOfMonth()
 */
class ModifyExecutionPlanScheduleInfoRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'ModifyExecutionPlanScheduleInfo',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $timeInterval
     *
     * @return $this
     */
    public function setTimeInterval($timeInterval)
    {
        $this->requestParameters['TimeInterval'] = $timeInterval;
        $this->queryParameters['TimeInterval'] = $timeInterval;

        return $this;
    }

    /**
     * @param string $dayOfWeek
     *
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->requestParameters['DayOfWeek'] = $dayOfWeek;
        $this->queryParameters['DayOfWeek'] = $dayOfWeek;

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
     * @param string $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->requestParameters['Strategy'] = $strategy;
        $this->queryParameters['Strategy'] = $strategy;

        return $this;
    }

    /**
     * @param string $timeUnit
     *
     * @return $this
     */
    public function setTimeUnit($timeUnit)
    {
        $this->requestParameters['TimeUnit'] = $timeUnit;
        $this->queryParameters['TimeUnit'] = $timeUnit;

        return $this;
    }

    /**
     * @param string $dayOfMonth
     *
     * @return $this
     */
    public function setDayOfMonth($dayOfMonth)
    {
        $this->requestParameters['DayOfMonth'] = $dayOfMonth;
        $this->queryParameters['DayOfMonth'] = $dayOfMonth;

        return $this;
    }
}
