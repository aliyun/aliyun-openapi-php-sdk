<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchPub
 *
 * @method string getMessageContent()
 * @method string getQos()
 * @method string getIotInstanceId()
 * @method string getTopicShortName()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceNames()
 */
class BatchPubRequest extends \RpcAcsRequest
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
            'BatchPub',
            'iot'
        );
    }

    /**
     * @param string $messageContent
     *
     * @return $this
     */
    public function setMessageContent($messageContent)
    {
        $this->requestParameters['MessageContent'] = $messageContent;
        $this->queryParameters['MessageContent'] = $messageContent;

        return $this;
    }

    /**
     * @param string $qos
     *
     * @return $this
     */
    public function setQos($qos)
    {
        $this->requestParameters['Qos'] = $qos;
        $this->queryParameters['Qos'] = $qos;

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
     * @param string $topicShortName
     *
     * @return $this
     */
    public function setTopicShortName($topicShortName)
    {
        $this->requestParameters['TopicShortName'] = $topicShortName;
        $this->queryParameters['TopicShortName'] = $topicShortName;

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
