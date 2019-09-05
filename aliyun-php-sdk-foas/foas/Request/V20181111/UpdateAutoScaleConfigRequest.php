<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateAutoScaleConfig
 *
 * @method string getprojectName()
 * @method string getinstanceId()
 * @method string getconfigJson()
 * @method string getjobName()
 */
class UpdateAutoScaleConfigRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instance/[instanceId]/autoscale/config';

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
            'UpdateAutoScaleConfig',
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
        $this->pathParameters['instanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $configJson
     *
     * @return $this
     */
    public function setconfigJson($configJson)
    {
        $this->requestParameters['configJson'] = $configJson;
        $this->queryParameters['configJson'] = $configJson;

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
