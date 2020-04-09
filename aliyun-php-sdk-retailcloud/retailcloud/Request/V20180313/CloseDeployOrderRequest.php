<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CloseDeployOrder
 *
 * @method string getDeployOrderId()
 */
class CloseDeployOrderRequest extends \RpcAcsRequest
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
            'CloseDeployOrder',
            'retailcloud'
        );
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
