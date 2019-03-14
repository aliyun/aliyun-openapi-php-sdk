<?php

namespace gpdb\Request\V20160503;

/**
 * Request of DescribeSQLLogRecords
 *
 * @method string getDatabase()
 * @method string getForm()
 * @method string getPageSize()
 * @method string getEndTime()
 * @method string getDBInstanceId()
 * @method string getStartTime()
 * @method string getUser()
 * @method string getQueryKeywords()
 * @method string getPageNumber()
 */
class DescribeSQLLogRecordsRequest extends \RpcAcsRequest
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
            'gpdb',
            '2016-05-03',
            'DescribeSQLLogRecords',
            'gpdb'
        );
    }

    /**
     * @param string $database
     *
     * @return $this
     */
    public function setDatabase($database)
    {
        $this->requestParameters['Database'] = $database;
        $this->queryParameters['Database'] = $database;

        return $this;
    }

    /**
     * @param string $form
     *
     * @return $this
     */
    public function setForm($form)
    {
        $this->requestParameters['Form'] = $form;
        $this->queryParameters['Form'] = $form;

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
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

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
     * @param string $user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->requestParameters['User'] = $user;
        $this->queryParameters['User'] = $user;

        return $this;
    }

    /**
     * @param string $queryKeywords
     *
     * @return $this
     */
    public function setQueryKeywords($queryKeywords)
    {
        $this->requestParameters['QueryKeywords'] = $queryKeywords;
        $this->queryParameters['QueryKeywords'] = $queryKeywords;

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
