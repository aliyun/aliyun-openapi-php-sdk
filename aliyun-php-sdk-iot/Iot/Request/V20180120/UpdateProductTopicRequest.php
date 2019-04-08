<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateProductTopic
 *
 * @method string getTopicId()
 * @method string getIotInstanceId()
 * @method string getOperation()
 * @method string getTopicShortName()
 * @method string getDesc()
 */
class UpdateProductTopicRequest extends \RpcAcsRequest
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
            'UpdateProductTopic',
            'iot'
        );
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
     * @param string $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->requestParameters['Operation'] = $operation;
        $this->queryParameters['Operation'] = $operation;

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
     * @param string $desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->requestParameters['Desc'] = $desc;
        $this->queryParameters['Desc'] = $desc;

        return $this;
    }
}
