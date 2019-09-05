<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ValidateJob
 *
 * @method string getprojectName()
 * @method string getjobName()
 */
class ValidateJobRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/validate';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'ValidateJob',
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
