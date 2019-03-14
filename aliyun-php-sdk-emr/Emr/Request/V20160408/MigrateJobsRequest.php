<?php

namespace Emr\Request\V20160408;

/**
 * Request of MigrateJobs
 *
 * @method string getResourceOwnerId()
 * @method string getProjectName()
 */
class MigrateJobsRequest extends \RpcAcsRequest
{

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
            'Emr',
            '2016-04-08',
            'MigrateJobs',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function setProjectName($projectName)
    {
        $this->requestParameters['ProjectName'] = $projectName;
        $this->queryParameters['ProjectName'] = $projectName;

        return $this;
    }
}
