<?php

namespace cr\Request\V20160607;

/**
 * Request of GetRepoSyncTask
 *
 * @method string getRepoNamespace()
 * @method string getRepoName()
 * @method string getSyncTaskId()
 */
class GetRepoSyncTaskRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/repos/[RepoNamespace]/[RepoName]/syncTasks/[SyncTaskId]';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetRepoSyncTask',
            'cr'
        );
    }

    /**
     * @param string $repoNamespace
     *
     * @return $this
     */
    public function setRepoNamespace($repoNamespace)
    {
        $this->requestParameters['RepoNamespace'] = $repoNamespace;
        $this->pathParameters['RepoNamespace'] = $repoNamespace;

        return $this;
    }

    /**
     * @param string $repoName
     *
     * @return $this
     */
    public function setRepoName($repoName)
    {
        $this->requestParameters['RepoName'] = $repoName;
        $this->pathParameters['RepoName'] = $repoName;

        return $this;
    }

    /**
     * @param string $syncTaskId
     *
     * @return $this
     */
    public function setSyncTaskId($syncTaskId)
    {
        $this->requestParameters['SyncTaskId'] = $syncTaskId;
        $this->pathParameters['SyncTaskId'] = $syncTaskId;

        return $this;
    }
}
