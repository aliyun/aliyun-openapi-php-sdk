<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListJob
 *
 * @method string getqueueName()
 * @method string getprojectName()
 * @method string getpageSize()
 * @method string getisShowFullField()
 * @method string getpageIndex()
 * @method string getengineVersion()
 * @method string getclusterId()
 * @method string getjobType()
 * @method string getapiType()
 * @method string getjobName()
 * @method string getfolderId()
 */
class ListJobRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/jobs';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'ListJob',
            'foas'
        );
    }

    /**
     * @param string $queueName
     *
     * @return $this
     */
    public function setqueueName($queueName)
    {
        $this->requestParameters['queueName'] = $queueName;
        $this->queryParameters['queueName'] = $queueName;

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
     * @param string $isShowFullField
     *
     * @return $this
     */
    public function setisShowFullField($isShowFullField)
    {
        $this->requestParameters['isShowFullField'] = $isShowFullField;
        $this->queryParameters['isShowFullField'] = $isShowFullField;

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
     * @param string $engineVersion
     *
     * @return $this
     */
    public function setengineVersion($engineVersion)
    {
        $this->requestParameters['engineVersion'] = $engineVersion;
        $this->queryParameters['engineVersion'] = $engineVersion;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setclusterId($clusterId)
    {
        $this->requestParameters['clusterId'] = $clusterId;
        $this->queryParameters['clusterId'] = $clusterId;

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

    /**
     * @param string $folderId
     *
     * @return $this
     */
    public function setfolderId($folderId)
    {
        $this->requestParameters['folderId'] = $folderId;
        $this->queryParameters['folderId'] = $folderId;

        return $this;
    }
}
