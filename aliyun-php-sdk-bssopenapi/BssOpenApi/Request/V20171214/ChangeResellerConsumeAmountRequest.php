<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ChangeResellerConsumeAmount
 *
 * @method string getAmount()
 * @method string getOutBizId()
 * @method string getSource()
 * @method string getOwnerId()
 * @method string getBusinessType()
 * @method string getAdjustType()
 * @method string getExtendMap()
 * @method string getCurrency()
 */
class ChangeResellerConsumeAmountRequest extends \RpcAcsRequest
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
            'ChangeResellerConsumeAmount',
            'BssOpenApi'
        );
    }

    /**
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->requestParameters['Amount'] = $amount;
        $this->queryParameters['Amount'] = $amount;

        return $this;
    }

    /**
     * @param string $outBizId
     *
     * @return $this
     */
    public function setOutBizId($outBizId)
    {
        $this->requestParameters['OutBizId'] = $outBizId;
        $this->queryParameters['OutBizId'] = $outBizId;

        return $this;
    }

    /**
     * @param string $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->requestParameters['Source'] = $source;
        $this->queryParameters['Source'] = $source;

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
     * @param string $businessType
     *
     * @return $this
     */
    public function setBusinessType($businessType)
    {
        $this->requestParameters['BusinessType'] = $businessType;
        $this->queryParameters['BusinessType'] = $businessType;

        return $this;
    }

    /**
     * @param string $adjustType
     *
     * @return $this
     */
    public function setAdjustType($adjustType)
    {
        $this->requestParameters['AdjustType'] = $adjustType;
        $this->queryParameters['AdjustType'] = $adjustType;

        return $this;
    }

    /**
     * @param string $extendMap
     *
     * @return $this
     */
    public function setExtendMap($extendMap)
    {
        $this->requestParameters['ExtendMap'] = $extendMap;
        $this->queryParameters['ExtendMap'] = $extendMap;

        return $this;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->requestParameters['Currency'] = $currency;
        $this->queryParameters['Currency'] = $currency;

        return $this;
    }
}
