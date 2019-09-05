<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifySkillGroupOfUser
 *
 * @method array getRoleIds()
 * @method string getUserId()
 * @method array getSkillLevels()
 * @method string getInstanceId()
 * @method array getSkillGroupIds()
 */
class ModifySkillGroupOfUserRequest extends \RpcAcsRequest
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
            'ModifySkillGroupOfUser'
        );
    }

    /**
     * @param array $roleId
     *
     * @return $this
     */
	public function setRoleIds(array $roleId)
	{
	    $this->requestParameters['RoleIds'] = $roleId;
		foreach ($roleId as $i => $iValue) {
			$this->queryParameters['RoleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }

    /**
     * @param array $skillLevel
     *
     * @return $this
     */
	public function setSkillLevels(array $skillLevel)
	{
	    $this->requestParameters['SkillLevels'] = $skillLevel;
		foreach ($skillLevel as $i => $iValue) {
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
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function setSkillGroupIds(array $skillGroupId)
	{
	    $this->requestParameters['SkillGroupIds'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->queryParameters['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
