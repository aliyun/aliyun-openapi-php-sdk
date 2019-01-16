<?php

namespace CCC\Request\V20170705;

/**
 * Request of AddNumberToSkillGroup
 *
 * @method string getNumber()
 * @method string getInstanceId()
 * @method string getSkillGroupId()
 */
class AddNumberToSkillGroupRequest extends \RpcAcsRequest
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
            'AddNumberToSkillGroup'
        );
    }

    /**
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->requestParameters['Number'] = $number;
        $this->queryParameters['Number'] = $number;

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
