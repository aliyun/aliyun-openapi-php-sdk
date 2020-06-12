<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateEdgeDriverVersion
 *
 * @method string getConfigCheckRule()
 * @method string getArgument()
 * @method string getEdgeVersion()
 * @method string getDescription()
 * @method string getDriverId()
 * @method string getIotInstanceId()
 * @method string getContainerConfig()
 * @method string getDriverVersion()
 * @method string getDriverConfig()
 * @method string getSourceConfig()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateEdgeDriverVersionRequest extends \RpcAcsRequest
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
            'UpdateEdgeDriverVersion',
            'iot'
        );
    }

    /**
     * @param string $configCheckRule
     *
     * @return $this
     */
    public function setConfigCheckRule($configCheckRule)
    {
        $this->requestParameters['ConfigCheckRule'] = $configCheckRule;
        $this->queryParameters['ConfigCheckRule'] = $configCheckRule;

        return $this;
    }

    /**
     * @param string $argument
     *
     * @return $this
     */
    public function setArgument($argument)
    {
        $this->requestParameters['Argument'] = $argument;
        $this->queryParameters['Argument'] = $argument;

        return $this;
    }

    /**
     * @param string $edgeVersion
     *
     * @return $this
     */
    public function setEdgeVersion($edgeVersion)
    {
        $this->requestParameters['EdgeVersion'] = $edgeVersion;
        $this->queryParameters['EdgeVersion'] = $edgeVersion;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
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
     * @param string $containerConfig
     *
     * @return $this
     */
    public function setContainerConfig($containerConfig)
    {
        $this->requestParameters['ContainerConfig'] = $containerConfig;
        $this->queryParameters['ContainerConfig'] = $containerConfig;

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
     * @param string $driverConfig
     *
     * @return $this
     */
    public function setDriverConfig($driverConfig)
    {
        $this->requestParameters['DriverConfig'] = $driverConfig;
        $this->queryParameters['DriverConfig'] = $driverConfig;

        return $this;
    }

    /**
     * @param string $sourceConfig
     *
     * @return $this
     */
    public function setSourceConfig($sourceConfig)
    {
        $this->requestParameters['SourceConfig'] = $sourceConfig;
        $this->queryParameters['SourceConfig'] = $sourceConfig;

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
