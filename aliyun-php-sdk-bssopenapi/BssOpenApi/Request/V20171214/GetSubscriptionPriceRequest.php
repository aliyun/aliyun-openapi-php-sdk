<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetSubscriptionPrice
 *
 * @method string getProductCode()
 * @method string getQuantity()
 * @method string getSubscriptionType()
 * @method array getModuleLists()
 * @method string getOwnerId()
 * @method string getProductType()
 * @method string getServicePeriodQuantity()
 * @method string getInstanceId()
 * @method string getServicePeriodUnit()
 * @method string getRegion()
 * @method string getOrderType()
 */
class GetSubscriptionPriceRequest extends \RpcAcsRequest
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
            'GetSubscriptionPrice',
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
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->requestParameters['Quantity'] = $quantity;
        $this->queryParameters['Quantity'] = $quantity;

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
     * @param array $moduleList
     *
     * @return $this
     */
	public function setModuleLists(array $moduleList)
	{
	    $this->requestParameters['ModuleLists'] = $moduleList;
		foreach ($moduleList as $depth1 => $depth1Value) {
			$this->queryParameters['ModuleList.' . ($depth1 + 1) . '.ModuleCode'] = $depth1Value['ModuleCode'];
			$this->queryParameters['ModuleList.' . ($depth1 + 1) . '.ModuleStatus'] = $depth1Value['ModuleStatus'];
			$this->queryParameters['ModuleList.' . ($depth1 + 1) . '.Tag'] = $depth1Value['Tag'];
			$this->queryParameters['ModuleList.' . ($depth1 + 1) . '.Config'] = $depth1Value['Config'];
		}

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
     * @param string $servicePeriodQuantity
     *
     * @return $this
     */
    public function setServicePeriodQuantity($servicePeriodQuantity)
    {
        $this->requestParameters['ServicePeriodQuantity'] = $servicePeriodQuantity;
        $this->queryParameters['ServicePeriodQuantity'] = $servicePeriodQuantity;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $servicePeriodUnit
     *
     * @return $this
     */
    public function setServicePeriodUnit($servicePeriodUnit)
    {
        $this->requestParameters['ServicePeriodUnit'] = $servicePeriodUnit;
        $this->queryParameters['ServicePeriodUnit'] = $servicePeriodUnit;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        $this->requestParameters['OrderType'] = $orderType;
        $this->queryParameters['OrderType'] = $orderType;

        return $this;
    }
}
