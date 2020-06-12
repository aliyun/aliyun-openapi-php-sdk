<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CancelOTATaskByDevice
 *
 * @method string getJobId()
 * @method string getIotInstanceId()
 * @method string getFirmwareId()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceNames()
 */
class CancelOTATaskByDeviceRequest extends \RpcAcsRequest
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
            'CancelOTATaskByDevice',
            'iot'
        );
    }

    /**
     * @param string $jobId
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->requestParameters['JobId'] = $jobId;
        $this->queryParameters['JobId'] = $jobId;

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
     * @param string $firmwareId
     *
     * @return $this
     */
    public function setFirmwareId($firmwareId)
    {
        $this->requestParameters['FirmwareId'] = $firmwareId;
        $this->queryParameters['FirmwareId'] = $firmwareId;

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

    /**
     * @param array $deviceName
     *
     * @return $this
     */
	public function setDeviceNames(array $deviceName)
	{
	    $this->requestParameters['DeviceNames'] = $deviceName;
		foreach ($deviceName as $i => $iValue) {
			$this->queryParameters['DeviceName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
