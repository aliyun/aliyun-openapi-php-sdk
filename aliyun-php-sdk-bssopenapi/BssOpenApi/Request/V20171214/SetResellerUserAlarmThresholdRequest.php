<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetResellerUserAlarmThreshold
 *
 * @method string getAlarmType()
 * @method string getAlarmThresholds()
 * @method string getOwnerId()
 */
class SetResellerUserAlarmThresholdRequest extends \RpcAcsRequest
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
            'SetResellerUserAlarmThreshold',
            'BssOpenApi'
        );
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
}
