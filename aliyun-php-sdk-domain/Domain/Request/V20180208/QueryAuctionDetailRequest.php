<?php

namespace Domain\Request\V20180208;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryAuctionDetail
 *
 * @method string getAuctionId()
 */
class QueryAuctionDetailRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-02-08',
            'QueryAuctionDetail'
        );
    }

    /**
     * @param string $auctionId
     *
     * @return $this
     */
    public function setAuctionId($auctionId)
    {
        $this->requestParameters['AuctionId'] = $auctionId;
        $this->queryParameters['AuctionId'] = $auctionId;

        return $this;
    }
}
