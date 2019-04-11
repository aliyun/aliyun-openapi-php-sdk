<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateGroupMetricRules
 *
 * @method string getGroupId()
 * @method array getGroupMetricRuless()
 */
class CreateGroupMetricRulesRequest extends \RpcAcsRequest
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
            'CreateGroupMetricRules',
            'cms'
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
     * @param array $groupMetricRules
     *
     * @return $this
     */
    public function setGroupMetricRuless(array $groupMetricRules)
    {
        $this->requestParameters['GroupMetricRuless'] = $groupMetricRules;
        foreach ($groupMetricRules as $depth1 => $depth1Value) {
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Webhook'] = $depth1Value['Webhook'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.ComparisonOperator'] = $depth1Value['EscalationsWarnComparisonOperator'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.RuleName'] = $depth1Value['RuleName'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.Statistics'] = $depth1Value['EscalationsInfoStatistics'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.EffectiveInterval'] = $depth1Value['EffectiveInterval'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.ComparisonOperator'] = $depth1Value['EscalationsInfoComparisonOperator'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.NoEffectiveInterval'] = $depth1Value['NoEffectiveInterval'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.EmailSubject'] = $depth1Value['EmailSubject'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.SilenceTime'] = $depth1Value['SilenceTime'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.Times'] = $depth1Value['EscalationsWarnTimes'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.Threshold'] = $depth1Value['EscalationsWarnThreshold'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.Statistics'] = $depth1Value['EscalationsCriticalStatistics'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.Times'] = $depth1Value['EscalationsInfoTimes'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.Times'] = $depth1Value['EscalationsCriticalTimes'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.Statistics'] = $depth1Value['EscalationsWarnStatistics'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.Threshold'] = $depth1Value['EscalationsInfoThreshold'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Namespace'] = $depth1Value['Namespace'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Interval'] = $depth1Value['Interval'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.RuleId'] = $depth1Value['RuleId'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.ComparisonOperator'] = $depth1Value['EscalationsCriticalComparisonOperator'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.Threshold'] = $depth1Value['EscalationsCriticalThreshold'];
            $this->queryParameters['GroupMetricRules.' . ($depth1 + 1) . '.Dimensions'] = $depth1Value['Dimensions'];
        }

        return $this;
    }
}
