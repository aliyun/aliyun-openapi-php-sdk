<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetDevicesProperty
 *
 * @method string getIotInstanceId()
 * @method array getDeviceNames()
 * @method string getProductKey()
 * @method string getItems()
 */
class SetDevicesPropertyRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'SetDevicesProperty',
            'iot'
        );
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param array $deviceName
     *
     * @return $this
     */
    public function setDeviceNames(array $deviceName)
    {
        $this->requestParameters['DeviceNames'] = $deviceName;
        foreach ($deviceName as $i => $iValue) {
            $this->queryParameters['DeviceName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        $this->requestParameters['ProductKey'] = $productKey;
        $this->queryParameters['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->requestParameters['Items'] = $items;
        $this->queryParameters['Items'] = $items;

        return $this;
    }
}
