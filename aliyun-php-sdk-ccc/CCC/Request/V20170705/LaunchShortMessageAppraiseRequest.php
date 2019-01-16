<?php

namespace CCC\Request\V20170705;

/**
 * Request of LaunchShortMessageAppraise
 *
 * @method string getAcid()
 * @method string getInstanceId()
 * @method string getContactType()
 * @method string getPhoneNumbers()
 * @method string getSkillGroupId()
 */
class LaunchShortMessageAppraiseRequest extends \RpcAcsRequest
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
            'LaunchShortMessageAppraise'
        );
    }

    /**
     * @param string $acid
     *
     * @return $this
     */
    public function setAcid($acid)
    {
        $this->requestParameters['Acid'] = $acid;
        $this->queryParameters['Acid'] = $acid;

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
     * @param string $contactType
     *
     * @return $this
     */
    public function setContactType($contactType)
    {
        $this->requestParameters['ContactType'] = $contactType;
        $this->queryParameters['ContactType'] = $contactType;

        return $this;
    }

    /**
     * @param string $phoneNumbers
     *
     * @return $this
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->requestParameters['PhoneNumbers'] = $phoneNumbers;
        $this->queryParameters['PhoneNumbers'] = $phoneNumbers;

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
}
