<?php

namespace finmall\Request\V20180723;

/**
 * Request of AddCustomInfo
 *
 * @method string getUserId()
 */
class AddCustomInfoRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'AddCustomInfo',
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
