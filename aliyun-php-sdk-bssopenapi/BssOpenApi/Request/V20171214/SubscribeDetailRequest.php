<?php

namespace BssOpenApi\Request\V20171214;

/**
 * Request of SubscribeDetail
 *
 * @method string getBucketOwnerId()
 * @method array getSubscribeTypes()
 * @method string getSubscribeBucket()
 */
class SubscribeDetailRequest extends \RpcAcsRequest
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
            'SubscribeDetail'
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
     * @param array $subscribeTypes
     *
     * @return $this
     */
    public function setSubscribeTypes(array $subscribeTypes)
    {
        $this->requestParameters['SubscribeTypes'] = $subscribeTypes;
        foreach ($subscribeTypes as $i => $iValue) {
            $this->queryParameters['SubscribeType.' . ($i + 1)] = $iValue;
        }

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
