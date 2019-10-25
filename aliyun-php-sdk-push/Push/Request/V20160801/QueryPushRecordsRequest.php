<?php

namespace Push\Request\V20160801;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryPushRecords
 *
 * @method string getStartTime()
 * @method string getSource()
 * @method string getNextToken()
 * @method string getPageSize()
 * @method string getKeyword()
 * @method string getEndTime()
 * @method string getTarget()
 * @method string getAppKey()
 * @method string getPushType()
 */
class QueryPushRecordsRequest extends \RpcAcsRequest
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
            'Push',
            '2016-08-01',
            'QueryPushRecords',
            'cps'
        );
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->requestParameters['Source'] = $source;
        $this->queryParameters['Source'] = $source;

        return $this;
    }

    /**
     * @param string $nextToken
     *
     * @return $this
     */
    public function setNextToken($nextToken)
    {
        $this->requestParameters['NextToken'] = $nextToken;
        $this->queryParameters['NextToken'] = $nextToken;

        return $this;
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
     * @param string $keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->requestParameters['Keyword'] = $keyword;
        $this->queryParameters['Keyword'] = $keyword;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->requestParameters['Target'] = $target;
        $this->queryParameters['Target'] = $target;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->requestParameters['AppKey'] = $appKey;
        $this->queryParameters['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $pushType
     *
     * @return $this
     */
    public function setPushType($pushType)
    {
        $this->requestParameters['PushType'] = $pushType;
        $this->queryParameters['PushType'] = $pushType;

        return $this;
    }
}
