<?php

namespace finmall\Request\V20180723;

/**
 * Request of GetRepayPlanTrial
 *
 * @method string getCreditId()
 * @method string getProductId()
 * @method string getUserId()
 */
class GetRepayPlanTrialRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'GetRepayPlanTrial',
            'finmall'
        );
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
