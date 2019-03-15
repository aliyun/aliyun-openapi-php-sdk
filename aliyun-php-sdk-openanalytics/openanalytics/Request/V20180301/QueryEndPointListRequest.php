<?php

namespace openanalytics\Request\V20180301;

/**
 * Request of QueryEndPointList
 *
 * @method string getUserID()
 */
class QueryEndPointListRequest extends \RpcAcsRequest
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
            'openanalytics',
            '2018-03-01',
            'QueryEndPointList',
            'openanalytics'
        );
    }

    /**
     * @param string $userID
     *
     * @return $this
     */
    public function setUserID($userID)
    {
        $this->requestParameters['UserID'] = $userID;
        $this->queryParameters['UserID'] = $userID;

        return $this;
    }
}
