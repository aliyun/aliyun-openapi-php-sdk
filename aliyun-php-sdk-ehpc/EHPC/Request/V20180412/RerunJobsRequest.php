<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RerunJobs
 *
 * @method string getJobs()
 * @method string getClusterId()
 */
class RerunJobsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'RerunJobs',
            'ehs'
        );
    }

    /**
     * @param string $jobs
     *
     * @return $this
     */
    public function setJobs($jobs)
    {
        $this->requestParameters['Jobs'] = $jobs;
        $this->queryParameters['Jobs'] = $jobs;

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
