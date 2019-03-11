<?php

namespace Push\Request\V20160801;

/**
 * Request of CheckDevices
 *
 * @method string getDeviceIds()
 * @method string getAppKey()
 */
class CheckDevicesRequest extends \RpcAcsRequest
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
            'Push',
            '2016-08-01',
            'CheckDevices'
        );
    }

    /**
     * @param string $deviceIds
     *
     * @return $this
     */
    public function setDeviceIds($deviceIds)
    {
        $this->requestParameters['DeviceIds'] = $deviceIds;
        $this->queryParameters['DeviceIds'] = $deviceIds;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->requestParameters['AppKey'] = $appKey;
        $this->queryParameters['AppKey'] = $appKey;

        return $this;
    }
}
