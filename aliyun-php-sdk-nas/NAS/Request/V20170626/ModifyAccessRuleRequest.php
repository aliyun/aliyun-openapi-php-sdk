<?php

namespace NAS\Request\V20170626;

/**
 * Request of ModifyAccessRule
 *
 * @method string getRWAccessType()
 * @method string getSourceCidrIp()
 * @method string getUserAccessType()
 * @method string getPriority()
 * @method string getAccessGroupName()
 * @method string getAccessRuleId()
 */
class ModifyAccessRuleRequest extends \RpcAcsRequest
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
            'NAS',
            '2017-06-26',
            'ModifyAccessRule',
            'nas'
        );
    }

    /**
     * @param string $rWAccessType
     *
     * @return $this
     */
    public function setRWAccessType($rWAccessType)
    {
        $this->requestParameters['RWAccessType'] = $rWAccessType;
        $this->queryParameters['RWAccessType'] = $rWAccessType;

        return $this;
    }

    /**
     * @param string $sourceCidrIp
     *
     * @return $this
     */
    public function setSourceCidrIp($sourceCidrIp)
    {
        $this->requestParameters['SourceCidrIp'] = $sourceCidrIp;
        $this->queryParameters['SourceCidrIp'] = $sourceCidrIp;

        return $this;
    }

    /**
     * @param string $userAccessType
     *
     * @return $this
     */
    public function setUserAccessType($userAccessType)
    {
        $this->requestParameters['UserAccessType'] = $userAccessType;
        $this->queryParameters['UserAccessType'] = $userAccessType;

        return $this;
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->requestParameters['Priority'] = $priority;
        $this->queryParameters['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function setAccessGroupName($accessGroupName)
    {
        $this->requestParameters['AccessGroupName'] = $accessGroupName;
        $this->queryParameters['AccessGroupName'] = $accessGroupName;

        return $this;
    }

    /**
     * @param string $accessRuleId
     *
     * @return $this
     */
    public function setAccessRuleId($accessRuleId)
    {
        $this->requestParameters['AccessRuleId'] = $accessRuleId;
        $this->queryParameters['AccessRuleId'] = $accessRuleId;

        return $this;
    }
}
