<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CancelOTATaskByJob
 *
 * @method string getCancelScheduledTask()
 * @method string getJobId()
 * @method string getIotInstanceId()
 * @method string getCancelQueuedTask()
 * @method string getCancelInProgressTask()
 * @method string getCancelNotifiedTask()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CancelOTATaskByJobRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'CancelOTATaskByJob',
            'iot'
        );
    }

    /**
     * @param string $cancelScheduledTask
     *
     * @return $this
     */
    public function setCancelScheduledTask($cancelScheduledTask)
    {
        $this->requestParameters['CancelScheduledTask'] = $cancelScheduledTask;
        $this->queryParameters['CancelScheduledTask'] = $cancelScheduledTask;

        return $this;
    }

    /**
     * @param string $jobId
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->requestParameters['JobId'] = $jobId;
        $this->queryParameters['JobId'] = $jobId;

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $cancelQueuedTask
     *
     * @return $this
     */
    public function setCancelQueuedTask($cancelQueuedTask)
    {
        $this->requestParameters['CancelQueuedTask'] = $cancelQueuedTask;
        $this->queryParameters['CancelQueuedTask'] = $cancelQueuedTask;

        return $this;
    }

    /**
     * @param string $cancelInProgressTask
     *
     * @return $this
     */
    public function setCancelInProgressTask($cancelInProgressTask)
    {
        $this->requestParameters['CancelInProgressTask'] = $cancelInProgressTask;
        $this->queryParameters['CancelInProgressTask'] = $cancelInProgressTask;

        return $this;
    }

    /**
     * @param string $cancelNotifiedTask
     *
     * @return $this
     */
    public function setCancelNotifiedTask($cancelNotifiedTask)
    {
        $this->requestParameters['CancelNotifiedTask'] = $cancelNotifiedTask;
        $this->queryParameters['CancelNotifiedTask'] = $cancelNotifiedTask;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }
}
