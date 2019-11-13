<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateGtmAccessStrategy
 *
 * @method string getDefaultAddrPoolId()
 * @method string getFailoverAddrPoolId()
 * @method string getStrategyName()
 * @method string getAccessLines()
 * @method string getUserClientIp()
 * @method string getStrategyId()
 * @method string getLang()
 */
class UpdateGtmAccessStrategyRequest extends \RpcAcsRequest
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
            'Alidns',
            '2015-01-09',
            'UpdateGtmAccessStrategy',
            'alidns'
        );
    }

    /**
     * @param string $defaultAddrPoolId
     *
     * @return $this
     */
    public function setDefaultAddrPoolId($defaultAddrPoolId)
    {
        $this->requestParameters['DefaultAddrPoolId'] = $defaultAddrPoolId;
        $this->queryParameters['DefaultAddrPoolId'] = $defaultAddrPoolId;

        return $this;
    }

    /**
     * @param string $failoverAddrPoolId
     *
     * @return $this
     */
    public function setFailoverAddrPoolId($failoverAddrPoolId)
    {
        $this->requestParameters['FailoverAddrPoolId'] = $failoverAddrPoolId;
        $this->queryParameters['FailoverAddrPoolId'] = $failoverAddrPoolId;

        return $this;
    }

    /**
     * @param string $strategyName
     *
     * @return $this
     */
    public function setStrategyName($strategyName)
    {
        $this->requestParameters['StrategyName'] = $strategyName;
        $this->queryParameters['StrategyName'] = $strategyName;

        return $this;
    }

    /**
     * @param string $accessLines
     *
     * @return $this
     */
    public function setAccessLines($accessLines)
    {
        $this->requestParameters['AccessLines'] = $accessLines;
        $this->queryParameters['AccessLines'] = $accessLines;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $strategyId
     *
     * @return $this
     */
    public function setStrategyId($strategyId)
    {
        $this->requestParameters['StrategyId'] = $strategyId;
        $this->queryParameters['StrategyId'] = $strategyId;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
