<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateProductTopic
 *
 * @method string getIotInstanceId()
 * @method string getProductKey()
 * @method string getTopicShortName()
 * @method string getOperation()
 * @method string getDesc()
 */
class CreateProductTopicRequest extends \RpcAcsRequest
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
            'CreateProductTopic',
            'iot'
        );
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
