<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteQueue
 *
 * @method string getQueueName()
 * @method string getClusterId()
 */
class DeleteQueueRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'DeleteQueue',
            'ehs'
        );
    }

    /**
     * @param string $queueName
     *
     * @return $this
     */
    public function setQueueName($queueName)
    {
        $this->requestParameters['QueueName'] = $queueName;
        $this->queryParameters['QueueName'] = $queueName;

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
