<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOTAStaticUpgradeJob
 *
 * @method string getRetryCount()
 * @method string getTimeoutInMinutes()
 * @method string getIotInstanceId()
 * @method string getTargetSelection()
 * @method string getGrayPercent()
 * @method string getFirmwareId()
 * @method string getProductKey()
 * @method string getRetryInterval()
 * @method array getSrcVersions()
 * @method string getScheduleTime()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getMaximumPerMinute()
 * @method array getTargetDeviceNames()
 */
class CreateOTAStaticUpgradeJobRequest extends \RpcAcsRequest
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
            'CreateOTAStaticUpgradeJob',
            'iot'
        );
    }

    /**
     * @param string $retryCount
     *
     * @return $this
     */
    public function setRetryCount($retryCount)
    {
        $this->requestParameters['RetryCount'] = $retryCount;
        $this->queryParameters['RetryCount'] = $retryCount;

        return $this;
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
     * @param string $targetSelection
     *
     * @return $this
     */
    public function setTargetSelection($targetSelection)
    {
        $this->requestParameters['TargetSelection'] = $targetSelection;
        $this->queryParameters['TargetSelection'] = $targetSelection;

        return $this;
    }

    /**
     * @param string $grayPercent
     *
     * @return $this
     */
    public function setGrayPercent($grayPercent)
    {
        $this->requestParameters['GrayPercent'] = $grayPercent;
        $this->queryParameters['GrayPercent'] = $grayPercent;

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
     * @param string $retryInterval
     *
     * @return $this
     */
    public function setRetryInterval($retryInterval)
    {
        $this->requestParameters['RetryInterval'] = $retryInterval;
        $this->queryParameters['RetryInterval'] = $retryInterval;

        return $this;
    }

    /**
     * @param array $srcVersion
     *
     * @return $this
     */
	public function setSrcVersions(array $srcVersion)
	{
	    $this->requestParameters['SrcVersions'] = $srcVersion;
		foreach ($srcVersion as $i => $iValue) {
			$this->queryParameters['SrcVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $scheduleTime
     *
     * @return $this
     */
    public function setScheduleTime($scheduleTime)
    {
        $this->requestParameters['ScheduleTime'] = $scheduleTime;
        $this->queryParameters['ScheduleTime'] = $scheduleTime;

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
     * @param string $maximumPerMinute
     *
     * @return $this
     */
    public function setMaximumPerMinute($maximumPerMinute)
    {
        $this->requestParameters['MaximumPerMinute'] = $maximumPerMinute;
        $this->queryParameters['MaximumPerMinute'] = $maximumPerMinute;

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
