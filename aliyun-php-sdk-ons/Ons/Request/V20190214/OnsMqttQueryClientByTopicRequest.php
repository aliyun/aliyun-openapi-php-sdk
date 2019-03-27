<?php

namespace Ons\Request\V20190214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of OnsMqttQueryClientByTopic
 *
 * @method string getPreventCache()
 * @method string getInstanceId()
 * @method string getParentTopic()
 * @method string getSubTopic()
 */
class OnsMqttQueryClientByTopicRequest extends \RpcAcsRequest
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
            'OnsMqttQueryClientByTopic',
            'ons'
        );
    }

    /**
     * @param string $preventCache
     *
     * @return $this
     */
    public function setPreventCache($preventCache)
    {
        $this->requestParameters['PreventCache'] = $preventCache;
        $this->queryParameters['PreventCache'] = $preventCache;

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
     * @param string $parentTopic
     *
     * @return $this
     */
    public function setParentTopic($parentTopic)
    {
        $this->requestParameters['ParentTopic'] = $parentTopic;
        $this->queryParameters['ParentTopic'] = $parentTopic;

        return $this;
    }

    /**
     * @param string $subTopic
     *
     * @return $this
     */
    public function setSubTopic($subTopic)
    {
        $this->requestParameters['SubTopic'] = $subTopic;
        $this->queryParameters['SubTopic'] = $subTopic;

        return $this;
    }
}
