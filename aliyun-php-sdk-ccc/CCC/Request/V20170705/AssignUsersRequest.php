<?php

namespace CCC\Request\V20170705;

/**
 * Request of AssignUsers
 *
 * @method array getUserRamIds()
 * @method array getSkillLevels()
 * @method string getInstanceId()
 * @method array getRoleIds()
 * @method array getSkillGroupIds()
 */
class AssignUsersRequest extends \RpcAcsRequest
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
            'AssignUsers'
        );
    }

    /**
     * @param array $userRamIds
     *
     * @return $this
     */
    public function setUserRamIds(array $userRamIds)
    {
        $this->requestParameters['UserRamIds'] = $userRamIds;
        foreach ($userRamIds as $i => $iValue) {
            $this->queryParameters['UserRamId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $skillLevels
     *
     * @return $this
     */
    public function setSkillLevels(array $skillLevels)
    {
        $this->requestParameters['SkillLevels'] = $skillLevels;
        foreach ($skillLevels as $i => $iValue) {
            $this->queryParameters['SkillLevel.' . ($i + 1)] = $iValue;
        }

        return $this;
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
     * @param array $roleIds
     *
     * @return $this
     */
    public function setRoleIds(array $roleIds)
    {
        $this->requestParameters['RoleIds'] = $roleIds;
        foreach ($roleIds as $i => $iValue) {
            $this->queryParameters['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $skillGroupIds
     *
     * @return $this
     */
    public function setSkillGroupIds(array $skillGroupIds)
    {
        $this->requestParameters['SkillGroupIds'] = $skillGroupIds;
        foreach ($skillGroupIds as $i => $iValue) {
            $this->queryParameters['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
