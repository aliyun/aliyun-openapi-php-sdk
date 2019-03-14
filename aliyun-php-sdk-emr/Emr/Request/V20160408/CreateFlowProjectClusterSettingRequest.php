<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateFlowProjectClusterSetting
 *
 * @method array getUserLists()
 * @method array getQueueLists()
 * @method array getHostLists()
 * @method string getClusterId()
 * @method string getDefaultQueue()
 * @method string getProjectId()
 * @method string getDefaultUser()
 */
class CreateFlowProjectClusterSettingRequest extends \RpcAcsRequest
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
            'CreateFlowProjectClusterSetting',
            'emr'
        );
    }

    /**
     * @param array $userLists
     *
     * @return $this
     */
    public function setUserLists(array $userLists)
    {
        $this->requestParameters['UserLists'] = $userLists;
        foreach ($userLists as $i => $iValue) {
            $this->queryParameters['UserList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $queueLists
     *
     * @return $this
     */
    public function setQueueLists(array $queueLists)
    {
        $this->requestParameters['QueueLists'] = $queueLists;
        foreach ($queueLists as $i => $iValue) {
            $this->queryParameters['QueueList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $hostLists
     *
     * @return $this
     */
    public function setHostLists(array $hostLists)
    {
        $this->requestParameters['HostLists'] = $hostLists;
        foreach ($hostLists as $i => $iValue) {
            $this->queryParameters['HostList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $defaultQueue
     *
     * @return $this
     */
    public function setDefaultQueue($defaultQueue)
    {
        $this->requestParameters['DefaultQueue'] = $defaultQueue;
        $this->queryParameters['DefaultQueue'] = $defaultQueue;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param string $defaultUser
     *
     * @return $this
     */
    public function setDefaultUser($defaultUser)
    {
        $this->requestParameters['DefaultUser'] = $defaultUser;
        $this->queryParameters['DefaultUser'] = $defaultUser;

        return $this;
    }
}
