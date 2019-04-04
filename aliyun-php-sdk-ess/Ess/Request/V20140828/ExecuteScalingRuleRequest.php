<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ExecuteScalingRule
 *
 * @method string getResourceOwnerId()
 * @method string getScalingRuleAri()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getBreachThreshold()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getMetricValue()
 */
class ExecuteScalingRuleRequest extends \RpcAcsRequest
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
            'ExecuteScalingRule',
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
     * @param string $scalingRuleAri
     *
     * @return $this
     */
    public function setScalingRuleAri($scalingRuleAri)
    {
        $this->requestParameters['ScalingRuleAri'] = $scalingRuleAri;
        $this->queryParameters['ScalingRuleAri'] = $scalingRuleAri;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $breachThreshold
     *
     * @return $this
     */
    public function setBreachThreshold($breachThreshold)
    {
        $this->requestParameters['BreachThreshold'] = $breachThreshold;
        $this->queryParameters['BreachThreshold'] = $breachThreshold;

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
     * @param string $metricValue
     *
     * @return $this
     */
    public function setMetricValue($metricValue)
    {
        $this->requestParameters['MetricValue'] = $metricValue;
        $this->queryParameters['MetricValue'] = $metricValue;

        return $this;
    }
}
