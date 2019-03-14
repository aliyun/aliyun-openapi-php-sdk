<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateFlowProjectUser
 *
 * @method string getProjectId()
 * @method array getUsers()
 */
class CreateFlowProjectUserRequest extends \RpcAcsRequest
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
            'CreateFlowProjectUser',
            'emr'
        );
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
     * @param array $users
     *
     * @return $this
     */
    public function setUsers(array $users)
    {
        $this->requestParameters['Users'] = $users;
        foreach ($users as $i => $iValue) {
            $this->queryParameters['User.' . ($i + 1) . '.UserId'] = $users[$i]['UserId'];
            $this->queryParameters['User.' . ($i + 1) . '.UserName'] = $users[$i]['UserName'];
        }

        return $this;
    }
}
