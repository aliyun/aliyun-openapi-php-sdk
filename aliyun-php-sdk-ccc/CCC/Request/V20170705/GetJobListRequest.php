<?php

namespace CCC\Request\V20170705;

/**
 * Request of GetJobList
 *
 * @method string getInstanceId()
 * @method string getJobGroupId()
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getStatus()
 * @method string getQueryAll()
 */
class GetJobListRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'GetJobList'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $jobGroupId
     *
     * @return $this
     */
    public function setJobGroupId($jobGroupId)
    {
        $this->requestParameters['JobGroupId'] = $jobGroupId;
        $this->queryParameters['JobGroupId'] = $jobGroupId;

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

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }

    /**
     * @param string $queryAll
     *
     * @return $this
     */
    public function setQueryAll($queryAll)
    {
        $this->requestParameters['QueryAll'] = $queryAll;
        $this->queryParameters['QueryAll'] = $queryAll;

        return $this;
    }
}
