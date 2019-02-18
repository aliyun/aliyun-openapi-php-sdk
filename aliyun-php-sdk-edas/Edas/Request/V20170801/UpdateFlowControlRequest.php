<?php

namespace Edas\Request\V20170801;

/**
 * Request of UpdateFlowControl
 *
 * @method string getConsumerAppId()
 * @method string getGranularity()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getServiceName()
 * @method string getThreshold()
 * @method string getRuleId()
 * @method string getStrategy()
 * @method string getMethodName()
 */
class UpdateFlowControlRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/flowControl';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'UpdateFlowControl'
        );
    }

    /**
     * @param string $consumerAppId
     *
     * @return $this
     */
    public function setConsumerAppId($consumerAppId)
    {
        $this->requestParameters['ConsumerAppId'] = $consumerAppId;
        $this->queryParameters['ConsumerAppId'] = $consumerAppId;

        return $this;
    }

    /**
     * @param string $granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        $this->requestParameters['Granularity'] = $granularity;
        $this->queryParameters['Granularity'] = $granularity;

        return $this;
    }

    /**
     * @param string $ruleType
     *
     * @return $this
     */
    public function setRuleType($ruleType)
    {
        $this->requestParameters['RuleType'] = $ruleType;
        $this->queryParameters['RuleType'] = $ruleType;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $urlVar
     *
     * @return $this
     */
    public function setUrlVar($urlVar)
    {
        $this->requestParameters['UrlVar'] = $urlVar;
        $this->queryParameters['UrlVar'] = $urlVar;

        return $this;
    }

    /**
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->requestParameters['ServiceName'] = $serviceName;
        $this->queryParameters['ServiceName'] = $serviceName;

        return $this;
    }

    /**
     * @param string $threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->requestParameters['Threshold'] = $threshold;
        $this->queryParameters['Threshold'] = $threshold;

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
     * @param string $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->requestParameters['Strategy'] = $strategy;
        $this->queryParameters['Strategy'] = $strategy;

        return $this;
    }

    /**
     * @param string $methodName
     *
     * @return $this
     */
    public function setMethodName($methodName)
    {
        $this->requestParameters['MethodName'] = $methodName;
        $this->queryParameters['MethodName'] = $methodName;

        return $this;
    }
}
