<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateUser
 *
 * @method string getPrivateOutboundNumberId()
 * @method string getLoginName()
 * @method array getRoleIds()
 * @method array getSkillLevels()
 * @method string getInstanceId()
 * @method string getPhone()
 * @method string getDisplayName()
 * @method array getSkillGroupIds()
 * @method string getEmail()
 */
class CreateUserRequest extends \RpcAcsRequest
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
            'CreateUser'
        );
    }

    /**
     * @param string $privateOutboundNumberId
     *
     * @return $this
     */
    public function setPrivateOutboundNumberId($privateOutboundNumberId)
    {
        $this->requestParameters['PrivateOutboundNumberId'] = $privateOutboundNumberId;
        $this->queryParameters['PrivateOutboundNumberId'] = $privateOutboundNumberId;

        return $this;
    }

    /**
     * @param string $loginName
     *
     * @return $this
     */
    public function setLoginName($loginName)
    {
        $this->requestParameters['LoginName'] = $loginName;
        $this->queryParameters['LoginName'] = $loginName;

        return $this;
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
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->requestParameters['Phone'] = $phone;
        $this->queryParameters['Phone'] = $phone;

        return $this;
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->requestParameters['DisplayName'] = $displayName;
        $this->queryParameters['DisplayName'] = $displayName;

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

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->requestParameters['Email'] = $email;
        $this->queryParameters['Email'] = $email;

        return $this;
    }
}
