<?php

namespace TeslaStream\Request\V20180115;

/**
 * Request of GetJobTopology
 *
 * @method string getJobName()
 */
class GetJobTopologyRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaStream',
            '2018-01-15',
            'GetJobTopology',
            'teslastream'
        );
    }

    /**
     * @param string $jobName
     *
     * @return $this
     */
    public function setJobName($jobName)
    {
        $this->requestParameters['JobName'] = $jobName;
        $this->queryParameters['JobName'] = $jobName;

        return $this;
    }
}
