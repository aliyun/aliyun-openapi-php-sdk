<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryMonthlyBill
 *
 * @method string getBillingCycle()
 */
class QueryMonthlyBillRequest extends \RpcAcsRequest
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
            'QueryMonthlyBill',
            'BssOpenApi'
        );
    }

    /**
     * @param string $billingCycle
     *
     * @return $this
     */
    public function setBillingCycle($billingCycle)
    {
        $this->requestParameters['BillingCycle'] = $billingCycle;
        $this->queryParameters['BillingCycle'] = $billingCycle;

        return $this;
    }
}
