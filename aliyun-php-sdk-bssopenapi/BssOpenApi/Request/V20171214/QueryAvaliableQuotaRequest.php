<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryAvaliableQuota
 *
 * @method string getUid()
 * @method string getItemCodes()
 * @method string getBid()
 */
class QueryAvaliableQuotaRequest extends \RpcAcsRequest
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
            'QueryAvaliableQuota'
        );
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->requestParameters['Uid'] = $uid;
        $this->queryParameters['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $itemCodes
     *
     * @return $this
     */
    public function setItemCodes($itemCodes)
    {
        $this->requestParameters['ItemCodes'] = $itemCodes;
        $this->queryParameters['ItemCodes'] = $itemCodes;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

        return $this;
    }
}
