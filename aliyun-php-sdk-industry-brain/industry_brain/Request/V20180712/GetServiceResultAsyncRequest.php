<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of GetServiceResultAsync
 *
 * @method string getTaskId()
 */
class GetServiceResultAsyncRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'industry-brain',
            '2018-07-12',
            'GetServiceResultAsync'
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
