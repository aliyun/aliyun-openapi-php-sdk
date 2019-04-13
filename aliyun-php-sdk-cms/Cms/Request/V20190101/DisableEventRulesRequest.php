<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DisableEventRules
 *
 * @method array getRuleNamess()
 */
class DisableEventRulesRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cms',
            '2019-01-01',
            'DisableEventRules',
            'cms'
        );
    }

    /**
     * @param array $ruleNames
     *
     * @return $this
     */
    public function setRuleNamess(array $ruleNames)
    {
        $this->requestParameters['RuleNamess'] = $ruleNames;
        foreach ($ruleNames as $i => $iValue) {
            $this->queryParameters['RuleNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
