<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOTAVerifyJob
 *
 * @method string getTimeoutInMinutes()
 * @method string getIotInstanceId()
 * @method string getFirmwareId()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getTargetDeviceNames()
 */
class CreateOTAVerifyJobRequest extends \RpcAcsRequest
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
            'CreateOTAVerifyJob',
            'iot'
        );
    }

    /**
     * @param string $timeoutInMinutes
     *
     * @return $this
     */
    public function setTimeoutInMinutes($timeoutInMinutes)
    {
        $this->requestParameters['TimeoutInMinutes'] = $timeoutInMinutes;
        $this->queryParameters['TimeoutInMinutes'] = $timeoutInMinutes;

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
     * @param array $targetDeviceName
     *
     * @return $this
     */
	public function setTargetDeviceNames(array $targetDeviceName)
	{
	    $this->requestParameters['TargetDeviceNames'] = $targetDeviceName;
		foreach ($targetDeviceName as $i => $iValue) {
			$this->queryParameters['TargetDeviceName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
