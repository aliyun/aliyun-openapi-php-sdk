<?php

namespace Edas\Request\V20170801;

/**
 * Request of InsertDegradeControl
 *
 * @method string getDuration()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getRtThreshold()
 * @method string getServiceName()
 * @method string getMethodName()
 */
class InsertDegradeControlRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/degradeControl';

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
            'Edas',
            '2017-08-01',
            'InsertDegradeControl'
        );
    }

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->requestParameters['Duration'] = $duration;
        $this->queryParameters['Duration'] = $duration;

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
     * @param string $rtThreshold
     *
     * @return $this
     */
    public function setRtThreshold($rtThreshold)
    {
        $this->requestParameters['RtThreshold'] = $rtThreshold;
        $this->queryParameters['RtThreshold'] = $rtThreshold;

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
