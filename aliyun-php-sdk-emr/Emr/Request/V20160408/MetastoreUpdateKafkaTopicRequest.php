<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreUpdateKafkaTopic
 *
 * @method string getResourceOwnerId()
 * @method string getTopicId()
 * @method array getAdvancedConfigs()
 * @method string getNumPartitions()
 */
class MetastoreUpdateKafkaTopicRequest extends \RpcAcsRequest
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
            'MetastoreUpdateKafkaTopic',
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
     * @param array $advancedConfigs
     *
     * @return $this
     */
    public function setAdvancedConfigs(array $advancedConfigs)
    {
        $this->requestParameters['AdvancedConfigs'] = $advancedConfigs;
        foreach ($advancedConfigs as $i => $iValue) {
            $this->queryParameters['AdvancedConfig.' . ($i + 1) . '.Value'] = $advancedConfigs[$i]['Value'];
            $this->queryParameters['AdvancedConfig.' . ($i + 1) . '.Key'] = $advancedConfigs[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param string $numPartitions
     *
     * @return $this
     */
    public function setNumPartitions($numPartitions)
    {
        $this->requestParameters['NumPartitions'] = $numPartitions;
        $this->queryParameters['NumPartitions'] = $numPartitions;

        return $this;
    }
}
