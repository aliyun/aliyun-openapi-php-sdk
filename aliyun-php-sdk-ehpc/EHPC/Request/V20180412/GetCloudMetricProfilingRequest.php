<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetCloudMetricProfiling
 *
 * @method string getProfilingId()
 * @method string getClusterId()
 */
class GetCloudMetricProfilingRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'GetCloudMetricProfiling',
            'ehs'
        );
    }

    /**
     * @param string $profilingId
     *
     * @return $this
     */
    public function setProfilingId($profilingId)
    {
        $this->requestParameters['ProfilingId'] = $profilingId;
        $this->queryParameters['ProfilingId'] = $profilingId;

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
