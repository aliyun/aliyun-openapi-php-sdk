<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ShrinkCluster
 *
 * @method string getinstanceIds()
 * @method string getclusterId()
 * @method string getmodelTargetCount()
 */
class ShrinkClusterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/clusters/[clusterId]/shrink';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'ShrinkCluster',
            'foas'
        );
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setinstanceIds($instanceIds)
    {
        $this->requestParameters['instanceIds'] = $instanceIds;
        $this->queryParameters['instanceIds'] = $instanceIds;

        return $this;
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

    /**
     * @param string $modelTargetCount
     *
     * @return $this
     */
    public function setmodelTargetCount($modelTargetCount)
    {
        $this->requestParameters['modelTargetCount'] = $modelTargetCount;
        $this->queryParameters['modelTargetCount'] = $modelTargetCount;

        return $this;
    }
}
