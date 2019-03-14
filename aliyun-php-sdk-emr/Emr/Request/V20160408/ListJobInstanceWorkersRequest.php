<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListJobInstanceWorkers
 *
 * @method string getResourceOwnerId()
 * @method string getJobInstanceId()
 */
class ListJobInstanceWorkersRequest extends \RpcAcsRequest
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
            'ListJobInstanceWorkers',
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
     * @param string $jobInstanceId
     *
     * @return $this
     */
    public function setJobInstanceId($jobInstanceId)
    {
        $this->requestParameters['JobInstanceId'] = $jobInstanceId;
        $this->queryParameters['JobInstanceId'] = $jobInstanceId;

        return $this;
    }
}
