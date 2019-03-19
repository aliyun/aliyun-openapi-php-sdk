<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeviceCreate
 *
 * @method string getDeviceNum()
 * @method string getDevicePosition()
 * @method string getDeviceName()
 * @method string getDeviceType()
 * @method string getSid()
 */
class DeviceCreateRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'DeviceCreate',
            'cloudwf'
        );
    }

    /**
     * @param string $deviceNum
     *
     * @return $this
     */
    public function setDeviceNum($deviceNum)
    {
        $this->requestParameters['DeviceNum'] = $deviceNum;
        $this->queryParameters['DeviceNum'] = $deviceNum;

        return $this;
    }

    /**
     * @param string $devicePosition
     *
     * @return $this
     */
    public function setDevicePosition($devicePosition)
    {
        $this->requestParameters['DevicePosition'] = $devicePosition;
        $this->queryParameters['DevicePosition'] = $devicePosition;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->requestParameters['DeviceName'] = $deviceName;
        $this->queryParameters['DeviceName'] = $deviceName;

        return $this;
    }

    /**
     * @param string $deviceType
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->requestParameters['DeviceType'] = $deviceType;
        $this->queryParameters['DeviceType'] = $deviceType;

        return $this;
    }

    /**
     * @param string $sid
     *
     * @return $this
     */
    public function setSid($sid)
    {
        $this->requestParameters['Sid'] = $sid;
        $this->queryParameters['Sid'] = $sid;

        return $this;
    }
}
