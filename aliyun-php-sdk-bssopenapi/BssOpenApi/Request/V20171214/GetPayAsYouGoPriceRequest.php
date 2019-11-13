<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetPayAsYouGoPrice
 *
 * @method string getProductCode()
 * @method string getSubscriptionType()
 * @method array getModuleLists()
 * @method string getOwnerId()
 * @method string getProductType()
 * @method string getRegion()
 */
class GetPayAsYouGoPriceRequest extends \RpcAcsRequest
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
            'GetPayAsYouGoPrice',
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
     * @param array $moduleList
     *
     * @return $this
     */
	public function setModuleLists(array $moduleList)
	{
	    $this->requestParameters['ModuleLists'] = $moduleList;
		foreach ($moduleList as $depth1 => $depth1Value) {
			$this->queryParameters['ModuleList.' . ($depth1 + 1) . '.ModuleCode'] = $depth1Value['ModuleCode'];
			$this->queryParameters['ModuleList.' . ($depth1 + 1) . '.PriceType'] = $depth1Value['PriceType'];
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
}
