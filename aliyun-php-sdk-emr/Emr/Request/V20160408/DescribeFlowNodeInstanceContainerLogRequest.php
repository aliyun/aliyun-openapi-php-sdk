<?php

namespace Emr\Request\V20160408;

/**
 * Request of DescribeFlowNodeInstanceContainerLog
 *
 * @method string getOffset()
 * @method string getLogName()
 * @method string getAppId()
 * @method string getLength()
 * @method string getContainerId()
 * @method string getNodeInstanceId()
 * @method string getProjectId()
 */
class DescribeFlowNodeInstanceContainerLogRequest extends \RpcAcsRequest
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
            'DescribeFlowNodeInstanceContainerLog',
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
     * @param string $logName
     *
     * @return $this
     */
    public function setLogName($logName)
    {
        $this->requestParameters['LogName'] = $logName;
        $this->queryParameters['LogName'] = $logName;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

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
     * @param string $containerId
     *
     * @return $this
     */
    public function setContainerId($containerId)
    {
        $this->requestParameters['ContainerId'] = $containerId;
        $this->queryParameters['ContainerId'] = $containerId;

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
