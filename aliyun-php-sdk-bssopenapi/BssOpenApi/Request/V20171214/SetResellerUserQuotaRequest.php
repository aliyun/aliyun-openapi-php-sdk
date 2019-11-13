<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetResellerUserQuota
 *
 * @method string getAmount()
 * @method string getOutBizId()
 * @method string getOwnerId()
 * @method string getCurrency()
 */
class SetResellerUserQuotaRequest extends \RpcAcsRequest
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
            'SetResellerUserQuota',
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
