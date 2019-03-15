<?php

namespace finmall\Request\V20180723;

/**
 * Request of SignLoanAgreement
 *
 * @method string getCreditId()
 * @method string getReserved()
 * @method string getUserId()
 */
class SignLoanAgreementRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'SignLoanAgreement',
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
     * @param string $reserved
     *
     * @return $this
     */
    public function setReserved($reserved)
    {
        $this->requestParameters['Reserved'] = $reserved;
        $this->queryParameters['Reserved'] = $reserved;

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
