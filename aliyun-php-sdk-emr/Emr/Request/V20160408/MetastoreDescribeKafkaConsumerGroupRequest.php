<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreDescribeKafkaConsumerGroup
 *
 * @method string getResourceOwnerId()
 * @method string getTopicId()
 * @method string getConsumerGroupId()
 */
class MetastoreDescribeKafkaConsumerGroupRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'MetastoreDescribeKafkaConsumerGroup',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $topicId
     *
     * @return $this
     */
    public function setTopicId($topicId)
    {
        $this->requestParameters['TopicId'] = $topicId;
        $this->queryParameters['TopicId'] = $topicId;

        return $this;
    }

    /**
     * @param string $consumerGroupId
     *
     * @return $this
     */
    public function setConsumerGroupId($consumerGroupId)
    {
        $this->requestParameters['ConsumerGroupId'] = $consumerGroupId;
        $this->queryParameters['ConsumerGroupId'] = $consumerGroupId;

        return $this;
    }
}
