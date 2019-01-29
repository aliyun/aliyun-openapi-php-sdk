<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of DescribeAlarms
 *
 * @method string getErrorType()
 * @method string getToAlarmTime()
 * @method string getAlarmType()
 * @method string getFromAlarmTime()
 * @method string getAlarmId()
 * @method string getPageSize()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getAlarmStatus()
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
            'cloudesl',
            '2018-08-01',
            'DescribeAlarms'
        );
    }

    /**
     * @param string $errorType
     *
     * @return $this
     */
    public function setErrorType($errorType)
    {
        $this->requestParameters['ErrorType'] = $errorType;
        $this->queryParameters['ErrorType'] = $errorType;

        return $this;
    }

    /**
     * @param string $toAlarmTime
     *
     * @return $this
     */
    public function setToAlarmTime($toAlarmTime)
    {
        $this->requestParameters['ToAlarmTime'] = $toAlarmTime;
        $this->queryParameters['ToAlarmTime'] = $toAlarmTime;

        return $this;
    }

    /**
     * @param string $alarmType
     *
     * @return $this
     */
    public function setAlarmType($alarmType)
    {
        $this->requestParameters['AlarmType'] = $alarmType;
        $this->queryParameters['AlarmType'] = $alarmType;

        return $this;
    }

    /**
     * @param string $fromAlarmTime
     *
     * @return $this
     */
    public function setFromAlarmTime($fromAlarmTime)
    {
        $this->requestParameters['FromAlarmTime'] = $fromAlarmTime;
        $this->queryParameters['FromAlarmTime'] = $fromAlarmTime;

        return $this;
    }

    /**
     * @param string $alarmId
     *
     * @return $this
     */
    public function setAlarmId($alarmId)
    {
        $this->requestParameters['AlarmId'] = $alarmId;
        $this->queryParameters['AlarmId'] = $alarmId;

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
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->requestParameters['StoreId'] = $storeId;
        $this->queryParameters['StoreId'] = $storeId;

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
     * @param string $alarmStatus
     *
     * @return $this
     */
    public function setAlarmStatus($alarmStatus)
    {
        $this->requestParameters['AlarmStatus'] = $alarmStatus;
        $this->queryParameters['AlarmStatus'] = $alarmStatus;

        return $this;
    }
}
