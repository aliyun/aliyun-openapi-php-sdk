<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CheckRawPlanJson
 *
 * @method string getprojectName()
 * @method string getsessionId()
 * @method string getjobName()
 */
class CheckRawPlanJsonRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/planjson/check';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'CheckRawPlanJson',
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
     * @param string $sessionId
     *
     * @return $this
     */
    public function setsessionId($sessionId)
    {
        $this->requestParameters['sessionId'] = $sessionId;
        $this->queryParameters['sessionId'] = $sessionId;

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
