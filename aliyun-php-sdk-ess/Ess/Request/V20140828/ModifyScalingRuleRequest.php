<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyScalingRule
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getAdjustmentValue()
 * @method array getStepAdjustments()
 * @method string getEstimatedInstanceWarmup()
 * @method string getOwnerAccount()
 * @method string getAdjustmentType()
 * @method string getDisableScaleIn()
 * @method string getOwnerId()
 * @method string getScalingRuleId()
 * @method string getScalingRuleName()
 * @method string getCooldown()
 * @method string getMinAdjustmentMagnitude()
 * @method string getTargetValue()
 * @method string getMetricName()
 */
class ModifyScalingRuleRequest extends \RpcAcsRequest
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
            'ModifyScalingRule',
            'ess'
        );
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
     * @param array $stepAdjustment
     *
     * @return $this
     */
    public function setStepAdjustments(array $stepAdjustment)
    {
        $this->requestParameters['StepAdjustments'] = $stepAdjustment;
        foreach ($stepAdjustment as $depth1 => $depth1Value) {
            $this->queryParameters['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalLowerBound'] = $depth1Value['MetricIntervalLowerBound'];
            $this->queryParameters['StepAdjustment.' . ($depth1 + 1) . '.MetricIntervalUpperBound'] = $depth1Value['MetricIntervalUpperBound'];
            $this->queryParameters['StepAdjustment.' . ($depth1 + 1) . '.ScalingAdjustment'] = $depth1Value['ScalingAdjustment'];
        }

        return $this;
    }

    /**
     * @param string $estimatedInstanceWarmup
     *
     * @return $this
     */
    public function setEstimatedInstanceWarmup($estimatedInstanceWarmup)
    {
        $this->requestParameters['EstimatedInstanceWarmup'] = $estimatedInstanceWarmup;
        $this->queryParameters['EstimatedInstanceWarmup'] = $estimatedInstanceWarmup;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

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
     * @param string $disableScaleIn
     *
     * @return $this
     */
    public function setDisableScaleIn($disableScaleIn)
    {
        $this->requestParameters['DisableScaleIn'] = $disableScaleIn;
        $this->queryParameters['DisableScaleIn'] = $disableScaleIn;

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
     * @param string $scalingRuleId
     *
     * @return $this
     */
    public function setScalingRuleId($scalingRuleId)
    {
        $this->requestParameters['ScalingRuleId'] = $scalingRuleId;
        $this->queryParameters['ScalingRuleId'] = $scalingRuleId;

        return $this;
    }

    /**
     * @param string $scalingRuleName
     *
     * @return $this
     */
    public function setScalingRuleName($scalingRuleName)
    {
        $this->requestParameters['ScalingRuleName'] = $scalingRuleName;
        $this->queryParameters['ScalingRuleName'] = $scalingRuleName;

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
     * @param string $minAdjustmentMagnitude
     *
     * @return $this
     */
    public function setMinAdjustmentMagnitude($minAdjustmentMagnitude)
    {
        $this->requestParameters['MinAdjustmentMagnitude'] = $minAdjustmentMagnitude;
        $this->queryParameters['MinAdjustmentMagnitude'] = $minAdjustmentMagnitude;

        return $this;
    }

    /**
     * @param string $targetValue
     *
     * @return $this
     */
    public function setTargetValue($targetValue)
    {
        $this->requestParameters['TargetValue'] = $targetValue;
        $this->queryParameters['TargetValue'] = $targetValue;

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
}
