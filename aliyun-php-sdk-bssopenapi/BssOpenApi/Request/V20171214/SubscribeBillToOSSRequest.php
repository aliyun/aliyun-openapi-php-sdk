<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubscribeBillToOSS
 *
 * @method string getSubscribeType()
 * @method string getSubscribeBucket()
 */
class SubscribeBillToOSSRequest extends \RpcAcsRequest
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
            'SubscribeBillToOSS'
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
     * @param string $subscribeBucket
     *
     * @return $this
     */
    public function setSubscribeBucket($subscribeBucket)
    {
        $this->requestParameters['SubscribeBucket'] = $subscribeBucket;
        $this->queryParameters['SubscribeBucket'] = $subscribeBucket;

        return $this;
    }
}
