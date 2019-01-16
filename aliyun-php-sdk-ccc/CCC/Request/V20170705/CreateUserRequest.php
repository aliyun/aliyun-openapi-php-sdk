<?php

namespace CCC\Request\V20170705;

/**
 * Request of CreateUser
 *
 * @method string getPrivateOutboundNumberId()
 * @method array getSkillLevels()
 * @method string getInstanceId()
 * @method string getLoginName()
 * @method string getPhone()
 * @method array getRoleIds()
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
