<?php

namespace TeslaDam\Request\V20180118;

/**
 * Request of HostGets
 *
 * @method string getQuery()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getQueryType()
 */
class HostGetsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaDam',
            '2018-01-18',
            'HostGets',
            'tesladam'
        );
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
     * @param string $queryType
     *
     * @return $this
     */
    public function setQueryType($queryType)
    {
        $this->requestParameters['QueryType'] = $queryType;
        $this->queryParameters['QueryType'] = $queryType;

        return $this;
    }
}
