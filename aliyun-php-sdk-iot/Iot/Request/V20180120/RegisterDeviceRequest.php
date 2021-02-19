<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RegisterDevice
 *
 * @method string getRealTenantId()
 * @method string getRealTripartiteKey()
 * @method string getLoraNodeType()
 * @method string getIotInstanceId()
 * @method string getNickname()
 * @method string getPinCode()
 * @method string getProductKey()
 * @method string getDevEui()
 * @method string getJoinEui()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method string getAppKey()
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
     * @param string $realTenantId
     *
     * @return $this
     */
    public function setRealTenantId($realTenantId)
    {
        $this->requestParameters['RealTenantId'] = $realTenantId;
        $this->queryParameters['RealTenantId'] = $realTenantId;

        return $this;
    }

    /**
     * @param string $realTripartiteKey
     *
     * @return $this
     */
    public function setRealTripartiteKey($realTripartiteKey)
    {
        $this->requestParameters['RealTripartiteKey'] = $realTripartiteKey;
        $this->queryParameters['RealTripartiteKey'] = $realTripartiteKey;

        return $this;
    }

    /**
     * @param string $loraNodeType
     *
     * @return $this
     */
    public function setLoraNodeType($loraNodeType)
    {
        $this->requestParameters['LoraNodeType'] = $loraNodeType;
        $this->queryParameters['LoraNodeType'] = $loraNodeType;

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

    /**
     * @param string $joinEui
     *
     * @return $this
     */
    public function setJoinEui($joinEui)
    {
        $this->requestParameters['JoinEui'] = $joinEui;
        $this->queryParameters['JoinEui'] = $joinEui;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

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
