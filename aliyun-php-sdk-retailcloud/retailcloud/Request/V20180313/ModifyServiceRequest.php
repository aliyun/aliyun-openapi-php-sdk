<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyService
 *
 * @method string getName()
 * @method array getPortMappingss()
 * @method string getServiceId()
 */
class ModifyServiceRequest extends \RpcAcsRequest
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
            'ModifyService',
            'retailcloud'
        );
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
     * @param string $serviceId
     *
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->requestParameters['ServiceId'] = $serviceId;
        $this->queryParameters['ServiceId'] = $serviceId;

        return $this;
    }
}
