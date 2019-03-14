<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateScalingRule
 *
 * @method string getLaunchTime()
 * @method string getResourceOwnerId()
 * @method string getRuleCategory()
 * @method string getAdjustmentValue()
 * @method string getAdjustmentType()
 * @method string getRuleName()
 * @method string getClusterId()
 * @method string getLaunchExpirationTime()
 * @method string getRecurrenceValue()
 * @method string getRecurrenceEndTime()
 * @method array getCloudWatchTriggers()
 * @method string getHostGroupId()
 * @method array getSchedulerTriggers()
 * @method string getCooldown()
 * @method string getRecurrenceType()
 */
class CreateScalingRuleRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'CreateScalingRule',
            'emr'
        );
    }

    /**
     * @param string $launchTime
     *
     * @return $this
     */
    public function setLaunchTime($launchTime)
    {
        $this->requestParameters['LaunchTime'] = $launchTime;
        $this->queryParameters['LaunchTime'] = $launchTime;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $ruleCategory
     *
     * @return $this
     */
    public function setRuleCategory($ruleCategory)
    {
        $this->requestParameters['RuleCategory'] = $ruleCategory;
        $this->queryParameters['RuleCategory'] = $ruleCategory;

        return $this;
    }

    /**
     * @param string $adjustmentValue
     *
     * @return $this
     */
    public function setAdjustmentValue($adjustmentValue)
    {
        $this->requestParameters['AdjustmentValue'] = $adjustmentValue;
        $this->queryParameters['AdjustmentValue'] = $adjustmentValue;

        return $this;
    }

    /**
     * @param string $adjustmentType
     *
     * @return $this
     */
    public function setAdjustmentType($adjustmentType)
    {
        $this->requestParameters['AdjustmentType'] = $adjustmentType;
        $this->queryParameters['AdjustmentType'] = $adjustmentType;

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
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $launchExpirationTime
     *
     * @return $this
     */
    public function setLaunchExpirationTime($launchExpirationTime)
    {
        $this->requestParameters['LaunchExpirationTime'] = $launchExpirationTime;
        $this->queryParameters['LaunchExpirationTime'] = $launchExpirationTime;

        return $this;
    }

    /**
     * @param string $recurrenceValue
     *
     * @return $this
     */
    public function setRecurrenceValue($recurrenceValue)
    {
        $this->requestParameters['RecurrenceValue'] = $recurrenceValue;
        $this->queryParameters['RecurrenceValue'] = $recurrenceValue;

        return $this;
    }

    /**
     * @param string $recurrenceEndTime
     *
     * @return $this
     */
    public function setRecurrenceEndTime($recurrenceEndTime)
    {
        $this->requestParameters['RecurrenceEndTime'] = $recurrenceEndTime;
        $this->queryParameters['RecurrenceEndTime'] = $recurrenceEndTime;

        return $this;
    }

    /**
     * @param array $cloudWatchTriggers
     *
     * @return $this
     */
    public function setCloudWatchTriggers(array $cloudWatchTriggers)
    {
        $this->requestParameters['CloudWatchTriggers'] = $cloudWatchTriggers;
        foreach ($cloudWatchTriggers as $i => $iValue) {
            $this->queryParameters['CloudWatchTrigger.' . ($i + 1) . '.Period'] = $cloudWatchTriggers[$i]['Period'];
            $this->queryParameters['CloudWatchTrigger.' . ($i + 1) . '.EvaluationCount'] = $cloudWatchTriggers[$i]['EvaluationCount'];
            $this->queryParameters['CloudWatchTrigger.' . ($i + 1) . '.Threshold'] = $cloudWatchTriggers[$i]['Threshold'];
            $this->queryParameters['CloudWatchTrigger.' . ($i + 1) . '.MetricName'] = $cloudWatchTriggers[$i]['MetricName'];
            $this->queryParameters['CloudWatchTrigger.' . ($i + 1) . '.ComparisonOperator'] = $cloudWatchTriggers[$i]['ComparisonOperator'];
            $this->queryParameters['CloudWatchTrigger.' . ($i + 1) . '.Statistics'] = $cloudWatchTriggers[$i]['Statistics'];
        }

        return $this;
    }

    /**
     * @param string $hostGroupId
     *
     * @return $this
     */
    public function setHostGroupId($hostGroupId)
    {
        $this->requestParameters['HostGroupId'] = $hostGroupId;
        $this->queryParameters['HostGroupId'] = $hostGroupId;

        return $this;
    }

    /**
     * @param array $schedulerTriggers
     *
     * @return $this
     */
    public function setSchedulerTriggers(array $schedulerTriggers)
    {
        $this->requestParameters['SchedulerTriggers'] = $schedulerTriggers;
        foreach ($schedulerTriggers as $i => $iValue) {
            $this->queryParameters['SchedulerTrigger.' . ($i + 1) . '.LaunchTime'] = $schedulerTriggers[$i]['LaunchTime'];
            $this->queryParameters['SchedulerTrigger.' . ($i + 1) . '.LaunchExpirationTime'] = $schedulerTriggers[$i]['LaunchExpirationTime'];
            $this->queryParameters['SchedulerTrigger.' . ($i + 1) . '.RecurrenceValue'] = $schedulerTriggers[$i]['RecurrenceValue'];
            $this->queryParameters['SchedulerTrigger.' . ($i + 1) . '.RecurrenceEndTime'] = $schedulerTriggers[$i]['RecurrenceEndTime'];
            $this->queryParameters['SchedulerTrigger.' . ($i + 1) . '.RecurrenceType'] = $schedulerTriggers[$i]['RecurrenceType'];
        }

        return $this;
    }

    /**
     * @param string $cooldown
     *
     * @return $this
     */
    public function setCooldown($cooldown)
    {
        $this->requestParameters['Cooldown'] = $cooldown;
        $this->queryParameters['Cooldown'] = $cooldown;

        return $this;
    }

    /**
     * @param string $recurrenceType
     *
     * @return $this
     */
    public function setRecurrenceType($recurrenceType)
    {
        $this->requestParameters['RecurrenceType'] = $recurrenceType;
        $this->queryParameters['RecurrenceType'] = $recurrenceType;

        return $this;
    }
}
