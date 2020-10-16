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
 * @method string getScheduleFinishTime()
 * @method array getTags()
 * @method string getGrayPercent()
 * @method string getDnListFileUrl()
 * @method string getFirmwareId()
 * @method string getProductKey()
 * @method string getRetryInterval()
 * @method array getSrcVersions()
 * @method string getScheduleTime()
 * @method string getOverwriteMode()
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
     * @param string $scheduleFinishTime
     *
     * @return $this
     */
    public function setScheduleFinishTime($scheduleFinishTime)
    {
        $this->requestParameters['ScheduleFinishTime'] = $scheduleFinishTime;
        $this->queryParameters['ScheduleFinishTime'] = $scheduleFinishTime;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function setTags(array $tag)
	{
	    $this->requestParameters['Tags'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
		}

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
     * @param string $dnListFileUrl
     *
     * @return $this
     */
    public function setDnListFileUrl($dnListFileUrl)
    {
        $this->requestParameters['DnListFileUrl'] = $dnListFileUrl;
        $this->queryParameters['DnListFileUrl'] = $dnListFileUrl;

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
     * @param string $overwriteMode
     *
     * @return $this
     */
    public function setOverwriteMode($overwriteMode)
    {
        $this->requestParameters['OverwriteMode'] = $overwriteMode;
        $this->queryParameters['OverwriteMode'] = $overwriteMode;

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
