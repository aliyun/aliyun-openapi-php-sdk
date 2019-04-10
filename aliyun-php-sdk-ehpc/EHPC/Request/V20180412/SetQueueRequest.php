<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetQueue
 *
 * @method string getQueueName()
 * @method array getNodes()
 * @method string getClusterId()
 */
class SetQueueRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'SetQueue',
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
     * @param array $node
     *
     * @return $this
     */
    public function setNodes(array $node)
    {
        $this->requestParameters['Nodes'] = $node;
        foreach ($node as $depth1 => $depth1Value) {
            $this->queryParameters['Node.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
        }

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
