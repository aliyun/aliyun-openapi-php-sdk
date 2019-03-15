<?php

namespace finmall\Request\V20180723;

/**
 * Request of QueryFundPartyList
 *
 * @method string getUserId()
 */
class QueryFundPartyListRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'QueryFundPartyList',
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
