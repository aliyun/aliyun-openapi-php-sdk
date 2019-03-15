<?php

namespace Crm\Request\V20150408;

/**
 * Request of QueryBidUserCertifiedInfo
 *
 * @method string getBidType()
 * @method string getPK()
 */
class QueryBidUserCertifiedInfoRequest extends \RpcAcsRequest
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
            'Crm',
            '2015-04-08',
            'QueryBidUserCertifiedInfo',
            'crm'
        );
    }

    /**
     * @param string $bidType
     *
     * @return $this
     */
    public function setBidType($bidType)
    {
        $this->requestParameters['BidType'] = $bidType;
        $this->queryParameters['BidType'] = $bidType;

        return $this;
    }

    /**
     * @param string $pK
     *
     * @return $this
     */
    public function setPK($pK)
    {
        $this->requestParameters['PK'] = $pK;
        $this->queryParameters['PK'] = $pK;

        return $this;
    }
}
