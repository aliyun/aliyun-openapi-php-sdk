<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRuleAction
 *
 * @method string getConfiguration()
 * @method string getIotInstanceId()
 * @method string getRuleId()
 * @method string getType()
 * @method string getErrorActionFlag()
 */
class CreateRuleActionRequest extends \RpcAcsRequest
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
            'CreateRuleAction',
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
     * @param string $ruleId
     *
     * @return $this
     */
    public function setRuleId($ruleId)
    {
        $this->requestParameters['RuleId'] = $ruleId;
        $this->queryParameters['RuleId'] = $ruleId;

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

    /**
     * @param string $errorActionFlag
     *
     * @return $this
     */
    public function setErrorActionFlag($errorActionFlag)
    {
        $this->requestParameters['ErrorActionFlag'] = $errorActionFlag;
        $this->queryParameters['ErrorActionFlag'] = $errorActionFlag;

        return $this;
    }
}
