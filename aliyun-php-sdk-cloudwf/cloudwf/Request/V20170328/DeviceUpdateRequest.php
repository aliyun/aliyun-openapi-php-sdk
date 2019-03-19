<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeviceUpdate
 *
 * @method string getDevicePosition()
 * @method string getDeviceName()
 * @method string getDid()
 */
class DeviceUpdateRequest extends \RpcAcsRequest
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
            'DeviceUpdate',
            'cloudwf'
        );
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
     * @param string $did
     *
     * @return $this
     */
    public function setDid($did)
    {
        $this->requestParameters['Did'] = $did;
        $this->queryParameters['Did'] = $did;

        return $this;
    }
}
