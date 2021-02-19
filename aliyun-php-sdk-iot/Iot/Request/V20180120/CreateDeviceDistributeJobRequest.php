<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDeviceDistributeJob
 *
 * @method string getCaptcha()
 * @method string getSourceInstanceId()
 * @method string getTargetAliyunId()
 * @method array getTargetInstanceConfigs()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceNames()
 * @method string getTargetUid()
 * @method string getStrategy()
 */
class CreateDeviceDistributeJobRequest extends \RpcAcsRequest
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
            'CreateDeviceDistributeJob',
            'iot'
        );
    }

    /**
     * @param string $captcha
     *
     * @return $this
     */
    public function setCaptcha($captcha)
    {
        $this->requestParameters['Captcha'] = $captcha;
        $this->queryParameters['Captcha'] = $captcha;

        return $this;
    }

    /**
     * @param string $sourceInstanceId
     *
     * @return $this
     */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->requestParameters['SourceInstanceId'] = $sourceInstanceId;
        $this->queryParameters['SourceInstanceId'] = $sourceInstanceId;

        return $this;
    }

    /**
     * @param string $targetAliyunId
     *
     * @return $this
     */
    public function setTargetAliyunId($targetAliyunId)
    {
        $this->requestParameters['TargetAliyunId'] = $targetAliyunId;
        $this->queryParameters['TargetAliyunId'] = $targetAliyunId;

        return $this;
    }

    /**
     * @param array $targetInstanceConfig
     *
     * @return $this
     */
	public function setTargetInstanceConfigs(array $targetInstanceConfig)
	{
	    $this->requestParameters['TargetInstanceConfigs'] = $targetInstanceConfig;
		foreach ($targetInstanceConfig as $depth1 => $depth1Value) {
			$this->queryParameters['TargetInstanceConfig.' . ($depth1 + 1) . '.TargetInstanceId'] = $depth1Value['TargetInstanceId'];
		}

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

    /**
     * @param string $targetUid
     *
     * @return $this
     */
    public function setTargetUid($targetUid)
    {
        $this->requestParameters['TargetUid'] = $targetUid;
        $this->queryParameters['TargetUid'] = $targetUid;

        return $this;
    }

    /**
     * @param string $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->requestParameters['Strategy'] = $strategy;
        $this->queryParameters['Strategy'] = $strategy;

        return $this;
    }
}
