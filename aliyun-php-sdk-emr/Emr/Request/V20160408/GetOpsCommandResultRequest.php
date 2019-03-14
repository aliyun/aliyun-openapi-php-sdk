<?php

namespace Emr\Request\V20160408;

/**
 * Request of GetOpsCommandResult
 *
 * @method string getResourceOwnerId()
 * @method string getEndCursor()
 * @method string getStartCursor()
 * @method string getClusterId()
 * @method string getTaskId()
 */
class GetOpsCommandResultRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Emr',
            '2016-04-08',
            'GetOpsCommandResult',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $endCursor
     *
     * @return $this
     */
    public function setEndCursor($endCursor)
    {
        $this->requestParameters['EndCursor'] = $endCursor;
        $this->queryParameters['EndCursor'] = $endCursor;

        return $this;
    }

    /**
     * @param string $startCursor
     *
     * @return $this
     */
    public function setStartCursor($startCursor)
    {
        $this->requestParameters['StartCursor'] = $startCursor;
        $this->queryParameters['StartCursor'] = $startCursor;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->requestParameters['TaskId'] = $taskId;
        $this->queryParameters['TaskId'] = $taskId;

        return $this;
    }
}
