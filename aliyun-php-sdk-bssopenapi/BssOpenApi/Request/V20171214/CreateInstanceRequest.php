<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateInstance
 *
 * @method string getProductCode()
 * @method string getPeriod()
 * @method string getClientToken()
 * @method string getSubscriptionType()
 * @method string getOwnerId()
 * @method string getProductType()
 * @method string getRenewPeriod()
 * @method array getParameters()
 * @method string getRenewalStatus()
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
            'CreateInstance',
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
     * @param array $parameter
     *
     * @return $this
     */
	public function setParameters(array $parameter)
	{
	    $this->requestParameters['Parameters'] = $parameter;
		foreach ($parameter as $depth1 => $depth1Value) {
			$this->queryParameters['Parameter.' . ($depth1 + 1) . '.Code'] = $depth1Value['Code'];
			$this->queryParameters['Parameter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
}
