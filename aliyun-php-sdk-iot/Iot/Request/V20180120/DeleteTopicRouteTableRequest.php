<?php

namespace Iot\Request\V20180120;

/**
 * Request of DeleteTopicRouteTable
 *
 * @method array getDstTopics()
 * @method string getSrcTopic()
 */
class DeleteTopicRouteTableRequest extends \RpcAcsRequest
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
            'DeleteTopicRouteTable'
        );
    }

    /**
     * @param array $dstTopics
     *
     * @return $this
     */
    public function setDstTopics(array $dstTopics)
    {
        $this->requestParameters['DstTopics'] = $dstTopics;
        foreach ($dstTopics as $i => $iValue) {
            $this->queryParameters['DstTopic.' . ($i + 1)] = $iValue;
        }

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
