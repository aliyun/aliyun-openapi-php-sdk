<?php

namespace finmall\Request\V20180723;

/**
 * Request of GetZhimaScore
 *
 * @method string getUserId()
 */
class GetZhimaScoreRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'GetZhimaScore',
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
