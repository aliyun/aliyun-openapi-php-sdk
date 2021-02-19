<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of Pub
 *
 * @method array getUserProps()
 * @method string getMessageContent()
 * @method string getQos()
 * @method string getCorrelationData()
 * @method string getIotInstanceId()
 * @method string getResponseTopic()
 * @method string getTopicFullName()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class PubRequest extends \RpcAcsRequest
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
            'Pub',
            'iot'
        );
    }

    /**
     * @param array $userProp
     *
     * @return $this
     */
	public function setUserProps(array $userProp)
	{
	    $this->requestParameters['UserProps'] = $userProp;
		foreach ($userProp as $depth1 => $depth1Value) {
			$this->queryParameters['UserProp.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->queryParameters['UserProp.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
		}

		return $this;
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
     * @param string $correlationData
     *
     * @return $this
     */
    public function setCorrelationData($correlationData)
    {
        $this->requestParameters['CorrelationData'] = $correlationData;
        $this->queryParameters['CorrelationData'] = $correlationData;

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
     * @param string $responseTopic
     *
     * @return $this
     */
    public function setResponseTopic($responseTopic)
    {
        $this->requestParameters['ResponseTopic'] = $responseTopic;
        $this->queryParameters['ResponseTopic'] = $responseTopic;

        return $this;
    }

    /**
     * @param string $topicFullName
     *
     * @return $this
     */
    public function setTopicFullName($topicFullName)
    {
        $this->requestParameters['TopicFullName'] = $topicFullName;
        $this->queryParameters['TopicFullName'] = $topicFullName;

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
}
