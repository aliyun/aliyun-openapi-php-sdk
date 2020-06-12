<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSceneRule
 *
 * @method string getRuleName()
 * @method string getIotInstanceId()
 * @method string getRuleDescription()
 * @method string getRuleContent()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateSceneRuleRequest extends \RpcAcsRequest
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
            'CreateSceneRule',
            'iot'
        );
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        $this->requestParameters['RuleName'] = $ruleName;
        $this->queryParameters['RuleName'] = $ruleName;

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
     * @param string $ruleDescription
     *
     * @return $this
     */
    public function setRuleDescription($ruleDescription)
    {
        $this->requestParameters['RuleDescription'] = $ruleDescription;
        $this->queryParameters['RuleDescription'] = $ruleDescription;

        return $this;
    }

    /**
     * @param string $ruleContent
     *
     * @return $this
     */
    public function setRuleContent($ruleContent)
    {
        $this->requestParameters['RuleContent'] = $ruleContent;
        $this->queryParameters['RuleContent'] = $ruleContent;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }
}
