<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TransformClientId
 *
 * @method string getAuthConfig()
 * @method string getClientId()
 * @method string getIotId()
 * @method string getIotInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class TransformClientIdRequest extends \RpcAcsRequest
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
            'TransformClientId',
            'iot'
        );
    }

    /**
     * @param string $authConfig
     *
     * @return $this
     */
    public function setAuthConfig($authConfig)
    {
        $this->requestParameters['AuthConfig'] = $authConfig;
        $this->queryParameters['AuthConfig'] = $authConfig;

        return $this;
    }

    /**
     * @param string $clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->requestParameters['ClientId'] = $clientId;
        $this->queryParameters['ClientId'] = $clientId;

        return $this;
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
}
