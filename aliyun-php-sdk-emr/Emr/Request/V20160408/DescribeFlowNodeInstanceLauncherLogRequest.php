<?php

namespace Emr\Request\V20160408;

/**
 * Request of DescribeFlowNodeInstanceLauncherLog
 *
 * @method string getOffset()
 * @method string getStart()
 * @method string getLength()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getLines()
 * @method string getReverse()
 * @method string getNodeInstanceId()
 * @method string getProjectId()
 */
class DescribeFlowNodeInstanceLauncherLogRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'DescribeFlowNodeInstanceLauncherLog',
            'emr'
        );
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->requestParameters['Offset'] = $offset;
        $this->queryParameters['Offset'] = $offset;

        return $this;
    }

    /**
     * @param string $start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->requestParameters['Start'] = $start;
        $this->queryParameters['Start'] = $start;

        return $this;
    }

    /**
     * @param string $length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->requestParameters['Length'] = $length;
        $this->queryParameters['Length'] = $length;

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
     * @param string $lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->requestParameters['Lines'] = $lines;
        $this->queryParameters['Lines'] = $lines;

        return $this;
    }

    /**
     * @param string $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->requestParameters['Reverse'] = $reverse;
        $this->queryParameters['Reverse'] = $reverse;

        return $this;
    }

    /**
     * @param string $nodeInstanceId
     *
     * @return $this
     */
    public function setNodeInstanceId($nodeInstanceId)
    {
        $this->requestParameters['NodeInstanceId'] = $nodeInstanceId;
        $this->queryParameters['NodeInstanceId'] = $nodeInstanceId;

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
}
