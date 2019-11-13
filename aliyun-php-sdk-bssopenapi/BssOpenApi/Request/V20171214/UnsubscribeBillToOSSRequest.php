<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UnsubscribeBillToOSS
 *
 * @method string getSubscribeType()
 * @method string getMultAccountRelSubscribe()
 */
class UnsubscribeBillToOSSRequest extends \RpcAcsRequest
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
            'UnsubscribeBillToOSS',
            'BssOpenApi'
        );
    }

    /**
     * @param string $subscribeType
     *
     * @return $this
     */
    public function setSubscribeType($subscribeType)
    {
        $this->requestParameters['SubscribeType'] = $subscribeType;
        $this->queryParameters['SubscribeType'] = $subscribeType;

        return $this;
    }

    /**
     * @param string $multAccountRelSubscribe
     *
     * @return $this
     */
    public function setMultAccountRelSubscribe($multAccountRelSubscribe)
    {
        $this->requestParameters['MultAccountRelSubscribe'] = $multAccountRelSubscribe;
        $this->queryParameters['MultAccountRelSubscribe'] = $multAccountRelSubscribe;

        return $this;
    }
}
