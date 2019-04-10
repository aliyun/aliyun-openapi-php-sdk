<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RunCloudMetricProfiling
 *
 * @method string getDuration()
 * @method string getHostName()
 * @method string getProcessId()
 * @method string getFreq()
 * @method string getClusterId()
 */
class RunCloudMetricProfilingRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'RunCloudMetricProfiling',
            'ehs'
        );
    }

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->requestParameters['Duration'] = $duration;
        $this->queryParameters['Duration'] = $duration;

        return $this;
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $processId
     *
     * @return $this
     */
    public function setProcessId($processId)
    {
        $this->requestParameters['ProcessId'] = $processId;
        $this->queryParameters['ProcessId'] = $processId;

        return $this;
    }

    /**
     * @param string $freq
     *
     * @return $this
     */
    public function setFreq($freq)
    {
        $this->requestParameters['Freq'] = $freq;
        $this->queryParameters['Freq'] = $freq;

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
