<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListFlowNodeSqlResult
 *
 * @method string getOffset()
 * @method string getLength()
 * @method string getSqlIndex()
 * @method string getNodeInstanceId()
 * @method string getProjectId()
 */
class ListFlowNodeSqlResultRequest extends \RpcAcsRequest
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
            'ListFlowNodeSqlResult',
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
     * @param string $sqlIndex
     *
     * @return $this
     */
    public function setSqlIndex($sqlIndex)
    {
        $this->requestParameters['SqlIndex'] = $sqlIndex;
        $this->queryParameters['SqlIndex'] = $sqlIndex;

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
