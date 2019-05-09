<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateLoRaNodesTask
 *
 * @method string getIotInstanceId()
 * @method string getProductKey()
 * @method array getDeviceInfos()
 */
class CreateLoRaNodesTaskRequest extends \RpcAcsRequest
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
            'CreateLoRaNodesTask',
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
     * @param array $deviceInfo
     *
     * @return $this
     */
    public function setDeviceInfos(array $deviceInfo)
    {
        $this->requestParameters['DeviceInfos'] = $deviceInfo;
        foreach ($deviceInfo as $depth1 => $depth1Value) {
            $this->queryParameters['DeviceInfo.' . ($depth1 + 1) . '.PinCode'] = $depth1Value['PinCode'];
            $this->queryParameters['DeviceInfo.' . ($depth1 + 1) . '.DevEui'] = $depth1Value['DevEui'];
        }

        return $this;
    }
}
