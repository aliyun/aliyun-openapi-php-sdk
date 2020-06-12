<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchSetEdgeInstanceDeviceConfig
 *
 * @method array getDeviceConfigss()
 * @method string getIotInstanceId()
 * @method string getInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchSetEdgeInstanceDeviceConfigRequest extends \RpcAcsRequest
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
            'BatchSetEdgeInstanceDeviceConfig',
            'iot'
        );
    }

    /**
     * @param array $deviceConfigs
     *
     * @return $this
     */
	public function setDeviceConfigss(array $deviceConfigs)
	{
	    $this->requestParameters['DeviceConfigss'] = $deviceConfigs;
		foreach ($deviceConfigs as $depth1 => $depth1Value) {
			$this->queryParameters['DeviceConfigs.' . ($depth1 + 1) . '.IotId'] = $depth1Value['IotId'];
			$this->queryParameters['DeviceConfigs.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
		}

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
