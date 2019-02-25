<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of AsyncResponsePost
 *
 * @method string getData()
 * @method string getProgress()
 * @method string getMessage()
 * @method string getTaskId()
 * @method string getStatus()
 */
class AsyncResponsePostRequest extends \RpcAcsRequest
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
            'industry-brain',
            '2018-07-12',
            'AsyncResponsePost'
        );
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->requestParameters['Data'] = $data;
        $this->queryParameters['Data'] = $data;

        return $this;
    }

    /**
     * @param string $progress
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->requestParameters['Progress'] = $progress;
        $this->queryParameters['Progress'] = $progress;

        return $this;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->requestParameters['Message'] = $message;
        $this->queryParameters['Message'] = $message;

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
