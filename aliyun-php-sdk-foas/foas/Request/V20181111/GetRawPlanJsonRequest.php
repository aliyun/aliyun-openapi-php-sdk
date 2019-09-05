<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetRawPlanJson
 *
 * @method string getprojectName()
 * @method string getexpectedGB()
 * @method string getexpectedCore()
 * @method string getjobName()
 * @method string getautoconfEnable()
 */
class GetRawPlanJsonRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/planjson';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'GetRawPlanJson',
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
     * @param string $expectedGB
     *
     * @return $this
     */
    public function setexpectedGB($expectedGB)
    {
        $this->requestParameters['expectedGB'] = $expectedGB;
        $this->queryParameters['expectedGB'] = $expectedGB;

        return $this;
    }

    /**
     * @param string $expectedCore
     *
     * @return $this
     */
    public function setexpectedCore($expectedCore)
    {
        $this->requestParameters['expectedCore'] = $expectedCore;
        $this->queryParameters['expectedCore'] = $expectedCore;

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

    /**
     * @param string $autoconfEnable
     *
     * @return $this
     */
    public function setautoconfEnable($autoconfEnable)
    {
        $this->requestParameters['autoconfEnable'] = $autoconfEnable;
        $this->queryParameters['autoconfEnable'] = $autoconfEnable;

        return $this;
    }
}
