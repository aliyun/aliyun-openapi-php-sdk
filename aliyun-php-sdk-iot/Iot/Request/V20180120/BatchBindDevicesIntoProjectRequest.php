<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchBindDevicesIntoProject
 *
 * @method string getIotInstanceId()
 * @method string getProjectId()
 * @method array getDevicess()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchBindDevicesIntoProjectRequest extends \RpcAcsRequest
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
            'BatchBindDevicesIntoProject',
            'iot'
        );
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
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param array $devices
     *
     * @return $this
     */
	public function setDevicess(array $devices)
	{
	    $this->requestParameters['Devicess'] = $devices;
		foreach ($devices as $depth1 => $depth1Value) {
			$this->queryParameters['Devices.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			$this->queryParameters['Devices.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
		}

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
