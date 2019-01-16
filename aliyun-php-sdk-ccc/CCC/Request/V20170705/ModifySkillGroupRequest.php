<?php

namespace CCC\Request\V20170705;

/**
 * Request of ModifySkillGroup
 *
 * @method array getSkillLevels()
 * @method string getInstanceId()
 * @method string getAllowPrivateOutboundNumber()
 * @method array getOutboundPhoneNumberIds()
 * @method string getSkillGroupId()
 * @method string getName()
 * @method string getDescription()
 * @method array getUserIds()
 */
class ModifySkillGroupRequest extends \RpcAcsRequest
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
            'ModifySkillGroup'
        );
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
     * @param string $allowPrivateOutboundNumber
     *
     * @return $this
     */
    public function setAllowPrivateOutboundNumber($allowPrivateOutboundNumber)
    {
        $this->requestParameters['AllowPrivateOutboundNumber'] = $allowPrivateOutboundNumber;
        $this->queryParameters['AllowPrivateOutboundNumber'] = $allowPrivateOutboundNumber;

        return $this;
    }

    /**
     * @param array $outboundPhoneNumberIds
     *
     * @return $this
     */
    public function setOutboundPhoneNumberIds(array $outboundPhoneNumberIds)
    {
        $this->requestParameters['OutboundPhoneNumberIds'] = $outboundPhoneNumberIds;
        foreach ($outboundPhoneNumberIds as $i => $iValue) {
            $this->queryParameters['OutboundPhoneNumberId.' . ($i + 1)] = $iValue;
        }

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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

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
