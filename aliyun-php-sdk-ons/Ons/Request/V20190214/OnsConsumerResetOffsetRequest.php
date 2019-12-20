<?php

namespace Ons\Request\V20190214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of OnsConsumerResetOffset
 *
 * @method string getGroupId()
 * @method string getResetTimestamp()
 * @method string getType()
 * @method string getInstanceId()
 * @method string getTopic()
 */
class OnsConsumerResetOffsetRequest extends \RpcAcsRequest
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
            'OnsConsumerResetOffset',
            'ons'
        );
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $resetTimestamp
     *
     * @return $this
     */
    public function setResetTimestamp($resetTimestamp)
    {
        $this->requestParameters['ResetTimestamp'] = $resetTimestamp;
        $this->queryParameters['ResetTimestamp'] = $resetTimestamp;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

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
