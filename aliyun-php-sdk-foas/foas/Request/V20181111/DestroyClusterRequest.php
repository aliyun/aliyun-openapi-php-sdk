<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DestroyCluster
 *
 * @method string getclusterId()
 */
class DestroyClusterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/clusters/[clusterId]';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'DestroyCluster',
            'foas'
        );
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setclusterId($clusterId)
    {
        $this->requestParameters['clusterId'] = $clusterId;
        $this->pathParameters['clusterId'] = $clusterId;

        return $this;
    }
}
