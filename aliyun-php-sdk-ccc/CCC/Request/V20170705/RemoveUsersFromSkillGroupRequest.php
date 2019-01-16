<?php

namespace CCC\Request\V20170705;

/**
 * Request of RemoveUsersFromSkillGroup
 *
 * @method string getInstanceId()
 * @method string getSkillGroupId()
 * @method array getUserIds()
 */
class RemoveUsersFromSkillGroupRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'RemoveUsersFromSkillGroup'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function setSkillGroupId($skillGroupId)
    {
        $this->requestParameters['SkillGroupId'] = $skillGroupId;
        $this->queryParameters['SkillGroupId'] = $skillGroupId;

        return $this;
    }

    /**
     * @param array $userIds
     *
     * @return $this
     */
    public function setUserIds(array $userIds)
    {
        $this->requestParameters['UserIds'] = $userIds;
        foreach ($userIds as $i => $iValue) {
            $this->queryParameters['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
