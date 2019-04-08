<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateTopicRouteTable
 *
 * @method array getDstTopics()
 * @method string getIotInstanceId()
 * @method string getSrcTopic()
 */
class CreateTopicRouteTableRequest extends \RpcAcsRequest
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
            'CreateTopicRouteTable',
            'iot'
        );
    }

    /**
     * @param array $dstTopic
     *
     * @return $this
     */
    public function setDstTopics(array $dstTopic)
    {
        $this->requestParameters['DstTopics'] = $dstTopic;
        foreach ($dstTopic as $i => $iValue) {
            $this->queryParameters['DstTopic.' . ($i + 1)] = $iValue;
        }

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
     * @param string $srcTopic
     *
     * @return $this
     */
    public function setSrcTopic($srcTopic)
    {
        $this->requestParameters['SrcTopic'] = $srcTopic;
        $this->queryParameters['SrcTopic'] = $srcTopic;

        return $this;
    }
}
