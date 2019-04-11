<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DisableMetricRules
 *
 * @method array getRuleIds()
 */
class DisableMetricRulesRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'DisableMetricRules',
            'cms'
        );
    }

    /**
     * @param array $ruleId
     *
     * @return $this
     */
    public function setRuleIds(array $ruleId)
    {
        $this->requestParameters['RuleIds'] = $ruleId;
        foreach ($ruleId as $i => $iValue) {
            $this->queryParameters['RuleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
