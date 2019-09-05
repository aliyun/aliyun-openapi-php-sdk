<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetInstanceMetric
 *
 * @method string getprojectName()
 * @method string getinstanceId()
 * @method string getmetricJson()
 * @method string getjobName()
 */
class GetInstanceMetricRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/metric';

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
            'foas',
            '2018-11-11',
            'GetInstanceMetric',
            'foas'
        );
    }

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function setprojectName($projectName)
    {
        $this->requestParameters['projectName'] = $projectName;
        $this->pathParameters['projectName'] = $projectName;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setinstanceId($instanceId)
    {
        $this->requestParameters['instanceId'] = $instanceId;
        $this->queryParameters['instanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $metricJson
     *
     * @return $this
     */
    public function setmetricJson($metricJson)
    {
        $this->requestParameters['metricJson'] = $metricJson;
        $this->queryParameters['metricJson'] = $metricJson;

        return $this;
    }

    /**
     * @param string $jobName
     *
     * @return $this
     */
    public function setjobName($jobName)
    {
        $this->requestParameters['jobName'] = $jobName;
        $this->pathParameters['jobName'] = $jobName;

        return $this;
    }
}
