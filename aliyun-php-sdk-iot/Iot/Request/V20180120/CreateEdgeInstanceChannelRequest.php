<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateEdgeInstanceChannel
 *
 * @method array getConfigss()
 * @method string getDriverId()
 * @method string getIotInstanceId()
 * @method string getChannelName()
 * @method string getInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateEdgeInstanceChannelRequest extends \RpcAcsRequest
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
            'CreateEdgeInstanceChannel',
            'iot'
        );
    }

    /**
     * @param array $configs
     *
     * @return $this
     */
	public function setConfigss(array $configs)
	{
	    $this->requestParameters['Configss'] = $configs;
		foreach ($configs as $depth1 => $depth1Value) {
			$this->queryParameters['Configs.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			$this->queryParameters['Configs.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
			$this->queryParameters['Configs.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
		}

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
     * @param string $channelName
     *
     * @return $this
     */
    public function setChannelName($channelName)
    {
        $this->requestParameters['ChannelName'] = $channelName;
        $this->queryParameters['ChannelName'] = $channelName;

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
