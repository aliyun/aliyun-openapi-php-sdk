<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CommitJob
 *
 * @method string getprojectName()
 * @method string getmaxCU()
 * @method string getconfigure()
 * @method string getisOnOff()
 * @method string getjobName()
 */
class CommitJobRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/commit';

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
            'CommitJob',
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
     * @param string $maxCU
     *
     * @return $this
     */
    public function setmaxCU($maxCU)
    {
        $this->requestParameters['maxCU'] = $maxCU;
        $this->queryParameters['maxCU'] = $maxCU;

        return $this;
    }

    /**
     * @param string $configure
     *
     * @return $this
     */
    public function setconfigure($configure)
    {
        $this->requestParameters['configure'] = $configure;
        $this->queryParameters['configure'] = $configure;

        return $this;
    }

    /**
     * @param string $isOnOff
     *
     * @return $this
     */
    public function setisOnOff($isOnOff)
    {
        $this->requestParameters['isOnOff'] = $isOnOff;
        $this->queryParameters['isOnOff'] = $isOnOff;

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
