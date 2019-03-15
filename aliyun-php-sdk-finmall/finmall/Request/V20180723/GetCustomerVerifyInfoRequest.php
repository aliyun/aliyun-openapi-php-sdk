<?php

namespace finmall\Request\V20180723;

/**
 * Request of GetCustomerVerifyInfo
 *
 * @method string getUserId()
 */
class GetCustomerVerifyInfoRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'GetCustomerVerifyInfo',
            'finmall'
        );
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
