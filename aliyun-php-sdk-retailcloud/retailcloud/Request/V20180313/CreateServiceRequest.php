<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateService
 *
 * @method string getHeadless()
 * @method string getServiceType()
 * @method string getK8sServiceId()
 * @method string getName()
 * @method array getPortMappingss()
 * @method string getEnvId()
 */
class CreateServiceRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'CreateService',
            'retailcloud'
        );
    }

    /**
     * @param string $headless
     *
     * @return $this
     */
    public function setHeadless($headless)
    {
        $this->requestParameters['Headless'] = $headless;
        $this->queryParameters['Headless'] = $headless;

        return $this;
    }

    /**
     * @param string $serviceType
     *
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->requestParameters['ServiceType'] = $serviceType;
        $this->queryParameters['ServiceType'] = $serviceType;

        return $this;
    }

    /**
     * @param string $k8sServiceId
     *
     * @return $this
     */
    public function setK8sServiceId($k8sServiceId)
    {
        $this->requestParameters['K8sServiceId'] = $k8sServiceId;
        $this->queryParameters['K8sServiceId'] = $k8sServiceId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param array $portMappings
     *
     * @return $this
     */
	public function setPortMappingss(array $portMappings)
	{
	    $this->requestParameters['PortMappingss'] = $portMappings;
		foreach ($portMappings as $depth1 => $depth1Value) {
			$this->queryParameters['PortMappings.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			$this->queryParameters['PortMappings.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			$this->queryParameters['PortMappings.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			$this->queryParameters['PortMappings.' . ($depth1 + 1) . '.NodePort'] = $depth1Value['NodePort'];
			$this->queryParameters['PortMappings.' . ($depth1 + 1) . '.TargetPort'] = $depth1Value['TargetPort'];
		}

		return $this;
    }

    /**
     * @param string $envId
     *
     * @return $this
     */
    public function setEnvId($envId)
    {
        $this->requestParameters['EnvId'] = $envId;
        $this->queryParameters['EnvId'] = $envId;

        return $this;
    }
}
