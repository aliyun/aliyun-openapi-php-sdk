<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateEdgeDriver
 *
 * @method string getDriverProtocol()
 * @method string getDriverName()
 * @method string getIsBuiltIn()
 * @method string getIotInstanceId()
 * @method string getRuntime()
 * @method string getApiProduct()
 * @method string getCpuArch()
 * @method string getApiRevision()
 */
class CreateEdgeDriverRequest extends \RpcAcsRequest
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
            'CreateEdgeDriver',
            'iot'
        );
    }

    /**
     * @param string $driverProtocol
     *
     * @return $this
     */
    public function setDriverProtocol($driverProtocol)
    {
        $this->requestParameters['DriverProtocol'] = $driverProtocol;
        $this->queryParameters['DriverProtocol'] = $driverProtocol;

        return $this;
    }

    /**
     * @param string $driverName
     *
     * @return $this
     */
    public function setDriverName($driverName)
    {
        $this->requestParameters['DriverName'] = $driverName;
        $this->queryParameters['DriverName'] = $driverName;

        return $this;
    }

    /**
     * @param string $isBuiltIn
     *
     * @return $this
     */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->requestParameters['IsBuiltIn'] = $isBuiltIn;
        $this->queryParameters['IsBuiltIn'] = $isBuiltIn;

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
     * @param string $runtime
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->requestParameters['Runtime'] = $runtime;
        $this->queryParameters['Runtime'] = $runtime;

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
     * @param string $cpuArch
     *
     * @return $this
     */
    public function setCpuArch($cpuArch)
    {
        $this->requestParameters['CpuArch'] = $cpuArch;
        $this->queryParameters['CpuArch'] = $cpuArch;

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
