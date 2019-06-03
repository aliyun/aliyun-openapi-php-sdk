<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetUserAlarmThreshold
 *
 * @method string getUid()
 * @method string getAlarmType()
 * @method string getAlarmThresholds()
 * @method string getBid()
 */
class SetUserAlarmThresholdRequest extends \RpcAcsRequest
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
            'BssOpenApi',
            '2017-12-14',
            'SetUserAlarmThreshold'
        );
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->requestParameters['Uid'] = $uid;
        $this->queryParameters['Uid'] = $uid;

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
     * @param string $alarmThresholds
     *
     * @return $this
     */
    public function setAlarmThresholds($alarmThresholds)
    {
        $this->requestParameters['AlarmThresholds'] = $alarmThresholds;
        $this->queryParameters['AlarmThresholds'] = $alarmThresholds;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

        return $this;
    }
}
