<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreCreateKafkaTopic
 *
 * @method string getResourceOwnerId()
 * @method string getDataSourceId()
 * @method string getTopicName()
 * @method array getAdvancedConfigs()
 * @method string getNumPartitions()
 * @method string getReplicationFactor()
 */
class MetastoreCreateKafkaTopicRequest extends \RpcAcsRequest
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
            'MetastoreCreateKafkaTopic',
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
     * @param string $dataSourceId
     *
     * @return $this
     */
    public function setDataSourceId($dataSourceId)
    {
        $this->requestParameters['DataSourceId'] = $dataSourceId;
        $this->queryParameters['DataSourceId'] = $dataSourceId;

        return $this;
    }

    /**
     * @param string $topicName
     *
     * @return $this
     */
    public function setTopicName($topicName)
    {
        $this->requestParameters['TopicName'] = $topicName;
        $this->queryParameters['TopicName'] = $topicName;

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

    /**
     * @param string $replicationFactor
     *
     * @return $this
     */
    public function setReplicationFactor($replicationFactor)
    {
        $this->requestParameters['ReplicationFactor'] = $replicationFactor;
        $this->queryParameters['ReplicationFactor'] = $replicationFactor;

        return $this;
    }
}
