<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of NotifyWithholdFund
 *
 * @method string getAmount()
 * @method string getPayTypes()
 * @method string getTenantOrderId()
 * @method string getRequestId()
 * @method string getOperationDate()
 * @method string getChannelId()
 */
class NotifyWithholdFundRequest extends \RpcAcsRequest
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
            'linkedmall',
            '2018-01-16',
            'NotifyWithholdFund',
            'linkedmall'
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
     * @param string $payTypes
     *
     * @return $this
     */
    public function setPayTypes($payTypes)
    {
        $this->requestParameters['PayTypes'] = $payTypes;
        $this->queryParameters['PayTypes'] = $payTypes;

        return $this;
    }

    /**
     * @param string $tenantOrderId
     *
     * @return $this
     */
    public function setTenantOrderId($tenantOrderId)
    {
        $this->requestParameters['TenantOrderId'] = $tenantOrderId;
        $this->queryParameters['TenantOrderId'] = $tenantOrderId;

        return $this;
    }

    /**
     * @param string $requestId
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->requestParameters['RequestId'] = $requestId;
        $this->queryParameters['RequestId'] = $requestId;

        return $this;
    }

    /**
     * @param string $operationDate
     *
     * @return $this
     */
    public function setOperationDate($operationDate)
    {
        $this->requestParameters['OperationDate'] = $operationDate;
        $this->queryParameters['OperationDate'] = $operationDate;

        return $this;
    }

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        $this->requestParameters['ChannelId'] = $channelId;
        $this->queryParameters['ChannelId'] = $channelId;

        return $this;
    }
}
