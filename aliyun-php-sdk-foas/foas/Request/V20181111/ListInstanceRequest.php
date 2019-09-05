<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListInstance
 *
 * @method string getprojectName()
 * @method string getendBeginTs()
 * @method string getexpectState()
 * @method string getjobType()
 * @method string getapiType()
 * @method string getactualState()
 * @method string getendEndTs()
 * @method string getstartEndTs()
 * @method string getpageSize()
 * @method string getstartBeginTs()
 * @method string getpageIndex()
 * @method string getisArchived()
 * @method string getjobName()
 */
class ListInstanceRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/instances';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'ListInstance',
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
     * @param string $endBeginTs
     *
     * @return $this
     */
    public function setendBeginTs($endBeginTs)
    {
        $this->requestParameters['endBeginTs'] = $endBeginTs;
        $this->queryParameters['endBeginTs'] = $endBeginTs;

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
     * @param string $jobType
     *
     * @return $this
     */
    public function setjobType($jobType)
    {
        $this->requestParameters['jobType'] = $jobType;
        $this->queryParameters['jobType'] = $jobType;

        return $this;
    }

    /**
     * @param string $apiType
     *
     * @return $this
     */
    public function setapiType($apiType)
    {
        $this->requestParameters['apiType'] = $apiType;
        $this->queryParameters['apiType'] = $apiType;

        return $this;
    }

    /**
     * @param string $actualState
     *
     * @return $this
     */
    public function setactualState($actualState)
    {
        $this->requestParameters['actualState'] = $actualState;
        $this->queryParameters['actualState'] = $actualState;

        return $this;
    }

    /**
     * @param string $endEndTs
     *
     * @return $this
     */
    public function setendEndTs($endEndTs)
    {
        $this->requestParameters['endEndTs'] = $endEndTs;
        $this->queryParameters['endEndTs'] = $endEndTs;

        return $this;
    }

    /**
     * @param string $startEndTs
     *
     * @return $this
     */
    public function setstartEndTs($startEndTs)
    {
        $this->requestParameters['startEndTs'] = $startEndTs;
        $this->queryParameters['startEndTs'] = $startEndTs;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setpageSize($pageSize)
    {
        $this->requestParameters['pageSize'] = $pageSize;
        $this->queryParameters['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $startBeginTs
     *
     * @return $this
     */
    public function setstartBeginTs($startBeginTs)
    {
        $this->requestParameters['startBeginTs'] = $startBeginTs;
        $this->queryParameters['startBeginTs'] = $startBeginTs;

        return $this;
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setpageIndex($pageIndex)
    {
        $this->requestParameters['pageIndex'] = $pageIndex;
        $this->queryParameters['pageIndex'] = $pageIndex;

        return $this;
    }

    /**
     * @param string $isArchived
     *
     * @return $this
     */
    public function setisArchived($isArchived)
    {
        $this->requestParameters['isArchived'] = $isArchived;
        $this->queryParameters['isArchived'] = $isArchived;

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
        $this->queryParameters['jobName'] = $jobName;

        return $this;
    }
}
