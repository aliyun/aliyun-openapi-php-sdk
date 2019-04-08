<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RegisterDevice
 *
 * @method string getPinCode()
 * @method string getIotInstanceId()
 * @method string getNickname()
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getDevEui()
 */
class RegisterDeviceRequest extends \RpcAcsRequest
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
            'RegisterDevice',
            'iot'
        );
    }

    /**
     * @param string $pinCode
     *
     * @return $this
     */
    public function setPinCode($pinCode)
    {
        $this->requestParameters['PinCode'] = $pinCode;
        $this->queryParameters['PinCode'] = $pinCode;

        return $this;
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
     * @param string $nickname
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->requestParameters['Nickname'] = $nickname;
        $this->queryParameters['Nickname'] = $nickname;

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
     * @param string $devEui
     *
     * @return $this
     */
    public function setDevEui($devEui)
    {
        $this->requestParameters['DevEui'] = $devEui;
        $this->queryParameters['DevEui'] = $devEui;

        return $this;
    }
}
