<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyJobExecutionPlanParam
 *
 * @method string getResourceOwnerId()
 * @method string getParamName()
 * @method string getParamValue()
 * @method string getId()
 */
class ModifyJobExecutionPlanParamRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'ModifyJobExecutionPlanParam',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $paramName
     *
     * @return $this
     */
    public function setParamName($paramName)
    {
        $this->requestParameters['ParamName'] = $paramName;
        $this->queryParameters['ParamName'] = $paramName;

        return $this;
    }

    /**
     * @param string $paramValue
     *
     * @return $this
     */
    public function setParamValue($paramValue)
    {
        $this->requestParameters['ParamValue'] = $paramValue;
        $this->queryParameters['ParamValue'] = $paramValue;

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
}
