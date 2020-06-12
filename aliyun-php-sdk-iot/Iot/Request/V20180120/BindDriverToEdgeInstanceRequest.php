<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BindDriverToEdgeInstance
 *
 * @method string getDriverId()
 * @method string getIotInstanceId()
 * @method string getDriverVersion()
 * @method string getOrderId()
 * @method string getInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BindDriverToEdgeInstanceRequest extends \RpcAcsRequest
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
            'BindDriverToEdgeInstance',
            'iot'
        );
    }

    /**
     * @param string $driverId
     *
     * @return $this
     */
    public function setDriverId($driverId)
    {
        $this->requestParameters['DriverId'] = $driverId;
        $this->queryParameters['DriverId'] = $driverId;

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
     * @param string $driverVersion
     *
     * @return $this
     */
    public function setDriverVersion($driverVersion)
    {
        $this->requestParameters['DriverVersion'] = $driverVersion;
        $this->queryParameters['DriverVersion'] = $driverVersion;

        return $this;
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->requestParameters['OrderId'] = $orderId;
        $this->queryParameters['OrderId'] = $orderId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

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
