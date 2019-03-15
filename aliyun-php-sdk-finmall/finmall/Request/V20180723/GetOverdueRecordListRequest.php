<?php

namespace finmall\Request\V20180723;

/**
 * Request of GetOverdueRecordList
 *
 * @method string getPageSize()
 * @method string getQueryExpression()
 * @method string getUserId()
 * @method string getPageNumber()
 */
class GetOverdueRecordListRequest extends \RpcAcsRequest
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
            'finmall',
            '2018-07-23',
            'GetOverdueRecordList',
            'finmall'
        );
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $queryExpression
     *
     * @return $this
     */
    public function setQueryExpression($queryExpression)
    {
        $this->requestParameters['QueryExpression'] = $queryExpression;
        $this->queryParameters['QueryExpression'] = $queryExpression;

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

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
