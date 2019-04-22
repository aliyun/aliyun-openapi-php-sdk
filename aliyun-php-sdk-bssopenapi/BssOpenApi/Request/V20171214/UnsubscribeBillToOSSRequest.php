<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UnsubscribeBillToOSS
 *
 * @method string getSubscribeType()
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
            'UnsubscribeBillToOSS'
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
}
