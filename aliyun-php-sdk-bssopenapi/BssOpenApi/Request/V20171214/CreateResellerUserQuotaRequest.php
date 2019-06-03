<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateResellerUserQuota
 *
 * @method string getAmount()
 * @method string getOutBizId()
 * @method string getCurrency()
 * @method string getOwnerId()
 */
class CreateResellerUserQuotaRequest extends \RpcAcsRequest
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
            'CreateResellerUserQuota'
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
}
