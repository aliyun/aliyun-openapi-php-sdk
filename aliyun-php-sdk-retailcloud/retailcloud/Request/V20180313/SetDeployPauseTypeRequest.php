<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetDeployPauseType
 *
 * @method string getDeployPauseType()
 * @method string getDeployOrderId()
 */
class SetDeployPauseTypeRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'SetDeployPauseType',
            'retailcloud'
        );
    }

    /**
     * @param string $deployPauseType
     *
     * @return $this
     */
    public function setDeployPauseType($deployPauseType)
    {
        $this->requestParameters['DeployPauseType'] = $deployPauseType;
        $this->queryParameters['DeployPauseType'] = $deployPauseType;

        return $this;
    }

    /**
     * @param string $deployOrderId
     *
     * @return $this
     */
    public function setDeployOrderId($deployOrderId)
    {
        $this->requestParameters['DeployOrderId'] = $deployOrderId;
        $this->queryParameters['DeployOrderId'] = $deployOrderId;

        return $this;
    }
}
