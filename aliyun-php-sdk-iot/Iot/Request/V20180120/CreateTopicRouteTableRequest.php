<?php

namespace Iot\Request\V20180120;

/**
 * Request of CreateTopicRouteTable
 *
 * @method array getDstTopics()
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
            'CreateTopicRouteTable'
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
