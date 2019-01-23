<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DeleteApiStageVariable
 *
 * @method string getSecurityToken()
 * @method string getVariableName()
 * @method string getGroupId()
 * @method string getStageId()
 */
class DeleteApiStageVariableRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'DeleteApiStageVariable',
            'apigateway'
        );
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $variableName
     *
     * @return $this
     */
    public function setVariableName($variableName)
    {
        $this->requestParameters['VariableName'] = $variableName;
        $this->queryParameters['VariableName'] = $variableName;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $stageId
     *
     * @return $this
     */
    public function setStageId($stageId)
    {
        $this->requestParameters['StageId'] = $stageId;
        $this->queryParameters['StageId'] = $stageId;

        return $this;
    }
}
