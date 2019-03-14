<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreUpdateKafkaTopicBatch
 *
 * @method string getResourceOwnerId()
 * @method array getTopicParams()
 */
class MetastoreUpdateKafkaTopicBatchRequest extends \RpcAcsRequest
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
            'MetastoreUpdateKafkaTopicBatch',
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
     * @param array $topicParams
     *
     * @return $this
     */
    public function setTopicParams(array $topicParams)
    {
        $this->requestParameters['TopicParams'] = $topicParams;
        foreach ($topicParams as $i => $iValue) {
            $this->queryParameters['TopicParam.' . ($i + 1) . '.TopicId'] = $topicParams[$i]['TopicId'];
            $this->queryParameters['TopicParam.' . ($i + 1) . '.NumPartitions'] = $topicParams[$i]['NumPartitions'];
        }

        return $this;
    }
}
