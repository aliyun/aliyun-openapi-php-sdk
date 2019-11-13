<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetRenewal
 *
 * @method string getProductCode()
 * @method string getSubscriptionType()
 * @method string getRenewalPeriod()
 * @method string getOwnerId()
 * @method string getProductType()
 * @method string getInstanceIDs()
 * @method string getRenewalStatus()
 * @method string getRenewalPeriodUnit()
 */
class SetRenewalRequest extends \RpcAcsRequest
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
            'BssOpenApi',
            '2017-12-14',
            'SetRenewal',
            'BssOpenApi'
        );
    }

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        $this->requestParameters['ProductCode'] = $productCode;
        $this->queryParameters['ProductCode'] = $productCode;

        return $this;
    }

    /**
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function setSubscriptionType($subscriptionType)
    {
        $this->requestParameters['SubscriptionType'] = $subscriptionType;
        $this->queryParameters['SubscriptionType'] = $subscriptionType;

        return $this;
    }

    /**
     * @param string $renewalPeriod
     *
     * @return $this
     */
    public function setRenewalPeriod($renewalPeriod)
    {
        $this->requestParameters['RenewalPeriod'] = $renewalPeriod;
        $this->queryParameters['RenewalPeriod'] = $renewalPeriod;

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
     * @param string $productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->requestParameters['ProductType'] = $productType;
        $this->queryParameters['ProductType'] = $productType;

        return $this;
    }

    /**
     * @param string $instanceIDs
     *
     * @return $this
     */
    public function setInstanceIDs($instanceIDs)
    {
        $this->requestParameters['InstanceIDs'] = $instanceIDs;
        $this->queryParameters['InstanceIDs'] = $instanceIDs;

        return $this;
    }

    /**
     * @param string $renewalStatus
     *
     * @return $this
     */
    public function setRenewalStatus($renewalStatus)
    {
        $this->requestParameters['RenewalStatus'] = $renewalStatus;
        $this->queryParameters['RenewalStatus'] = $renewalStatus;

        return $this;
    }

    /**
     * @param string $renewalPeriodUnit
     *
     * @return $this
     */
    public function setRenewalPeriodUnit($renewalPeriodUnit)
    {
        $this->requestParameters['RenewalPeriodUnit'] = $renewalPeriodUnit;
        $this->queryParameters['RenewalPeriodUnit'] = $renewalPeriodUnit;

        return $this;
    }
}
