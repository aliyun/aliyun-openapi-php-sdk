<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PutGroupMetricRule
 *
 * @method string getWebhook()
 * @method string getEscalationsWarnComparisonOperator()
 * @method string getRuleName()
 * @method string getEscalationsInfoStatistics()
 * @method string getEffectiveInterval()
 * @method string getEscalationsInfoComparisonOperator()
 * @method string getNoEffectiveInterval()
 * @method string getEmailSubject()
 * @method string getSilenceTime()
 * @method string getMetricName()
 * @method string getEscalationsWarnTimes()
 * @method string getPeriod()
 * @method string getEscalationsWarnThreshold()
 * @method string getEscalationsCriticalStatistics()
 * @method string getGroupId()
 * @method string getEscalationsInfoTimes()
 * @method string getEscalationsCriticalTimes()
 * @method string getEscalationsWarnStatistics()
 * @method string getEscalationsInfoThreshold()
 * @method string getNamespace()
 * @method string getInterval()
 * @method string getRuleId()
 * @method string getCategory()
 * @method string getEscalationsCriticalComparisonOperator()
 * @method string getEscalationsCriticalThreshold()
 * @method string getDimensions()
 */
class PutGroupMetricRuleRequest extends \RpcAcsRequest
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
            'PutGroupMetricRule',
            'cms'
        );
    }

    /**
     * @param string $webhook
     *
     * @return $this
     */
    public function setWebhook($webhook)
    {
        $this->requestParameters['Webhook'] = $webhook;
        $this->queryParameters['Webhook'] = $webhook;

        return $this;
    }

    /**
     * @param string $escalationsWarnComparisonOperator
     *
     * @return $this
     */
    public function setEscalationsWarnComparisonOperator($escalationsWarnComparisonOperator)
    {
        $this->requestParameters['EscalationsWarnComparisonOperator'] = $escalationsWarnComparisonOperator;
        $this->queryParameters['Escalations.Warn.ComparisonOperator'] = $escalationsWarnComparisonOperator;

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
     * @param string $escalationsInfoStatistics
     *
     * @return $this
     */
    public function setEscalationsInfoStatistics($escalationsInfoStatistics)
    {
        $this->requestParameters['EscalationsInfoStatistics'] = $escalationsInfoStatistics;
        $this->queryParameters['Escalations.Info.Statistics'] = $escalationsInfoStatistics;

        return $this;
    }

    /**
     * @param string $effectiveInterval
     *
     * @return $this
     */
    public function setEffectiveInterval($effectiveInterval)
    {
        $this->requestParameters['EffectiveInterval'] = $effectiveInterval;
        $this->queryParameters['EffectiveInterval'] = $effectiveInterval;

        return $this;
    }

    /**
     * @param string $escalationsInfoComparisonOperator
     *
     * @return $this
     */
    public function setEscalationsInfoComparisonOperator($escalationsInfoComparisonOperator)
    {
        $this->requestParameters['EscalationsInfoComparisonOperator'] = $escalationsInfoComparisonOperator;
        $this->queryParameters['Escalations.Info.ComparisonOperator'] = $escalationsInfoComparisonOperator;

        return $this;
    }

    /**
     * @param string $noEffectiveInterval
     *
     * @return $this
     */
    public function setNoEffectiveInterval($noEffectiveInterval)
    {
        $this->requestParameters['NoEffectiveInterval'] = $noEffectiveInterval;
        $this->queryParameters['NoEffectiveInterval'] = $noEffectiveInterval;

        return $this;
    }

    /**
     * @param string $emailSubject
     *
     * @return $this
     */
    public function setEmailSubject($emailSubject)
    {
        $this->requestParameters['EmailSubject'] = $emailSubject;
        $this->queryParameters['EmailSubject'] = $emailSubject;

        return $this;
    }

    /**
     * @param string $silenceTime
     *
     * @return $this
     */
    public function setSilenceTime($silenceTime)
    {
        $this->requestParameters['SilenceTime'] = $silenceTime;
        $this->queryParameters['SilenceTime'] = $silenceTime;

        return $this;
    }

    /**
     * @param string $metricName
     *
     * @return $this
     */
    public function setMetricName($metricName)
    {
        $this->requestParameters['MetricName'] = $metricName;
        $this->queryParameters['MetricName'] = $metricName;

        return $this;
    }

    /**
     * @param string $escalationsWarnTimes
     *
     * @return $this
     */
    public function setEscalationsWarnTimes($escalationsWarnTimes)
    {
        $this->requestParameters['EscalationsWarnTimes'] = $escalationsWarnTimes;
        $this->queryParameters['Escalations.Warn.Times'] = $escalationsWarnTimes;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $escalationsWarnThreshold
     *
     * @return $this
     */
    public function setEscalationsWarnThreshold($escalationsWarnThreshold)
    {
        $this->requestParameters['EscalationsWarnThreshold'] = $escalationsWarnThreshold;
        $this->queryParameters['Escalations.Warn.Threshold'] = $escalationsWarnThreshold;

        return $this;
    }

    /**
     * @param string $escalationsCriticalStatistics
     *
     * @return $this
     */
    public function setEscalationsCriticalStatistics($escalationsCriticalStatistics)
    {
        $this->requestParameters['EscalationsCriticalStatistics'] = $escalationsCriticalStatistics;
        $this->queryParameters['Escalations.Critical.Statistics'] = $escalationsCriticalStatistics;

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
     * @param string $escalationsInfoTimes
     *
     * @return $this
     */
    public function setEscalationsInfoTimes($escalationsInfoTimes)
    {
        $this->requestParameters['EscalationsInfoTimes'] = $escalationsInfoTimes;
        $this->queryParameters['Escalations.Info.Times'] = $escalationsInfoTimes;

        return $this;
    }

    /**
     * @param string $escalationsCriticalTimes
     *
     * @return $this
     */
    public function setEscalationsCriticalTimes($escalationsCriticalTimes)
    {
        $this->requestParameters['EscalationsCriticalTimes'] = $escalationsCriticalTimes;
        $this->queryParameters['Escalations.Critical.Times'] = $escalationsCriticalTimes;

        return $this;
    }

    /**
     * @param string $escalationsWarnStatistics
     *
     * @return $this
     */
    public function setEscalationsWarnStatistics($escalationsWarnStatistics)
    {
        $this->requestParameters['EscalationsWarnStatistics'] = $escalationsWarnStatistics;
        $this->queryParameters['Escalations.Warn.Statistics'] = $escalationsWarnStatistics;

        return $this;
    }

    /**
     * @param string $escalationsInfoThreshold
     *
     * @return $this
     */
    public function setEscalationsInfoThreshold($escalationsInfoThreshold)
    {
        $this->requestParameters['EscalationsInfoThreshold'] = $escalationsInfoThreshold;
        $this->queryParameters['Escalations.Info.Threshold'] = $escalationsInfoThreshold;

        return $this;
    }

    /**
     * @param string $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->requestParameters['Namespace'] = $namespace;
        $this->queryParameters['Namespace'] = $namespace;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->requestParameters['Interval'] = $interval;
        $this->queryParameters['Interval'] = $interval;

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
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->requestParameters['Category'] = $category;
        $this->queryParameters['Category'] = $category;

        return $this;
    }

    /**
     * @param string $escalationsCriticalComparisonOperator
     *
     * @return $this
     */
    public function setEscalationsCriticalComparisonOperator($escalationsCriticalComparisonOperator)
    {
        $this->requestParameters['EscalationsCriticalComparisonOperator'] = $escalationsCriticalComparisonOperator;
        $this->queryParameters['Escalations.Critical.ComparisonOperator'] = $escalationsCriticalComparisonOperator;

        return $this;
    }

    /**
     * @param string $escalationsCriticalThreshold
     *
     * @return $this
     */
    public function setEscalationsCriticalThreshold($escalationsCriticalThreshold)
    {
        $this->requestParameters['EscalationsCriticalThreshold'] = $escalationsCriticalThreshold;
        $this->queryParameters['Escalations.Critical.Threshold'] = $escalationsCriticalThreshold;

        return $this;
    }

    /**
     * @param string $dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->requestParameters['Dimensions'] = $dimensions;
        $this->queryParameters['Dimensions'] = $dimensions;

        return $this;
    }
}
