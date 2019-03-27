<?php

namespace ivision\Request\V20190308;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeIterations
 *
 * @method string getThreshold()
 * @method string getProjectId()
 * @method string getShowLog()
 * @method string getIterationIds()
 * @method string getOwnerId()
 * @method string getStatus()
 */
class DescribeIterationsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ivision',
            '2019-03-08',
            'DescribeIterations',
            'ivision'
        );
    }

    /**
     * @param string $threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->requestParameters['Threshold'] = $threshold;
        $this->queryParameters['Threshold'] = $threshold;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param string $showLog
     *
     * @return $this
     */
    public function setShowLog($showLog)
    {
        $this->requestParameters['ShowLog'] = $showLog;
        $this->queryParameters['ShowLog'] = $showLog;

        return $this;
    }

    /**
     * @param string $iterationIds
     *
     * @return $this
     */
    public function setIterationIds($iterationIds)
    {
        $this->requestParameters['IterationIds'] = $iterationIds;
        $this->queryParameters['IterationIds'] = $iterationIds;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

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
}
