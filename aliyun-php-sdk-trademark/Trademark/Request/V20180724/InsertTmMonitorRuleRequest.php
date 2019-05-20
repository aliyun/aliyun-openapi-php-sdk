<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InsertTmMonitorRule
 *
 * @method string getStartApplyDate()
 * @method string getNotifyStatus()
 * @method string getRuleType()
 * @method string getRuleSource()
 * @method string getRuleName()
 * @method string getEndApplyDate()
 * @method string getClassification()
 * @method string getRuleKeyword()
 */
class InsertTmMonitorRuleRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'InsertTmMonitorRule',
            'trademark'
        );
    }

    /**
     * @param string $startApplyDate
     *
     * @return $this
     */
    public function setStartApplyDate($startApplyDate)
    {
        $this->requestParameters['StartApplyDate'] = $startApplyDate;
        $this->queryParameters['StartApplyDate'] = $startApplyDate;

        return $this;
    }

    /**
     * @param string $notifyStatus
     *
     * @return $this
     */
    public function setNotifyStatus($notifyStatus)
    {
        $this->requestParameters['NotifyStatus'] = $notifyStatus;
        $this->queryParameters['NotifyStatus'] = $notifyStatus;

        return $this;
    }

    /**
     * @param string $ruleType
     *
     * @return $this
     */
    public function setRuleType($ruleType)
    {
        $this->requestParameters['RuleType'] = $ruleType;
        $this->queryParameters['RuleType'] = $ruleType;

        return $this;
    }

    /**
     * @param string $ruleSource
     *
     * @return $this
     */
    public function setRuleSource($ruleSource)
    {
        $this->requestParameters['RuleSource'] = $ruleSource;
        $this->queryParameters['RuleSource'] = $ruleSource;

        return $this;
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        $this->requestParameters['RuleName'] = $ruleName;
        $this->queryParameters['RuleName'] = $ruleName;

        return $this;
    }

    /**
     * @param string $endApplyDate
     *
     * @return $this
     */
    public function setEndApplyDate($endApplyDate)
    {
        $this->requestParameters['EndApplyDate'] = $endApplyDate;
        $this->queryParameters['EndApplyDate'] = $endApplyDate;

        return $this;
    }

    /**
     * @param string $classification
     *
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->requestParameters['Classification'] = $classification;
        $this->queryParameters['Classification'] = $classification;

        return $this;
    }

    /**
     * @param string $ruleKeyword
     *
     * @return $this
     */
    public function setRuleKeyword($ruleKeyword)
    {
        $this->requestParameters['RuleKeyword'] = $ruleKeyword;
        $this->queryParameters['RuleKeyword'] = $ruleKeyword;

        return $this;
    }
}
