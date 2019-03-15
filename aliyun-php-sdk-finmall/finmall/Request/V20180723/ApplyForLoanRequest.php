<?php

namespace finmall\Request\V20180723;

/**
 * Request of ApplyForLoan
 *
 * @method string getBizType()
 * @method string getCreditId()
 * @method string getProductId()
 * @method string getFundpartyId()
 * @method string getBizData()
 * @method string getUserId()
 */
class ApplyForLoanRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'ApplyForLoan',
            'finmall'
        );
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        $this->requestParameters['BizType'] = $bizType;
        $this->queryParameters['BizType'] = $bizType;

        return $this;
    }

    /**
     * @param string $creditId
     *
     * @return $this
     */
    public function setCreditId($creditId)
    {
        $this->requestParameters['CreditId'] = $creditId;
        $this->queryParameters['CreditId'] = $creditId;

        return $this;
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
     * @param string $fundpartyId
     *
     * @return $this
     */
    public function setFundpartyId($fundpartyId)
    {
        $this->requestParameters['FundpartyId'] = $fundpartyId;
        $this->queryParameters['FundpartyId'] = $fundpartyId;

        return $this;
    }

    /**
     * @param string $bizData
     *
     * @return $this
     */
    public function setBizData($bizData)
    {
        $this->requestParameters['BizData'] = $bizData;
        $this->queryParameters['BizData'] = $bizData;

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
