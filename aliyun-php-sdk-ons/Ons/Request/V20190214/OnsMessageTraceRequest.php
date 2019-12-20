<?php

namespace Ons\Request\V20190214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of OnsMessageTrace
 *
 * @method string getMsgId()
 * @method string getInstanceId()
 * @method string getTopic()
 */
class OnsMessageTraceRequest extends \RpcAcsRequest
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
            'Ons',
            '2019-02-14',
            'OnsMessageTrace',
            'ons'
        );
    }

    /**
     * @param string $msgId
     *
     * @return $this
     */
    public function setMsgId($msgId)
    {
        $this->requestParameters['MsgId'] = $msgId;
        $this->queryParameters['MsgId'] = $msgId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $topic
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        $this->requestParameters['Topic'] = $topic;
        $this->queryParameters['Topic'] = $topic;

        return $this;
    }
}
