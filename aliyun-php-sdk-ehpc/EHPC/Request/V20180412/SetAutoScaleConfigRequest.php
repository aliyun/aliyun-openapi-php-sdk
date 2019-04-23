<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetAutoScaleConfig
 *
 * @method string getShrinkIdleTimes()
 * @method string getGrowTimeoutInMinutes()
 * @method string getClusterId()
 * @method string getEnableAutoGrow()
 * @method string getSpotPriceLimit()
 * @method string getEnableAutoShrink()
 * @method string getSpotStrategy()
 * @method string getMaxNodesInCluster()
 * @method string getExcludeNodes()
 * @method string getShrinkIntervalInMinutes()
 * @method array getQueuess()
 * @method string getExtraNodesGrowRatio()
 * @method string getGrowIntervalInMinutes()
 * @method string getGrowRatio()
 */
class SetAutoScaleConfigRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'SetAutoScaleConfig',
            'ehs'
        );
    }

    /**
     * @param string $shrinkIdleTimes
     *
     * @return $this
     */
    public function setShrinkIdleTimes($shrinkIdleTimes)
    {
        $this->requestParameters['ShrinkIdleTimes'] = $shrinkIdleTimes;
        $this->queryParameters['ShrinkIdleTimes'] = $shrinkIdleTimes;

        return $this;
    }

    /**
     * @param string $growTimeoutInMinutes
     *
     * @return $this
     */
    public function setGrowTimeoutInMinutes($growTimeoutInMinutes)
    {
        $this->requestParameters['GrowTimeoutInMinutes'] = $growTimeoutInMinutes;
        $this->queryParameters['GrowTimeoutInMinutes'] = $growTimeoutInMinutes;

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
     * @param string $enableAutoGrow
     *
     * @return $this
     */
    public function setEnableAutoGrow($enableAutoGrow)
    {
        $this->requestParameters['EnableAutoGrow'] = $enableAutoGrow;
        $this->queryParameters['EnableAutoGrow'] = $enableAutoGrow;

        return $this;
    }

    /**
     * @param string $spotPriceLimit
     *
     * @return $this
     */
    public function setSpotPriceLimit($spotPriceLimit)
    {
        $this->requestParameters['SpotPriceLimit'] = $spotPriceLimit;
        $this->queryParameters['SpotPriceLimit'] = $spotPriceLimit;

        return $this;
    }

    /**
     * @param string $enableAutoShrink
     *
     * @return $this
     */
    public function setEnableAutoShrink($enableAutoShrink)
    {
        $this->requestParameters['EnableAutoShrink'] = $enableAutoShrink;
        $this->queryParameters['EnableAutoShrink'] = $enableAutoShrink;

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
     * @param string $maxNodesInCluster
     *
     * @return $this
     */
    public function setMaxNodesInCluster($maxNodesInCluster)
    {
        $this->requestParameters['MaxNodesInCluster'] = $maxNodesInCluster;
        $this->queryParameters['MaxNodesInCluster'] = $maxNodesInCluster;

        return $this;
    }

    /**
     * @param string $excludeNodes
     *
     * @return $this
     */
    public function setExcludeNodes($excludeNodes)
    {
        $this->requestParameters['ExcludeNodes'] = $excludeNodes;
        $this->queryParameters['ExcludeNodes'] = $excludeNodes;

        return $this;
    }

    /**
     * @param string $shrinkIntervalInMinutes
     *
     * @return $this
     */
    public function setShrinkIntervalInMinutes($shrinkIntervalInMinutes)
    {
        $this->requestParameters['ShrinkIntervalInMinutes'] = $shrinkIntervalInMinutes;
        $this->queryParameters['ShrinkIntervalInMinutes'] = $shrinkIntervalInMinutes;

        return $this;
    }

    /**
     * @param array $queues
     *
     * @return $this
     */
    public function setQueuess(array $queues)
    {
        $this->requestParameters['Queuess'] = $queues;
        foreach ($queues as $depth1 => $depth1Value) {
            $this->queryParameters['Queues.' . ($depth1 + 1) . '.SpotStrategy'] = $depth1Value['SpotStrategy'];
            $this->queryParameters['Queues.' . ($depth1 + 1) . '.QueueName'] = $depth1Value['QueueName'];
            foreach ($depth1Value['InstanceTypes'] as $depth2 => $depth2Value) {
                $this->queryParameters['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.SpotStrategy'] = $depth2Value['SpotStrategy'];
                $this->queryParameters['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.VSwitchId'] = $depth2Value['VSwitchId'];
                $this->queryParameters['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.InstanceType'] = $depth2Value['InstanceType'];
                $this->queryParameters['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.ZoneId'] = $depth2Value['ZoneId'];
                $this->queryParameters['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.SpotPriceLimit'] = $depth2Value['SpotPriceLimit'];
            }
            $this->queryParameters['Queues.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->queryParameters['Queues.' . ($depth1 + 1) . '.EnableAutoGrow'] = $depth1Value['EnableAutoGrow'];
            $this->queryParameters['Queues.' . ($depth1 + 1) . '.SpotPriceLimit'] = $depth1Value['SpotPriceLimit'];
            $this->queryParameters['Queues.' . ($depth1 + 1) . '.EnableAutoShrink'] = $depth1Value['EnableAutoShrink'];
        }

        return $this;
    }

    /**
     * @param string $extraNodesGrowRatio
     *
     * @return $this
     */
    public function setExtraNodesGrowRatio($extraNodesGrowRatio)
    {
        $this->requestParameters['ExtraNodesGrowRatio'] = $extraNodesGrowRatio;
        $this->queryParameters['ExtraNodesGrowRatio'] = $extraNodesGrowRatio;

        return $this;
    }

    /**
     * @param string $growIntervalInMinutes
     *
     * @return $this
     */
    public function setGrowIntervalInMinutes($growIntervalInMinutes)
    {
        $this->requestParameters['GrowIntervalInMinutes'] = $growIntervalInMinutes;
        $this->queryParameters['GrowIntervalInMinutes'] = $growIntervalInMinutes;

        return $this;
    }

    /**
     * @param string $growRatio
     *
     * @return $this
     */
    public function setGrowRatio($growRatio)
    {
        $this->requestParameters['GrowRatio'] = $growRatio;
        $this->queryParameters['GrowRatio'] = $growRatio;

        return $this;
    }
}
