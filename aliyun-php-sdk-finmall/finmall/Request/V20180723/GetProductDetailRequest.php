<?php

namespace finmall\Request\V20180723;

/**
 * Request of GetProductDetail
 *
 * @method string getProductId()
 * @method string getFundPartyId()
 * @method string getUserId()
 */
class GetProductDetailRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'GetProductDetail',
            'finmall'
        );
    }

    /**
     * @param string $productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->requestParameters['ProductId'] = $productId;
        $this->queryParameters['ProductId'] = $productId;

        return $this;
    }

    /**
     * @param string $fundPartyId
     *
     * @return $this
     */
    public function setFundPartyId($fundPartyId)
    {
        $this->requestParameters['FundPartyId'] = $fundPartyId;
        $this->queryParameters['FundPartyId'] = $fundPartyId;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }
}
