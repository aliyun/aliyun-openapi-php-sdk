<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListProjectBindQueueResource
 *
 * @method string getqueueName()
 * @method string getprojectName()
 * @method string getclusterId()
 */
class ListProjectBindQueueResourceRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/queueresource';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'ListProjectBindQueueResource',
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
}
