<?php

namespace Push\Request\V20160801;

/**
 * Request of UnbindPhone
 *
 * @method string getAppKey()
 * @method string getDeviceId()
 */
class UnbindPhoneRequest extends \RpcAcsRequest
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
            'UnbindPhone'
        );
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

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->requestParameters['DeviceId'] = $deviceId;
        $this->queryParameters['DeviceId'] = $deviceId;

        return $this;
    }
}
