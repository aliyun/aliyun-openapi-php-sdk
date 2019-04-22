<?php

namespace Domain\Request\V20180208;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BidDomain
 *
 * @method string getAuctionId()
 * @method string getMaxBid()
 * @method string getCurrency()
 */
class BidDomainRequest extends \RpcAcsRequest
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
            'BidDomain'
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

    /**
     * @param string $maxBid
     *
     * @return $this
     */
    public function setMaxBid($maxBid)
    {
        $this->requestParameters['MaxBid'] = $maxBid;
        $this->queryParameters['MaxBid'] = $maxBid;

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
}
