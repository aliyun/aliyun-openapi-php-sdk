<?php

namespace TeslaStream\Request\V20180115;

/**
 * Request of BatchGetJobMetricInfo
 *
 * @method string getJobInfos()
 */
class BatchGetJobMetricInfoRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaStream',
            '2018-01-15',
            'BatchGetJobMetricInfo',
            'teslastream'
        );
    }

    /**
     * @param string $jobInfos
     *
     * @return $this
     */
    public function setJobInfos($jobInfos)
    {
        $this->requestParameters['JobInfos'] = $jobInfos;
        $this->queryParameters['JobInfos'] = $jobInfos;

        return $this;
    }
}
