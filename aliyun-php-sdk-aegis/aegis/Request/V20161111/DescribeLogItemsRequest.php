<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeLogItems
 *
 * @method string getLoginOffset()
 * @method string getProcessSnapshotOffset()
 * @method string getPortSnapshotOffset()
 * @method string getQuery()
 * @method string getEndTime()
 * @method string getCurrentPage()
 * @method string getNetworkOffset()
 * @method string getStartTime()
 * @method string getAccountSnapshotOffset()
 * @method string getProcessOffset()
 * @method string getSourceIp()
 * @method string getCrackOffset()
 * @method string getPageSize()
 */
class DescribeLogItemsRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'DescribeLogItems',
            'vipaegis'
        );
    }

    /**
     * @param string $loginOffset
     *
     * @return $this
     */
    public function setLoginOffset($loginOffset)
    {
        $this->requestParameters['LoginOffset'] = $loginOffset;
        $this->queryParameters['LoginOffset'] = $loginOffset;

        return $this;
    }

    /**
     * @param string $processSnapshotOffset
     *
     * @return $this
     */
    public function setProcessSnapshotOffset($processSnapshotOffset)
    {
        $this->requestParameters['ProcessSnapshotOffset'] = $processSnapshotOffset;
        $this->queryParameters['ProcessSnapshotOffset'] = $processSnapshotOffset;

        return $this;
    }

    /**
     * @param string $portSnapshotOffset
     *
     * @return $this
     */
    public function setPortSnapshotOffset($portSnapshotOffset)
    {
        $this->requestParameters['PortSnapshotOffset'] = $portSnapshotOffset;
        $this->queryParameters['PortSnapshotOffset'] = $portSnapshotOffset;

        return $this;
    }

    /**
     * @param string $query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->requestParameters['Query'] = $query;
        $this->queryParameters['Query'] = $query;

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
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $networkOffset
     *
     * @return $this
     */
    public function setNetworkOffset($networkOffset)
    {
        $this->requestParameters['NetworkOffset'] = $networkOffset;
        $this->queryParameters['NetworkOffset'] = $networkOffset;

        return $this;
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
     * @param string $accountSnapshotOffset
     *
     * @return $this
     */
    public function setAccountSnapshotOffset($accountSnapshotOffset)
    {
        $this->requestParameters['AccountSnapshotOffset'] = $accountSnapshotOffset;
        $this->queryParameters['AccountSnapshotOffset'] = $accountSnapshotOffset;

        return $this;
    }

    /**
     * @param string $processOffset
     *
     * @return $this
     */
    public function setProcessOffset($processOffset)
    {
        $this->requestParameters['ProcessOffset'] = $processOffset;
        $this->queryParameters['ProcessOffset'] = $processOffset;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $crackOffset
     *
     * @return $this
     */
    public function setCrackOffset($crackOffset)
    {
        $this->requestParameters['CrackOffset'] = $crackOffset;
        $this->queryParameters['CrackOffset'] = $crackOffset;

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
}
