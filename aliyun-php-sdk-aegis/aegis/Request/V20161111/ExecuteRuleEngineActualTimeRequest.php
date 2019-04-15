<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ExecuteRuleEngineActualTime
 *
 * @method string getSourceIp()
 * @method string getRuleId()
 * @method string getMessage()
 */
class ExecuteRuleEngineActualTimeRequest extends \RpcAcsRequest
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
            'ExecuteRuleEngineActualTime',
            'vipaegis'
        );
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
     * @param string $ruleId
     *
     * @return $this
     */
    public function setRuleId($ruleId)
    {
        $this->requestParameters['RuleId'] = $ruleId;
        $this->queryParameters['RuleId'] = $ruleId;

        return $this;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->requestParameters['Message'] = $message;
        $this->queryParameters['Message'] = $message;

        return $this;
    }
}
