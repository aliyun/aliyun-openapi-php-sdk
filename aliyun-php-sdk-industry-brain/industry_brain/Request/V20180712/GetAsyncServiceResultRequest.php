<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of GetAsyncServiceResult
 *
 * @method string getTaskId()
 */
class GetAsyncServiceResultRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'industry-brain',
            '2018-07-12',
            'GetAsyncServiceResult'
        );
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
