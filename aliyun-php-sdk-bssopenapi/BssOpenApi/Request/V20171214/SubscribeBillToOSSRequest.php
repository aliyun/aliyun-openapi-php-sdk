<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubscribeBillToOSS
 *
 * @method string getBucketOwnerId()
 * @method string getSubscribeType()
 * @method string getSubscribeBucket()
 * @method string getMultAccountRelSubscribe()
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
            'SubscribeBillToOSS',
            'BssOpenApi'
        );
    }

    /**
     * @param string $bucketOwnerId
     *
     * @return $this
     */
    public function setBucketOwnerId($bucketOwnerId)
    {
        $this->requestParameters['BucketOwnerId'] = $bucketOwnerId;
        $this->queryParameters['BucketOwnerId'] = $bucketOwnerId;

        return $this;
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
