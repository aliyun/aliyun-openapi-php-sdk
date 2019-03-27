<?php

namespace Ons\Request\V20190214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of OnsWarnCreate
 *
 * @method string getPreventCache()
 * @method string getInstanceId()
 * @method string getBlockTime()
 * @method string getLevel()
 * @method string getGroupId()
 * @method string getDelayTime()
 * @method string getTopic()
 * @method string getThreshold()
 * @method string getAlertTime()
 * @method string getContacts()
 */
class OnsWarnCreateRequest extends \RpcAcsRequest
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
            'OnsWarnCreate',
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
     * @param string $blockTime
     *
     * @return $this
     */
    public function setBlockTime($blockTime)
    {
        $this->requestParameters['BlockTime'] = $blockTime;
        $this->queryParameters['BlockTime'] = $blockTime;

        return $this;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->requestParameters['Level'] = $level;
        $this->queryParameters['Level'] = $level;

        return $this;
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
     * @param string $delayTime
     *
     * @return $this
     */
    public function setDelayTime($delayTime)
    {
        $this->requestParameters['DelayTime'] = $delayTime;
        $this->queryParameters['DelayTime'] = $delayTime;

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

    /**
     * @param string $threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->requestParameters['Threshold'] = $threshold;
        $this->queryParameters['Threshold'] = $threshold;

        return $this;
    }

    /**
     * @param string $alertTime
     *
     * @return $this
     */
    public function setAlertTime($alertTime)
    {
        $this->requestParameters['AlertTime'] = $alertTime;
        $this->queryParameters['AlertTime'] = $alertTime;

        return $this;
    }

    /**
     * @param string $contacts
     *
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->requestParameters['Contacts'] = $contacts;
        $this->queryParameters['Contacts'] = $contacts;

        return $this;
    }
}
