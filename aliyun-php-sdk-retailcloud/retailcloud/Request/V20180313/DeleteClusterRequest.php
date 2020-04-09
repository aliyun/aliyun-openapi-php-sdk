<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteCluster
 *
 * @method string getClusterInstanceId()
 */
class DeleteClusterRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'DeleteCluster',
            'retailcloud'
        );
    }

    /**
     * @param string $clusterInstanceId
     *
     * @return $this
     */
    public function setClusterInstanceId($clusterInstanceId)
    {
        $this->requestParameters['ClusterInstanceId'] = $clusterInstanceId;
        $this->queryParameters['ClusterInstanceId'] = $clusterInstanceId;

        return $this;
    }
}
