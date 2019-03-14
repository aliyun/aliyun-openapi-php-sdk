<?php

namespace Emr\Request\V20160408;

/**
 * Request of DeleteResourceQueue
 *
 * @method string getResourceOwnerId()
 * @method string getResourceQueueId()
 * @method string getClusterId()
 */
class DeleteResourceQueueRequest extends \RpcAcsRequest
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
            'DeleteResourceQueue',
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
     * @param string $resourceQueueId
     *
     * @return $this
     */
    public function setResourceQueueId($resourceQueueId)
    {
        $this->requestParameters['ResourceQueueId'] = $resourceQueueId;
        $this->queryParameters['ResourceQueueId'] = $resourceQueueId;

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
}
