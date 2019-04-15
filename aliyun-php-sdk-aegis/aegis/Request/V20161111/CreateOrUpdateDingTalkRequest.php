<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOrUpdateDingTalk
 *
 * @method string getRuleActionName()
 * @method string getSourceIp()
 * @method string getSendUrl()
 * @method string getId()
 * @method string getIntervalTime()
 */
class CreateOrUpdateDingTalkRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'CreateOrUpdateDingTalk',
            'vipaegis'
        );
    }

    /**
     * @param string $ruleActionName
     *
     * @return $this
     */
    public function setRuleActionName($ruleActionName)
    {
        $this->requestParameters['RuleActionName'] = $ruleActionName;
        $this->queryParameters['RuleActionName'] = $ruleActionName;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $sendUrl
     *
     * @return $this
     */
    public function setSendUrl($sendUrl)
    {
        $this->requestParameters['SendUrl'] = $sendUrl;
        $this->queryParameters['SendUrl'] = $sendUrl;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }

    /**
     * @param string $intervalTime
     *
     * @return $this
     */
    public function setIntervalTime($intervalTime)
    {
        $this->requestParameters['IntervalTime'] = $intervalTime;
        $this->queryParameters['IntervalTime'] = $intervalTime;

        return $this;
    }
}
