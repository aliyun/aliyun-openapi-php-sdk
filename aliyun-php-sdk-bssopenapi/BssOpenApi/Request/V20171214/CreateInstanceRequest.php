<?php

namespace BssOpenApi\Request\V20171214;

/**
 * Request of CreateInstance
 *
 * @method string getProductCode()
 * @method string getPeriod()
 * @method string getSubscriptionType()
 * @method string getRenewPeriod()
 * @method array getParameters()
 * @method string getRenewalStatus()
 * @method string getOwnerId()
 * @method string getProductType()
 */
class CreateInstanceRequest extends \RpcAcsRequest
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
            'CreateInstance'
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
     * @param string $renewPeriod
     *
     * @return $this
     */
    public function setRenewPeriod($renewPeriod)
    {
        $this->requestParameters['RenewPeriod'] = $renewPeriod;
        $this->queryParameters['RenewPeriod'] = $renewPeriod;

        return $this;
    }

    /**
     * @param array $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters)
    {
        $this->requestParameters['Parameters'] = $parameters;
        foreach ($parameters as $i => $iValue) {
            $this->queryParameters['Parameter.' . ($i + 1) . '.Code'] = $parameters[$i]['Code'];
            $this->queryParameters['Parameter.' . ($i + 1) . '.Value'] = $parameters[$i]['Value'];
        }

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
}
