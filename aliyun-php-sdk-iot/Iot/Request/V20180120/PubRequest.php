<?php

namespace Iot\Request\V20180120;

/**
 * Request of Pub
 *
 * @method string getTopicFullName()
 * @method string getQos()
 * @method string getMessageContent()
 * @method string getProductKey()
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
            'Pub'
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
