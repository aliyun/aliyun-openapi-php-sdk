<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeviceBatchCreate
 *
 * @method string getSn()
 * @method string getDeviceType()
 */
class DeviceBatchCreateRequest extends \RpcAcsRequest
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
            'DeviceBatchCreate',
            'cloudwf'
        );
    }

    /**
     * @param string $sn
     *
     * @return $this
     */
    public function setSn($sn)
    {
        $this->requestParameters['Sn'] = $sn;
        $this->queryParameters['Sn'] = $sn;

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
}
