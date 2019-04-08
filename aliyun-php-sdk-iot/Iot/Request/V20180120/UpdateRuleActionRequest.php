<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateRuleAction
 *
 * @method string getConfiguration()
 * @method string getIotInstanceId()
 * @method string getActionId()
 * @method string getType()
 */
class UpdateRuleActionRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'UpdateRuleAction',
            'iot'
        );
    }

    /**
     * @param string $configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->requestParameters['Configuration'] = $configuration;
        $this->queryParameters['Configuration'] = $configuration;

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $actionId
     *
     * @return $this
     */
    public function setActionId($actionId)
    {
        $this->requestParameters['ActionId'] = $actionId;
        $this->queryParameters['ActionId'] = $actionId;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }
}
