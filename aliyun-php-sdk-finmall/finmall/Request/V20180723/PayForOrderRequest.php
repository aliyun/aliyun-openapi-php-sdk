<?php

namespace finmall\Request\V20180723;

/**
 * Request of PayForOrder
 *
 * @method string getCreditId()
 * @method string getSmsIvToken()
 * @method string getUserId()
 */
class PayForOrderRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'PayForOrder',
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
     * @param string $smsIvToken
     *
     * @return $this
     */
    public function setSmsIvToken($smsIvToken)
    {
        $this->requestParameters['SmsIvToken'] = $smsIvToken;
        $this->queryParameters['SmsIvToken'] = $smsIvToken;

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
