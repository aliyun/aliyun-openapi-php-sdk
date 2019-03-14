<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateScalingTaskGroup
 *
 * @method string getResourceOwnerId()
 * @method string getDataDiskCategory()
 * @method string getClusterId()
 * @method string getMinSize()
 * @method string getSpotStrategy()
 * @method string getDataDiskSize()
 * @method array getSpotPriceLimitss()
 * @method array getScalingRules()
 * @method string getActiveRuleCategory()
 * @method string getMaxSize()
 * @method string getDataDiskCount()
 * @method string getDefaultCooldown()
 * @method string getPayType()
 * @method array getInstanceTypeLists()
 */
class CreateScalingTaskGroupRequest extends \RpcAcsRequest
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
            'CreateScalingTaskGroup',
            'emr'
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
     * @param string $dataDiskCategory
     *
     * @return $this
     */
    public function setDataDiskCategory($dataDiskCategory)
    {
        $this->requestParameters['DataDiskCategory'] = $dataDiskCategory;
        $this->queryParameters['DataDiskCategory'] = $dataDiskCategory;

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
     * @param string $minSize
     *
     * @return $this
     */
    public function setMinSize($minSize)
    {
        $this->requestParameters['MinSize'] = $minSize;
        $this->queryParameters['MinSize'] = $minSize;

        return $this;
    }

    /**
     * @param string $spotStrategy
     *
     * @return $this
     */
    public function setSpotStrategy($spotStrategy)
    {
        $this->requestParameters['SpotStrategy'] = $spotStrategy;
        $this->queryParameters['SpotStrategy'] = $spotStrategy;

        return $this;
    }

    /**
     * @param string $dataDiskSize
     *
     * @return $this
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->requestParameters['DataDiskSize'] = $dataDiskSize;
        $this->queryParameters['DataDiskSize'] = $dataDiskSize;

        return $this;
    }

    /**
     * @param array $spotPriceLimitss
     *
     * @return $this
     */
    public function setSpotPriceLimitss(array $spotPriceLimitss)
    {
        $this->requestParameters['SpotPriceLimitss'] = $spotPriceLimitss;
        foreach ($spotPriceLimitss as $i => $iValue) {
            $this->queryParameters['SpotPriceLimits.' . ($i + 1) . '.InstanceType'] = $spotPriceLimitss[$i]['InstanceType'];
            $this->queryParameters['SpotPriceLimits.' . ($i + 1) . '.PriceLimit'] = $spotPriceLimitss[$i]['PriceLimit'];
        }

        return $this;
    }

    /**
     * @param array $scalingRules
     *
     * @return $this
     */
    public function setScalingRules(array $scalingRules)
    {
        $this->requestParameters['ScalingRules'] = $scalingRules;
        foreach ($scalingRules as $i => $iValue) {
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.LaunchTime'] = $scalingRules[$i]['LaunchTime'];
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.RuleCategory'] = $scalingRules[$i]['RuleCategory'];
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.AdjustmentValue'] = $scalingRules[$i]['AdjustmentValue'];
            foreach ($scalingRules[$i]['SchedulerTriggers'] as $j => $jValue) {
                $this->queryParameters['ScalingRule.' . ($i + 1) . '.SchedulerTrigger.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.AdjustmentType'] = $scalingRules[$i]['AdjustmentType'];
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.Cooldown'] = $scalingRules[$i]['Cooldown'];
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.RuleName'] = $scalingRules[$i]['RuleName'];
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.LaunchExpirationTime'] = $scalingRules[$i]['LaunchExpirationTime'];
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.RecurrenceValue'] = $scalingRules[$i]['RecurrenceValue'];
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.RecurrenceEndTime'] = $scalingRules[$i]['RecurrenceEndTime'];
            foreach ($scalingRules[$i]['CloudWatchTriggers'] as $j => $jValue) {
                $this->queryParameters['ScalingRule.' . ($i + 1) . '.CloudWatchTrigger.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['ScalingRule.' . ($i + 1) . '.RecurrenceType'] = $scalingRules[$i]['RecurrenceType'];
        }

        return $this;
    }

    /**
     * @param string $activeRuleCategory
     *
     * @return $this
     */
    public function setActiveRuleCategory($activeRuleCategory)
    {
        $this->requestParameters['ActiveRuleCategory'] = $activeRuleCategory;
        $this->queryParameters['ActiveRuleCategory'] = $activeRuleCategory;

        return $this;
    }

    /**
     * @param string $maxSize
     *
     * @return $this
     */
    public function setMaxSize($maxSize)
    {
        $this->requestParameters['MaxSize'] = $maxSize;
        $this->queryParameters['MaxSize'] = $maxSize;

        return $this;
    }

    /**
     * @param string $dataDiskCount
     *
     * @return $this
     */
    public function setDataDiskCount($dataDiskCount)
    {
        $this->requestParameters['DataDiskCount'] = $dataDiskCount;
        $this->queryParameters['DataDiskCount'] = $dataDiskCount;

        return $this;
    }

    /**
     * @param string $defaultCooldown
     *
     * @return $this
     */
    public function setDefaultCooldown($defaultCooldown)
    {
        $this->requestParameters['DefaultCooldown'] = $defaultCooldown;
        $this->queryParameters['DefaultCooldown'] = $defaultCooldown;

        return $this;
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        $this->requestParameters['PayType'] = $payType;
        $this->queryParameters['PayType'] = $payType;

        return $this;
    }

    /**
     * @param array $instanceTypeLists
     *
     * @return $this
     */
    public function setInstanceTypeLists(array $instanceTypeLists)
    {
        $this->requestParameters['InstanceTypeLists'] = $instanceTypeLists;
        foreach ($instanceTypeLists as $i => $iValue) {
            $this->queryParameters['InstanceTypeList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
