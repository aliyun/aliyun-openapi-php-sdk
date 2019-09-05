<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyInstanceState
 *
 * @method string getisFlush()
 * @method string getprojectName()
 * @method string getinstanceId()
 * @method string getexpectState()
 * @method string getjobName()
 */
class ModifyInstanceStateRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/expectstate';

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
            'ModifyInstanceState',
            'foas'
        );
    }

    /**
     * @param string $isFlush
     *
     * @return $this
     */
    public function setisFlush($isFlush)
    {
        $this->requestParameters['isFlush'] = $isFlush;
        $this->queryParameters['isFlush'] = $isFlush;

        return $this;
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
     * @param string $expectState
     *
     * @return $this
     */
    public function setexpectState($expectState)
    {
        $this->requestParameters['expectState'] = $expectState;
        $this->queryParameters['expectState'] = $expectState;

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
