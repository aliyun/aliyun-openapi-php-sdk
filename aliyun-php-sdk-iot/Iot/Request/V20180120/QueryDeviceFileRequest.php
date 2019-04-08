<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryDeviceFile
 *
 * @method string getIotId()
 * @method string getIotInstanceId()
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getFileId()
 */
class QueryDeviceFileRequest extends \RpcAcsRequest
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
            'QueryDeviceFile',
            'iot'
        );
    }

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function setIotId($iotId)
    {
        $this->requestParameters['IotId'] = $iotId;
        $this->queryParameters['IotId'] = $iotId;

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
     * @param string $fileId
     *
     * @return $this
     */
    public function setFileId($fileId)
    {
        $this->requestParameters['FileId'] = $fileId;
        $this->queryParameters['FileId'] = $fileId;

        return $this;
    }
}
