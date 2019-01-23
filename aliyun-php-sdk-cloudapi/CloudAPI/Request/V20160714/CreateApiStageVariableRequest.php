<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of CreateApiStageVariable
 *
 * @method string getSupportRoute()
 * @method string getSecurityToken()
 * @method string getVariableName()
 * @method string getVariableValue()
 * @method string getGroupId()
 * @method string getStageRouteModel()
 * @method string getStageId()
 */
class CreateApiStageVariableRequest extends \RpcAcsRequest
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
            'CreateApiStageVariable',
            'apigateway'
        );
    }

    /**
     * @param string $supportRoute
     *
     * @return $this
     */
    public function setSupportRoute($supportRoute)
    {
        $this->requestParameters['SupportRoute'] = $supportRoute;
        $this->queryParameters['SupportRoute'] = $supportRoute;

        return $this;
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
     * @param string $variableValue
     *
     * @return $this
     */
    public function setVariableValue($variableValue)
    {
        $this->requestParameters['VariableValue'] = $variableValue;
        $this->queryParameters['VariableValue'] = $variableValue;

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
     * @param string $stageRouteModel
     *
     * @return $this
     */
    public function setStageRouteModel($stageRouteModel)
    {
        $this->requestParameters['StageRouteModel'] = $stageRouteModel;
        $this->queryParameters['StageRouteModel'] = $stageRouteModel;

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
