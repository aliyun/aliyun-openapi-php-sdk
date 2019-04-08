<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchRegisterDeviceWithApplyId
 *
 * @method string getApplyId()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 */
class BatchRegisterDeviceWithApplyIdRequest extends \RpcAcsRequest
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
            'BatchRegisterDeviceWithApplyId',
            'iot'
        );
    }

    /**
     * @param string $applyId
     *
     * @return $this
     */
    public function setApplyId($applyId)
    {
        $this->requestParameters['ApplyId'] = $applyId;
        $this->queryParameters['ApplyId'] = $applyId;

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
}
