<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PubBroadcast
 *
 * @method string getTopicFullName()
 * @method string getMessageContent()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 */
class PubBroadcastRequest extends \RpcAcsRequest
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
            'PubBroadcast',
            'iot'
        );
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
}
