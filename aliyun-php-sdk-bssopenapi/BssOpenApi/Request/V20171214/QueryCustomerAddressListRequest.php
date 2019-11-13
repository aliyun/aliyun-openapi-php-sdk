<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryCustomerAddressList
 *
 * @method string getcallerBid()
 * @method string getOwnerId()
 * @method string getcallerUid()
 */
class QueryCustomerAddressListRequest extends \RpcAcsRequest
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
            'QueryCustomerAddressList',
            'BssOpenApi'
        );
    }

    /**
     * @param string $callerBid
     *
     * @return $this
     */
    public function setcallerBid($callerBid)
    {
        $this->requestParameters['callerBid'] = $callerBid;
        $this->queryParameters['callerBid'] = $callerBid;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $callerUid
     *
     * @return $this
     */
    public function setcallerUid($callerUid)
    {
        $this->requestParameters['callerUid'] = $callerUid;
        $this->queryParameters['callerUid'] = $callerUid;

        return $this;
    }
}
