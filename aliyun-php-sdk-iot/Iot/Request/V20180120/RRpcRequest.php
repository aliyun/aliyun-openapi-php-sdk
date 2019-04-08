<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RRpc
 *
 * @method string getIotInstanceId()
 * @method string getRequestBase64Byte()
 * @method string getTopic()
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getTimeout()
 */
class RRpcRequest extends \RpcAcsRequest
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
            'RRpc',
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
     * @param string $requestBase64Byte
     *
     * @return $this
     */
    public function setRequestBase64Byte($requestBase64Byte)
    {
        $this->requestParameters['RequestBase64Byte'] = $requestBase64Byte;
        $this->queryParameters['RequestBase64Byte'] = $requestBase64Byte;

        return $this;
    }

    /**
     * @param string $topic
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        $this->requestParameters['Topic'] = $topic;
        $this->queryParameters['Topic'] = $topic;

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
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->requestParameters['Timeout'] = $timeout;
        $this->queryParameters['Timeout'] = $timeout;

        return $this;
    }
}
