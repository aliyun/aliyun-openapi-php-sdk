<?php

namespace aegis\Request\V20161111;

/**
 * Request of CreateOrUpdateGroup
 *
 * @method string getRuleIds()
 * @method string getSourceIp()
 * @method string getMachineGroupIds()
 * @method string getDescription()
 * @method string getId()
 * @method string getLang()
 * @method string getGroupName()
 */
class CreateOrUpdateGroupRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'CreateOrUpdateGroup',
            'vipaegis'
        );
    }

    /**
     * @param string $ruleIds
     *
     * @return $this
     */
    public function setRuleIds($ruleIds)
    {
        $this->requestParameters['RuleIds'] = $ruleIds;
        $this->queryParameters['RuleIds'] = $ruleIds;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $machineGroupIds
     *
     * @return $this
     */
    public function setMachineGroupIds($machineGroupIds)
    {
        $this->requestParameters['MachineGroupIds'] = $machineGroupIds;
        $this->queryParameters['MachineGroupIds'] = $machineGroupIds;

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
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->requestParameters['GroupName'] = $groupName;
        $this->queryParameters['GroupName'] = $groupName;

        return $this;
    }
}
