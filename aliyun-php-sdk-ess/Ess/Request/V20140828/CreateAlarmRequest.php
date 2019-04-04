<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAlarm
 *
 * @method string getMetricType()
 * @method string getPeriod()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getGroupId()
 * @method string getDescription()
 * @method array getAlarmActions()
 * @method string getThreshold()
 * @method string getOwnerId()
 * @method string getName()
 * @method string getEvaluationCount()
 * @method string getMetricName()
 * @method string getComparisonOperator()
 * @method array getDimensions()
 * @method string getStatistics()
 */
class CreateAlarmRequest extends \RpcAcsRequest
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
            'Ess',
            '2014-08-28',
            'CreateAlarm',
            'ess'
        );
    }

    /**
     * @param string $metricType
     *
     * @return $this
     */
    public function setMetricType($metricType)
    {
        $this->requestParameters['MetricType'] = $metricType;
        $this->queryParameters['MetricType'] = $metricType;

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
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->requestParameters['ScalingGroupId'] = $scalingGroupId;
        $this->queryParameters['ScalingGroupId'] = $scalingGroupId;

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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param array $alarmAction
     *
     * @return $this
     */
    public function setAlarmActions(array $alarmAction)
    {
        $this->requestParameters['AlarmActions'] = $alarmAction;
        foreach ($alarmAction as $i => $iValue) {
            $this->queryParameters['AlarmAction.' . ($i + 1)] = $iValue;
        }

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
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $evaluationCount
     *
     * @return $this
     */
    public function setEvaluationCount($evaluationCount)
    {
        $this->requestParameters['EvaluationCount'] = $evaluationCount;
        $this->queryParameters['EvaluationCount'] = $evaluationCount;

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
     * @param string $comparisonOperator
     *
     * @return $this
     */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->requestParameters['ComparisonOperator'] = $comparisonOperator;
        $this->queryParameters['ComparisonOperator'] = $comparisonOperator;

        return $this;
    }

    /**
     * @param array $dimension
     *
     * @return $this
     */
    public function setDimensions(array $dimension)
    {
        $this->requestParameters['Dimensions'] = $dimension;
        foreach ($dimension as $depth1 => $depth1Value) {
            $this->queryParameters['Dimension.' . ($depth1 + 1) . '.DimensionValue'] = $depth1Value['DimensionValue'];
            $this->queryParameters['Dimension.' . ($depth1 + 1) . '.DimensionKey'] = $depth1Value['DimensionKey'];
        }

        return $this;
    }

    /**
     * @param string $statistics
     *
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->requestParameters['Statistics'] = $statistics;
        $this->queryParameters['Statistics'] = $statistics;

        return $this;
    }
}
