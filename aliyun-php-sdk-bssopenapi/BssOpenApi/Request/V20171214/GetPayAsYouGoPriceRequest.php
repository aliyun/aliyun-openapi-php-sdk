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
 * @method string getRegion()
 * @method string getProductType()
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
            'GetPayAsYouGoPrice'
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
     * @param array $value
     *
     * @return $this
     */
    public function setModuleLists(array $value)
    {
        $this->requestParameters['ModuleLists'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['ModuleList.' . ($i + 1) . '.ModuleCode'] = $value[$i]['ModuleCode'];
            $this->queryParameters['ModuleList.' . ($i + 1) . '.PriceType'] = $value[$i]['PriceType'];
            $this->queryParameters['ModuleList.' . ($i + 1) . '.Config'] = $value[$i]['Config'];
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
